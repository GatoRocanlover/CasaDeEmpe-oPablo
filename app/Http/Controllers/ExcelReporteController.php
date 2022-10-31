<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente; // PARA USAR LA TABLA CLIENTES
use App\Models\desempeños;// PARA USAR LA TABLA DESEMPEÑOS




class ExcelReporteController extends Controller
{
    public function export(){
        

        $Tipo_socio = $item->socio;

        if ($Tipo_socio == "0.20") {
          echo "SI";
        } elseif ($Tipo_socio == ".25") {
          echo "NO";
        } 
       //Nombre del archivo que generaremos
       $fileName = 'ReporteClientes.csv';
       //Arreglo que contendrá las filas de datos
       $arrayDetalle = Array();

       //Estos son los datos que recibimos del modelo que queremos leer, aquí ustedes cámbienlo por el modelo que necesiten
       $items=Cliente::all();

       //El encabezado que le dice al explorador el tipo de archivo que estamos generando
       $headers = array(
                   "Content-type"        => "text/csv",
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
           $arrayDetalle[] = array(
                            'No.' => $item->id_cliente,
                            'Nombre' => $item->nombre_cliente ." " . $item->apellido_cliente,
                            'Direccion' => " C: " .$item->calle_cliente." N. " . $item->numero_cliente." X " . $item->cruzamientos_cliente." " . $item->colonia_cliente,
                            'Telefono' => $item->telefono_cliente,
                            'Es socio'  => $Tipo_socio,                                       
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
     
       //Esto hace que Laravel exponga el archivo como descarga
       return response()->stream($callback, 200, $headers);
    }
    /*public function exportDesempeños(){

        //Nombre del archivo que generaremos
        $fileName = 'ReporteDesempeños.csv';
        //Arreglo que contendrá las filas de datos
        $arrayDetalle = Array();
 
        //Estos son los datos que recibimos del modelo que queremos leer, aquí ustedes cámbienlo por el modelo que necesiten
        $items=desempeños::all();
 
        //El encabezado que le dice al explorador el tipo de archivo que estamos generando
        $headers = array(
                    "Content-type"        => "text/csv",
                    "Content-Disposition" => "attachment; filename=$fileName",
                    "Pragma"              => "no-cache",
                    "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                    "Expires"             => "0"
 
                    );
 
        $columns = array(
             'Fecha',
             'id_cliente',
             'Folio_Boleta',
             'avaluo_prenda',
             'prestamoAcumulado',
             'telefono_cliente',
             'porcentaje_prestamo_sobre_avaluo',
             'NumSocio');
 
        foreach ($items as $item){
            $arrayDetalle[] = array(
                             'created_at' => $item->created_at,
                             'id_cliente' => $item->id_cliente,
                             'id_prendas' => $item->id_prendas,
                             'avaluo_prenda' =>$item->avaluo_prenda,
                             'prestamoAcumulado'=>$item-> avaluo_prenda,
                             'porcentaje_prestamo_sobre_avaluo' => $item->porcentaje_prestamo_sobre_avaluo,
                             'prestamo_inicial'  => $item->prestamo_inicial,                                       
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
      
        //Esto hace que Laravel exponga el archivo como descarga
        return response()->stream($callback, 200, $headers);
     }*/
}
