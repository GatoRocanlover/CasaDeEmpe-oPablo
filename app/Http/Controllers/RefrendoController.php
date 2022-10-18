<?php

namespace App\Http\Controllers;

//SECCION DONDE IMPORTAMOS LAS CLASES QUE NECESITAMOS//PARA RECIBIR PARAMETROS
use App\Models\Prenda; // PARA USAR LA TABLA CLIENTES
use Illuminate\Support\Facades\View; // PARA USAR LAS VISTAS
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RefrendoController extends Controller
{
    
    public function refrendopago(Request $request)
    {
        $search = trim($request->get('search'));
        $refrendo = Prenda::orderBy('id_prendas', 'desc')
            ->select(
                'id_cliente',
                'nombre_prenda',
                'id_prendas',
                'kilataje_prenda',
                'gramaje_prenda',
                'caracteristicas_prenda',
                'avaluo_prenda',
                'porcentaje_prestamo_sobre_avaluo',
                'prestamo_prenda',
                'numeros_refrendos',
                'prestamo_inicial'
            )
            ->where('id_prendas', 'LIKE', '%' . $search . '%')
            ->orWhereHas('cliente', function ($query) use ($request) {
                $query->where('nombre_cliente', 'LIKE', "%{$request->search}%");
            })
            ->orWhereHas('cliente', function ($query) use ($request) {
                $query->where('apellido_cliente', 'LIKE', "%{$request->search}%");
            })
            ->orWhere('prestamo_prenda', 'LIKE', '%' . $search . '%')
            ->paginate(5);
        return view('admin.refrendo', compact('refrendo'));
    }

}
