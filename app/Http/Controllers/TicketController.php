<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\TicketsDesempeño;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class TicketController extends Controller
{
    
    public function __contruct()
    {
        $this->middleware('permission:ver-listado-tickets-desempeño|imprimir-ticket-desempeño', ['only' => ['index']]);
        $this->middleware('permission:imprimir-ticket-desempeño', ['only' => ['vistaTicket']]);
        
  ;

    }
    public function index(Request $request)
    {
        $search_ticket = trim($request->get('search_ticket'));
        $ticket = DB::table('tickets_desempeño')->orderBy('id_folio','desc')
            ->select(
                'id_folio',
                'id_prendas',
                'promedio_socio',
                'nombre_cliente',
                'nombre_prenda',
                'cantidad_prenda',
                'descripcion_generica',
                'caracteristicas_prenda',
                'prestamo_prenda',
                'cantidad_pago',
                'cambio_boleta',
            )
            ->where('id_folio', 'LIKE', '%' . $search_ticket . '%')
            ->orWhere('nombre_cliente', 'LIKE', '%' . $search_ticket . '%')
            ->paginate(5);
        return view('admin.TicketDesempeño', compact('ticket'));
    }

    public function store(Request $request)
    {
        $reglas = [
            "cantidad_pago" => 'bail|required',
            "cambio_boleta" => 'bail|required',
        ];


        $mensajes = [
          "cantidad_pago.required" => "NO SE INGRESO EL MONTO A PAGAR, FAVOR DE VERIFICAR LOS DATOS CORRECTAMENTE!!",
          "cambio_boleta.required" => "LA CANTIDAD QUE SE INGRESO ES MENOR A LA CANTIDAD TOTAL A DESEMPEÑAR, VERIFICAR LA INFORMACIÓN!!",
        ];
        $validator = Validator::make(
            $request->all(),
            $reglas,
            $mensajes
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $ticket = TicketsDesempeño::make($request->all());
        $ticket->save();

        return redirect()->route('Ticket_Desempeño')->with('registro','pago');
    }

    public function vistaTicket($id)
    {
        $ticket_vista = TicketsDesempeño::find($id);

        return View::make('pdf.ticket_impren')->with(
            [
                "dato_desempeño" => $ticket_vista

            ]
        );
    }
}
