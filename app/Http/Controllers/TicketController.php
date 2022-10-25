<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\TicketsDesempeño;
use App\Models\desempeños;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class TicketController extends Controller
{

    public function __contruct()
    {
        $this->middleware('permission:ver-listado-tickets-desempeño|imprimir-ticket-desempeño', ['only' => ['index']]);
        $this->middleware('permission:imprimir-ticket-desempeño', ['only' => ['vistaTicket']]);;
    }
    public function index(Request $request)
    {
        $search_ticket = trim($request->get('search_ticket'));
        $ticket = DB::table('tickets_desempeño')->orderBy('id_folio', 'desc')
            ->select(
                'id_folio',
                'id_prendas',
                'promedio_socio',
                'nombre_cliente',
                'nombre_prenda',
                'cantidad_prenda',
                'descripcion_generica',
                'caracteristicas_prenda1',
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

        //prueba
        $prenda = new desempeños();

        $prenda->id_prendas = $request->input('id_prendas');
        $prenda->folio_cotizacion = $request->input('folio_cotizacion');
        $prenda->nombre_prenda = $request->input('nombre_prenda');
        $prenda->descripcion_generica = $request->input('descripcion_generica');
        $prenda->kilataje_prenda = $request->input('kilataje_prenda');
        $prenda->gramaje_prenda = $request->input('gramaje_prenda');
        $prenda->caracteristicas_prenda = $request->input('caracteristicas_prenda');
        $prenda->avaluo_prenda = $request->input('avaluo_prenda');
        $prenda->porcentaje_prestamo_sobre_avaluo = $request->input('porcentaje_prestamo_sobre_avaluo');
        $prenda->prestamo_inicial = $request->input('prestamo_inicial');
        $prenda->prestamo_prenda = $request->input('prestamo_prenda');
        $prenda->fecha_prestamo = $request->input('fecha_prestamo');
        $prenda->fecha_comercializacion = $request->input('fecha_comercializacion');

        $prenda->mes1 = $request->input('mes1');
        $prenda->interes = $request->input('interes');
        $prenda->almacenaje = $request->input('almacenaje');
        $prenda->iva = $request->input('iva');
        $prenda->refrendo = $request->input('refrendo');
        $prenda->desempeño = $request->input('desempeño');
        $prenda->subtotal = $request->input('subtotal');
        $prenda->mes2 = $request->input('mes2');
        $prenda->interes2 = $request->input('interes2');
        $prenda->almacenaje2 = $request->input('almacenaje2');
        $prenda->iva2 = $request->input('iva2');
        $prenda->refrendo2 = $request->input('refrendo2');
        $prenda->desempeño2 = $request->input('desempeño2');
        $prenda->subtotal2 = $request->input('subtotal2');
        $prenda->mes3 = $request->input('mes3');
        $prenda->interes3 = $request->input('interes3');
        $prenda->almacenaje3 = $request->input('almacenaje3');
        $prenda->iva3 = $request->input('iva3');
        $prenda->refrendo3 = $request->input('refrendo3');
        $prenda->desempeño3 = $request->input('desempeño3');
        $prenda->subtotal3 = $request->input('subtotal3');
        $prenda->mes4 = $request->input('mes4');
        $prenda->interes4 = $request->input('interes4');
        $prenda->almacenaje4 = $request->input('almacenaje4');
        $prenda->iva4 = $request->input('iva4');
        $prenda->refrendo4 = $request->input('refrendo4');
        $prenda->desempeño4 = $request->input('desempeño4');
        $prenda->subtotal4 = $request->input('subtotal4');
        $prenda->mes5 = $request->input('mes5');
        $prenda->interes5 = $request->input('interes5');
        $prenda->almacenaje5 = $request->input('almacenaje5');
        $prenda->iva5 = $request->input('iva5');
        $prenda->refrendo5 = $request->input('refrendo5');
        $prenda->desempeño5 = $request->input('desempeño5');
        $prenda->subtotal5 = $request->input('subtotal5');


        $prenda->abono_capital=$request->input('abono_capital');
        $prenda->importe_anterior=$request->input('importe_anterior');
        $prenda->importe_actual=$request->input('importe_actual');
        $prenda->interes_anterior=$request->input('interes_anterior');
        $prenda->almacenaje_anterior=$request->input('almacenaje_anterior');
        $prenda->iva_anterior=$request->input('iva_anterior');
        $prenda->refrendo_anterior=$request->input('refrendo_anterior');
        

        $prenda->numeros_refrendos=$request->input('numeros_refrendos');
        $prenda->cantidad_pago1=$request->input('cantidad_pago1');
        $prenda->cambio_boleta1=$request->input('cambio_boleta1');
        $prenda->folio_refrendo=$request->input('folio_refrendo');
        $prenda->sub_refrendo=$request->input('sub_refrendo');
        $prenda->total=$request->input('total');
        $prenda->recargo_des=$request->input('recargo_des');
        $prenda->hora_refrendo=$request->input('hora_refrendo');
        $prenda->folio_capi=$request->input('folio_capi');
        $prenda->abono_capital_capi=$request->input('abono_capital_capi');
        $prenda->interes_anterior_capi=$request->input('interes_anterior_capi');
        $prenda->almacenaje_anterior_capi=$request->input('almacenaje_anterior_capi');
        $prenda->sub_capital=$request->input('sub_capital');
        $prenda->iva_anterior_capi=$request->input('iva_anterior_capi');
        $prenda->total_capi=$request->input('total_capi');
        $prenda->cantidad_pago_capi=$request->input('cantidad_pago_capi');
        $prenda->cambio_boleta_capi=$request->input('cambio_boleta_capi');

        $prenda->importe_anterior_capi=$request->input('importe_anterior_capi');
        $prenda->importe_actual_capi=$request->input('importe_actual_capi');
        $prenda->recargo_des_capi=$request->input('recargo_des_capi');
        $prenda->numeros_capital=$request->input('numeros_capital');
        $prenda->cantidad_prenda=$request->input('cantidad_prenda');
        $prenda->id_cliente=$request->input('id_cliente');
        $prenda->status=$request->input('status');  

        $prenda->save();
        ///fin prueba
        DB::table('prendas')->where('id_prendas', $ticket->id_prendas)->delete();

        return redirect()->route('Ticket_Desempeño')->with('registro', 'pago');
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
