<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\desempeños;
use Illuminate\Support\Facades\View;

class DesempeñoController extends Controller
{

    public function __contruct()
    {
        $this->middleware('permission:ver-listado-boletas-desempeñadas|ver-boleta-desempeñada', ['only' => ['index']]);
        $this->middleware('permission:ver-boleta-desempeñada', ['only' => ['vistaboleta']]);;
    }

    public function index(Request $request)
    {
        $search = trim($request->get('search'));
        $prendaPagarr = desempeños::orderBy('id_prendas', 'desc')
            ->select(
                'id_cliente',
                'folio_cotizacion',
                'nombre_prenda',
                'id_prendas',
                'kilataje_prenda',
                'gramaje_prenda',
                'cantidad_prenda',
                'caracteristicas_prenda',
                'avaluo_prenda',
                'prestamo_inicial',
                'status',
                'porcentaje_prestamo_sobre_avaluo',
                'prestamo_prenda'
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
        return view('admin.Desempeños', compact('prendaPagarr'));
    }


    public function vistaboleta($id)
    {
        $prenda = desempeños::find($id);

        return View::make('pdf.boleta')->with(
            [
                "dato_prenda" => $prenda

            ]
        );
    }
}
