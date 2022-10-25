<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\TicketsDesempeño;
use App\Models\Prenda;
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

    /*     //prueba
        $prenda=new Prenda();
  
        $prenda->folio_cotizacion=0;
        $prenda->nombre_prenda=0;
        $prenda->descripcion_generica=0;
        $prenda->kilataje_prenda=0;
        $prenda->gramaje_prenda=0;
        $prenda->caracteristicas_prenda=0;
        $prenda->avaluo_prenda=0;
        $prenda->porcentaje_prestamo_sobre_avaluo=0;
        $prenda->prestamo_inicial=0;
        $prenda->prestamo_prenda=0;
        $prenda->fecha_prestamo=0;
        $prenda->fecha_comercializacion='24-10-22';
        $prenda->mes1='24-10-22';
        $prenda->interes=0;
        $prenda->almacenaje=0;
        $prenda->iva=0;
        $prenda->refrendo=0;
        $prenda->desempeño=0;
        $prenda->subtotal=0;
        $prenda->mes2='24-10-22';
        $prenda->interes2=0;
        $prenda->almacenaje2=0;
        $prenda->iva2=0;
        $prenda->refrendo2=0;
        $prenda->desempeño2=0;
        $prenda->subtotal2=0;
        $prenda->mes3='24-10-22';
        $prenda->interes3=0;
        $prenda->almacenaje3=0;
        $prenda->iva3=0;
        $prenda->refrendo3=0;
        $prenda->desempeño3=0;
        $prenda->subtotal3=0;
        $prenda->mes4='24-10-22';
        $prenda->interes4=0;
        $prenda->almacenaje4=0;
        $prenda->iva4=0;
        $prenda->refrendo4=0;
        $prenda->desempeño4=0;
        $prenda->subtotal4=0;
        $prenda->mes5='24-10-22';
        $prenda->interes5=0;
        $prenda->almacenaje5=0;
        $prenda->iva5=0;
        $prenda->refrendo5=0;
        $prenda->desempeño5=0;
        $prenda->subtotal5=0;
        $prenda->abono_capital=0;
        $prenda->importe_anterior=0;
        $prenda->importe_actual=0;
        $prenda->interes_anterior=0;
        $prenda->almacenaje_anterior=0;
        $prenda->iva_anterior=0;
        $prenda->refrendo_anterior=0;
        $prenda->numeros_refrendos=0;
        $prenda->cantidad_pago=0;
        $prenda->cambio_boleta=0;
        $prenda->folio_refrendo=0;
        $prenda->sub_refrendo=0;
        $prenda->total=0;
        $prenda->recargo_des=0;
        $prenda->hora_refrendo='24-10-22';
        $prenda->folio_capi=0;
        $prenda->abono_capital_capi=0;
        $prenda->interes_anterior_capi=0;
        $prenda->almacenaje_anterior_capi=0;
        $prenda->sub_capital=11111;
        $prenda->iva_anterior_capi=0;
        $prenda->total_capi=0;
        $prenda->cantidad_pago_capi=0;
        $prenda->cambio_boleta_capi=0;
        $prenda->importe_anterior_capi=0;
        $prenda->importe_actual_capi=0;
        $prenda->recargo_des_capi=0;
        $prenda->numeros_capital=0;
        $prenda->cantidad_prenda=0;
        $prenda->id_cliente=1;
        
        $prenda->save(); */
        ///fin prueba
     DB::table('prendas')->where('id_prendas',$ticket->id_prendas)->delete();

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
