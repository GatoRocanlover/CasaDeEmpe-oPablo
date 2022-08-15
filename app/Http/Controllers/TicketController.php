<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\TicketsDesempeño;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class TicketController extends Controller
{

    public function index(Request $request)
    {
        $search_ticket = trim($request->get('search_ticket'));
        $ticket = DB::table('tickets_desempeño')->orderBy('id_prendas','desc')
            ->select(
                'id_prendas',
                'nombre_cliente',
                'nombre_prenda',
                'descripcion_generica',
                'caracteristicas_prenda',
                'avaluo_prenda',
                'prestamo_prenda',
                'cantidad_pago',
                'cambio_boleta',
            )
            ->where('id_prendas', 'LIKE', '%' . $search_ticket . '%')
            ->orWhere('nombre_cliente', 'LIKE', '%' . $search_ticket . '%')
            ->paginate(5);
        return view('admin.TicketDesempeño', compact('ticket'));
    }

    public function store(Request $request)
    {
        $reglas = [
            "cantidad_pago" => 'bail|required',
        ];


        $mensajes = [
          "cantidad_pago.required" => "NO SE INGRESO EL MONTO A PAGAR, FAVOR DE VERIFICAR LOS DATOS CORRECTAMENTE!!",
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

        return redirect()->route('Ticket_Desempeño')->with('success','SE REALIZO EL PAGO');
    }

    public function vistaTicket($id)
    {
        $ticket_vista = TicketsDesempeño::find($id);

        return View::make('pdf.ticket_impren')->with(
            [
                "dato_tickeimpr" => $ticket_vista

            ]
        );
    }
}