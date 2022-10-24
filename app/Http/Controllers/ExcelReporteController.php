<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente; // PARA USAR LA TABLA CLIENTES


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
                   "Content-type"        => "text/csv",
                   "Content-Disposition" => "attachment; filename=$fileName",
                   "Pragma"              => "no-cache",
                   "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
                   "Expires"             => "0"

                   );

       $columns = array(
            'id_cliente',
            'Nombre',
            'Direccion',
            'telefono_cliente',
            'socio',
            'NumSocio');

       foreach ($items as $item){
           $arrayDetalle[] = array(
                            'id_cliente' => $item->id_cliente,
                            'Nombre' => $item->nombre_cliente ." " . $item->apellido_cliente,
                            'Direccion' => " C: " .$item->calle_cliente." N. " . $item->numero_cliente." X " . $item->cruzamientos_cliente." " . $item->colonia_cliente,
                            'telefono_cliente' => $item->telefono_cliente,
                            'socio'  => $item->socio,                                       
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
}
