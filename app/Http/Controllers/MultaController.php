<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Prenda; 
use Carbon\Carbon;
class MultaController extends Controller
{ 
    public function FechasMes(Request $request)
    {
        $prestamos = Prenda::where('mes1', '>=', $request->mes1)
            ->where('mes2', '<=', $request->mes2)
            ->get(); 
            
            foreach ($prestamos as $prestamo) {
                $prestamo->multa = $this->calcularMulta($prestamo);
                //echo($prestamo->multa."<br>");
            }
            $datos['dato_prenda'] = $prestamos;
            return view('admin.DesempeñoDato')->with(
            [
                "dato_prenda" => $datos
            ]);
    }

    public function calcularMulta($prestamos){
        $multa = $prestamos->interes;

        
            $estado = $prestamos->estado;

            $fecha_fin = Carbon::parse($prestamos->fecha_fin);
            $fecha_entrega = Carbon::parse($prestamos->fecha_entrega);
            $fecha_actual = Carbon::now();

                if($fecha_entrega > $fecha_fin)
                {
                    $diferencia = $fecha_entrega->diffInDays($fecha_fin);
                    $multa = ($multa + $diferencia);
                 
                }
                else{
                    $multa = $multa + 0;
                  
                }
                return $multa;    
        }
        
    


}
