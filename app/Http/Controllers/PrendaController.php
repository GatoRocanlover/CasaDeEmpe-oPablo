<?php

namespace App\Http\Controllers;

//SECCION DONDE IMPORTAMOS LAS CLASES QUE NECESITAMOS//PARA RECIBIR PARAMETROS
use Illuminate\Http\Request; //PARA RECIBIR PARAMETROS
//use Validator; //VALIDAR LO QUE MANDA LOS USUARIOS 
use App\Models\Prenda; // PARA USAR LA TABLA CLIENTES
use Illuminate\Support\Facades\View; // PARA USAR LAS VISTAS
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Collection;
use Symfony\Component\Console\Input\Input;
use Carbon\Carbon;



class PrendaController extends Controller
{
    public function __contruct()
    {
        $this->middleware('permission:ver-listado-boletas|imprimir-boleta|ver-desempeño|pago-desempeño|pago-refrendo|ver-listado-tickets-refrendo|imprimir-ticket-refrendo|imprimir-boleta-refrendo|pago-capital|ver-listado-tickets-capital|imprimir-ticket-capital|imprimir-boleta-capital', ['only' => ['index']]);
        $this->middleware('permission:imprimir-boleta', ['only' => ['vistaboleta']]);
        //desempeño
        $this->middleware('permission:ver-desempeño', ['only' => ['PrendaPagar']]);
        $this->middleware('permission:pago-desempeño', ['only' => ['editPago']]);
        //refrendo
        $this->middleware('permission:pago-refrendo', ['only' => ['editRefrendo']]);
        $this->middleware('permission:ver-listado-tickets-refrendo', ['only' => ['listado_tickets_refrendo']]);
        $this->middleware('permission:imprimir-ticket-refrendo', ['only' => ['vistarefreboleta']]);
        $this->middleware('permission:imprimir-boleta-refrendo');
        //capital
        $this->middleware('permission:pago-capital', ['only' => ['editCapital']]);
        $this->middleware('permission:ver-listado-tickets-capital', ['only' => ['listado_tickets_capital']]);
        $this->middleware('permission:imprimir-ticket-capital', ['only' => ['vistacapitalboleta']]);
        $this->middleware('permission:imprimir-boleta-capital');

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function index(Request $request)
    {
        $search = trim($request->get('search'));
        $prenda1 = DB::table('Prendas')
            ->select(
                'id_cliente',
                'nombre_prenda',
                'id_prendas',
                'kilataje_prenda',
                'gramaje_prenda',
                'caracteristicas_prenda',
                'avaluo_prenda',
                'porcentaje_prestamo_sobre_avaluo',
                'prestamo_prenda'
            )
            ->where('id_prendas', 'LIKE', '%' . $search . '%')
            ->orWhere('nombre_prenda', 'LIKE', '%' . $search . '%')
            ->paginate(5);
        return view('admin.ListadoBoletaPagar', compact('prenda1'));
    }

    public function PrendaPagar(Request $request)
    {
        $search = trim($request->get('search'));
        $prendaPagarr = Prenda::orderBy('id_prendas', 'desc')
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
        return view('admin.Pagar', compact('prendaPagarr'));
    }






    public function ListadoPrenda(Request $request)
    {
        $search = trim($request->get('search'));
        $lista_prendas = Prenda::orderBy('id_prendas', 'desc')
            ->select(
                'id_prendas',
                'id_cliente',
                'folio_cotizacion',
                'nombre_prenda',
                'id_prendas',
                'kilataje_prenda',
                'gramaje_prenda',
                'cantidad_prenda',
                'caracteristicas_prenda',
                'avaluo_prenda',
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

        return view('admin.ListadoPrenda', compact('lista_prendas'));
    }


    public function listado_tickets_refrendo(Request $request)
    {

        $search = trim($request->get('search'));
        $lista_prendas = Prenda::orderBy('id_prendas', 'desc')
            ->select(
                'id_prendas',
                'id_cliente',
                'folio_cotizacion',
                'nombre_prenda',
                'id_prendas',
                'kilataje_prenda',
                'gramaje_prenda',
                'cantidad_prenda',
                'caracteristicas_prenda',
                'avaluo_prenda',
                'porcentaje_prestamo_sobre_avaluo',
                'prestamo_prenda',
                'prestamo_inicial',
                'numeros_refrendos'
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

        return view('admin.listado_tickets_refrendo', compact('lista_prendas'));
    }

    public function listado_tickets_capital(Request $request)
    {
        $search = trim($request->get('search'));
        $lista_prendas = Prenda::orderBy('id_prendas', 'desc')
            ->select(
                'id_prendas',
                'id_cliente',
                'folio_cotizacion',
                'nombre_prenda',
                'id_prendas',
                'kilataje_prenda',
                'gramaje_prenda',
                'cantidad_prenda',
                'caracteristicas_prenda',
                'avaluo_prenda',
                'porcentaje_prestamo_sobre_avaluo',
                'prestamo_prenda',
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

        return view('admin.listado_tickets_capital', compact('lista_prendas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* //select en pagar
        $buscar = Prenda::all();
        return view('admin.Pagar', compact('buscar')); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reglas = [

            "id_cliente" => "bail|required",

        ];

        $mensajes = [
            "id_cliente.required" => "NO SE INGRESO EL NOMBRE DEL CLIENTE, FAVOR DE VERIFICAR LA INFORMACIÓN. :(",

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



        //dd($request->all());
        $prenda = Prenda::make($request->all());
        $prenda->save();


        return redirect()->route('listado_prenda')->with('registro', 'Se genero la boleta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hoy = Carbon::today(); //Aquí se obtiene la fecha de hoy
        $prenda = Prenda::find($id);

        return View::make('admin.EditarPrenda')
            ->with(
                [
                    "dato_prenda" => $prenda

                ]
            );
    }

    public function editPago($id)
    {

        $prenda = Prenda::find($id);


        return View::make('admin.DesempeñoDato')->with(
            [
                "dato_prenda" => $prenda

            ]
        );
    }


    public function editRefrendo($id)
    {
        $prenda = Prenda::find($id);

        return View::make('admin.RefrendoDato')->with(
            [
                "dato_prenda" => $prenda

            ]
        );
    }

    public function editCapital($id)
    {
        $prenda = Prenda::find($id);

        return View::make('admin.CapitalDato')->with(
            [
                "dato_prenda" => $prenda

            ]
        );
    }



    public function vistaboleta($id)
    {
        $prenda = Prenda::find($id);

        return View::make('pdf.boleta')->with(
            [
                "dato_prenda" => $prenda

            ]
        );
    }
    public function vistarefreboleta($id)
    {

        $prenda = Prenda::find($id);

        return View::make('pdf.ticket_refre')->with(
            [
                "dato_prenda" => $prenda

            ]
        );
    }

    public function vistacapitalboleta($id)
    {
        $prenda = Prenda::find($id);

        return View::make('pdf.ticket_capital')->with(
            [
                "dato_prenda" => $prenda

            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prenda = Prenda::find($id);

        $reglas = [

            "cantidad_pago" => 'bail|required',
            "cambio_boleta" => 'bail|required',

            /*   "nombre_prenda" => "bail|required|min:3",
            "descripcion_generica" => "bail|required",
            "kilataje_prenda" => "bail|required",
            "gramaje_prenda" => 'bail|required',
            "caracteristicas_prenda" => 'bail|required',
            "avaluo_prenda" => "bail|required",
            "porcentaje_prestamo_sobre_avaluo" => 'bail|required',
            "prestamo_prenda" => 'bail|required', */
        ];

        $mensajes = [
            "cantidad_pago.required" => "NO SE INGRESO EL MONTO A PAGAR, FAVOR DE VERIFICAR LOS DATOS CORRECTAMENTE!!",
            "cambio_boleta.required" => "LA CANTIDAD QUE SE INGRESO ES MENOR A LA CANTIDAD TOTAL A DESEMPEÑAR, VERIFICAR LA INFORMACIÓN!!",

            /* 
            "nombre_prenda.required" => "No ingreso el nombre de la pieza a refrendar",
            "nombre_prenda.min" => "Los caracteres mínimos para la pieza a refrendar deben ser :min",
            "descripcion_generica.required" => "No ingreso la descripcion de la pieza a refrendar",
            "kilataje_prenda.required" => "No ingreso el kilataje de la pieza a refrendar",
            "gramaje_prenda.required" => "No ingreso el gramaje de la pieza a refrendar",
            "caracteristicas_prenda.required" => "No ingreso las caracteristicas de la pieza a refrendar",
            "avaluo_prenda.required" => "No ha ingresado el avaluo",
            "porcentaje_prestamo_sobre_avaluo.required" => "No ha seleccionado el porfentaje del avaluo",
            "prestamo_prenda.required" => "No ha seleccionado el prestamo de preda. ",
 */
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


        $prenda->fill($request->all());
        $prenda->save();


        return redirect()->route('listado_tickets_refrendo')->with('registro_ticket_refrendo', 'Se genero la boleta');
    }


    public function update_capital(Request $request, $id)
    {
        $prenda = Prenda::find($id);

        $reglas = [

            "cantidad_pago_capi" => 'bail|required',
            "cambio_boleta_capi" => 'bail|required',

            /*   "nombre_prenda" => "bail|required|min:3",
            "descripcion_generica" => "bail|required",
            "kilataje_prenda" => "bail|required",
            "gramaje_prenda" => 'bail|required',
            "caracteristicas_prenda" => 'bail|required',
            "avaluo_prenda" => "bail|required",
            "porcentaje_prestamo_sobre_avaluo" => 'bail|required',
            "prestamo_prenda" => 'bail|required', */
        ];

        $mensajes = [
            "cantidad_pago_capi.required" => "NO SE INGRESO EL MONTO A PAGAR, FAVOR DE VERIFICAR LOS DATOS CORRECTAMENTE!!",
            "cambio_boleta_capi.required" => "LA CANTIDAD QUE SE INGRESO ES MENOR A LA CANTIDAD TOTAL A DESEMPEÑAR, VERIFICAR LA INFORMACIÓN!!",

            /* 
            "nombre_prenda.required" => "No ingreso el nombre de la pieza a refrendar",
            "nombre_prenda.min" => "Los caracteres mínimos para la pieza a refrendar deben ser :min",
            "descripcion_generica.required" => "No ingreso la descripcion de la pieza a refrendar",
            "kilataje_prenda.required" => "No ingreso el kilataje de la pieza a refrendar",
            "gramaje_prenda.required" => "No ingreso el gramaje de la pieza a refrendar",
            "caracteristicas_prenda.required" => "No ingreso las caracteristicas de la pieza a refrendar",
            "avaluo_prenda.required" => "No ha ingresado el avaluo",
            "porcentaje_prestamo_sobre_avaluo.required" => "No ha seleccionado el porfentaje del avaluo",
            "prestamo_prenda.required" => "No ha seleccionado el prestamo de preda. ",
 */
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


        $prenda->fill($request->all());
        $prenda->save();


        return redirect()->route('listado_tickets_capital')->with('registro_ticket_capital', 'Se genero la boleta'); // agregar-05-10-22
    }




    public function updatePago(Request $request, $id)
    {
        $prenda = Prenda::find($id);

        $reglas = [
            //   "cantidad_pago" => 'bail|required',       
        ];

        $mensajes = [

            //  "cantidad_pago.required" => "NO SE INGRESO EL MONTO A PAGAR, FAVOR DE VERIFICAR LOS DATOS CORRECTAMENTE!!",

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


        $prenda->fill($request->all());
        $prenda->save();


        return redirect()->route('Pagar', []);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function buscarPrenda(Request $request)
    {


        $prendas = Prenda::where(
            'nombre_prenda',
            'LIKE',
            "%" . $request->nombre_prenda . "%"
        )
            ->get();


        return response()->json([
            'data' => $prendas
        ]);
    }
}
