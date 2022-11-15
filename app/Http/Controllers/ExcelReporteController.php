<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente; // PARA USAR LA TABLA CLIENTES
use App\Models\desempeños;// PARA USAR LA TABLA DESEMPEÑOS
use App\Models\TicketsDesempeño;
use App\Models\Prenda;
use Carbon\Carbon;





class ExcelReporteController extends Controller
{
    public function export(){
        

      
       //Nombre del archivo que generaremos
       $fileName = 'ReporteClientes.csv';
       //Arreglo que contendrá las filas de datos
       $arrayDetalle = Array();

       //Estos son los datos que recibimos del modelo que queremos leer, aquí ustedes cámbienlo por el modelo que necesiten
       $items=Cliente::all();

       //El encabezado que le dice al explorador el tipo de archivo que estamos generando
       $headers = array(
                    "Content-Encoding"    => "utf-8",
                    "Content-type"        => "text/csv;charset=utf8",
                    "Content-Disposition" => "attachment; filename=$fileName",
                    "Pragma"              => "no-cache",
                    "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                    "Expires"             => "0"

                   );

       $columns = array(
            'No.',
            'Nombre',
            'Direccion',
            'Telefono',
            'Es socio',
            'NumSocio');

       foreach ($items as $item){

        $Tipo_socio = $item->socio;
        $esSocio = "SI";
        if ($Tipo_socio == "0.20") {
            $esSocio = "SI";
        } elseif ($Tipo_socio == ".25") {
            $esSocio ="NO";
        } 



           $arrayDetalle[] = array(
                            'No.' => $item->id_cliente,
                            'Nombre' => $item->nombre_cliente ." " . $item->apellido_cliente,
                            'Direccion' => " C: " .$item->calle_cliente." N. " . $item->numero_cliente." X " . $item->cruzamientos_cliente." " . $item->colonia_cliente,
                            'Telefono' => $item->telefono_cliente,
                            'Es socio'  => $esSocio,                                       
                            'NumSocio'  => $item->numero_socio
                               );
       }

       $callback = function() use($arrayDetalle, $columns) {
           $file = fopen('php://output', 'w');
           //si no quieren que el csv muestre el titulo de columnas omitan la siguiente línea.
           fputcsv($file, $columns);
                 foreach ($arrayDetalle as $item) {
                     fputcsv($file, $item);
                 }
                 fclose($file);
             };
             echo "\xEF\xBB\xBF";
       //Esto hace que Laravel exponga el archivo como descarga
       return response()->stream($callback, 200, $headers);
       
    }

    
    public function exportDesempeños()
    {

        //Nombre del archivo que generaremos
        $fileName = 'ReporteDesempeños.csv';
        //Arreglo que contendrá las filas de datos
        $arrayDetalle = Array();
 
        //Estos son los datos que recibimos del modelo que queremos leer, aquí ustedes cámbienlo por el modelo que necesiten
        $items=TicketsDesempeño::all();
 
        //El encabezado que le dice al explorador el tipo de archivo que estamos generando
        $headers = array(
                        "Content-Encoding"    => "utf-8",
                        "Content-type"        => "text/csv;charset=utf8",
                        "Content-Disposition" => "attachment; filename=$fileName",
                        "Pragma"              => "no-cache",
                        "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                        "Expires"             => "0"
                    );
 
        $columns = array(
             'Fecha',
             'folio Boleta',
             'Folio',
             'prestamo_prenda',
             'prestamo_prenda_acumulado',
             'interes',
             'interes_acumulado',
             'almacenaje',
             'almacenaje_acumulado',
             'iva',
             'iva_acumulado',
             'total');

            $prestamo_prenda_acumulado=0;
            $interes_acumulado=0;
            $almacenaje_acumulado=0;
            $iva_acumulado=0;

        foreach ($items as $item){ 
            $prestamo_prenda_acumulado=$prestamo_prenda_acumulado+$item->prestamo_prenda_ticket; 
            $interes_acumulado=$interes_acumulado+$item->interes_ticket; 
            $almacenaje_acumulado=$almacenaje_acumulado+$item->almacenaje_ticket;    
            $iva_acumulado=$iva_acumulado+$item->iva_ticket; 


            $arrayDetalle[] = array(
                             'created_at' => $item->created_at->format('d-m-Y'),
                             'Folio Boleta' => $item->id_prendas,
                             'Folio' => $item->id_folio,
                             'prestamo_prenda' =>toMoney($item->prestamo_prenda_ticket),
                             'prestamo_prenda_acumulado' =>toMoney($prestamo_prenda_acumulado),
                             'interes'=>toMoney($item->interes_ticket),
                             'interes_acumulado'=>toMoney($interes_acumulado),
                             'almacenaje' => toMoney($item->almacenaje_ticket),
                             'almacenaje_acumulado' => toMoney($almacenaje_acumulado),
                             'iva'  => toMoney($item->iva_ticket),
                             'iva_acumulado'  => toMoney($iva_acumulado),                                       
                             'total'  =>toMoney($item->total_ticket),
                             
                                );
                                
        }

    
        $callback = function() use($arrayDetalle, $columns) {
            $file = fopen('php://output', 'w');
            //si no quieren que el csv muestre el titulo de columnas omitan la siguiente línea.
            fputcsv($file, $columns);
                  foreach ($arrayDetalle as $item) {
                      fputcsv($file, $item);
                  }
                  fclose($file);
              };
              echo "\xEF\xBB\xBF";
      
        //Esto hace que Laravel exponga el archivo como descarga
        return response()->stream($callback, 200, $headers);
     }

     public function exportEmpeños()
    {

        //Nombre del archivo que generaremos
        $fileName = 'ReporteEmpeños.csv';
        //Arreglo que contendrá las filas de datos
        $arrayDetalle = Array();
 
        //Estos son los datos que recibimos del modelo que queremos leer, aquí ustedes cámbienlo por el modelo que necesiten
        $items=Prenda::all();
 
        //El encabezado que le dice al explorador el tipo de archivo que estamos generando
        $headers = array(
                   
                    "Content-Encoding"    => "utf-8",
                    "Content-type"        => "text/csv;charset=utf8",
                    "Content-Disposition" => "attachment; filename=$fileName",
                    "Pragma"              => "no-cache",
                    "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                    "Expires"             => "0"
 
                    );
 
        $columns = array(
             'fecha_prestamo',
             'id_prendas',
             'Operacion',
             'prestamo_inicial',
             'Prestamo_acumulado');

            $prestamoacumulado=0;
        foreach ($items as $item){

            $prestamoacumulado=$prestamoacumulado+$item->prestamo_inicial;

            $arrayDetalle[] = array(
                             'fecha_prestamo' => $item->fecha_prestamo,
                             'id_prendas' => $item->id_prendas,
                             'Operacion' => " Empeño: " .$item->id_prendas,
                             'prestamo_inicial' =>toMoney($item->prestamo_inicial),
                             'Prestamo_acumulado' =>toMoney($prestamoacumulado)
                                );
                                
        }

    
        $callback = function() use($arrayDetalle, $columns) {
            
            $file = fopen('php://output', 'w');
            //si no quieren que el csv muestre el titulo de columnas omitan la siguiente línea.
            fputcsv($file, $columns);
                  foreach ($arrayDetalle as $item) {
                  
                      fputcsv($file, $item);
                      
                  }
                  fclose($file);
              };
              echo "\xEF\xBB\xBF";
      
        //Esto hace que Laravel exponga el archivo como descarga
        return response()->stream($callback, 200, $headers);
     }
}
