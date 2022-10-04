<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prenda;
class CapitalController extends Controller
{
    public function capitalpago(Request $request)
    {
        $search = trim($request->get('search'));
        $capital = Prenda::orderBy('id_prendas', 'desc')
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
        return view('admin.abono_capital', compact('capital'));
    }
}
