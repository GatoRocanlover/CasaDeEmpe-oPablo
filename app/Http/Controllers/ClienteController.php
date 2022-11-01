<?php

namespace App\Http\Controllers;

//SECCION DONDE IMPORTAMOS LAS CLASES QUE NECESITAMOS
use Illuminate\Http\Request; //PARA RECIBIR PARAMETROS
//use Validator; //VALIDAR LO QUE MANDA LOS USUARIOS
use App\Models\Cliente; // PARA USAR LA TABLA CLIENTES
use Illuminate\Support\Facades\View; // PARA USAR LAS VISTAS
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{

    public function __contruct()
    {
        $this->middleware('permission:ver-cliente|crear-cliente|editar-cliente|borrar-cliente', ['only' => ['index']]);
        $this->middleware('permission:crear-cliente', ['only' => ['create','store']]);
        $this->middleware('permission:editar-cliente', ['only' => ['edit, update']]);
        $this->middleware('permission:borrar-cliente', ['only' => ['destroy']]);
    }
    
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $search = trim($request->get('search'));
        $clientes = Cliente::select(
            'id_cliente',
            'nombre_cliente',
            'apellido_cliente',
            'tipo_de_identificacion',
            'telefono_cliente',
            'calle_cliente',
            'socio',
            'numero_cliente',
            'colonia_cliente',
            'ciudad_cliente',    
           
        )->where('id_cliente', 'LIKE', '%' . $search . '%')
        ->orWhere('nombre_cliente', 'LIKE', '%' . $search . '%')
        ->orWhere('apellido_cliente', 'LIKE', '%' . $search . '%')
        ->paginate(5);
        return view('admin.ListadoCliente', compact('clientes'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            "nombre_cliente" => "bail|required|min:3",
            "apellido_cliente" => "bail|required",
            "tipo_de_identificacion" => 'bail|required',
            "numero_de_identificacion" => "bail|required|min:13|max:13",
            "correo_electronico_cliente" => 'bail|nullable',
            "telefono_cliente" => 'bail|nullable|max:10',
            "socio" => "bail|required",
            "numero_socio" => "bail|required_if:socio,1",
            "calle_cliente" => 'bail|required',
            "numero_cliente" => 'bail|nullable',
            "cruzamientos_cliente" => 'bail|nullable',
            "colonia_cliente" => "bail|required",
            "ciudad_cliente" => "bail|required",
            "codigo_postal_cliente" => "bail|required",
            "nombre_cotitular" => 'bail|nullable',
            "apellido_cotitular" => 'bail|nullable',
            "telefono_cotitular" => 'bail|nullable|max:10',
            "calle_cotitular" => 'bail|nullable',
            "numero_cotitular" => 'bail|nullable',
            "cruzamientos_cotitular" => 'bail|nullable',
            "colonia_cotitular" => 'bail|nullable',
            "ciudad_cotitular" => 'bail|nullable',
            "codigo_postal_cotitular" => 'bail|nullable',
            "nombre_beneficiario" => 'bail|nullable',
            "apellido_beneficiario" => 'bail|nullable',
        ];

        $mensajes = [
            "nombre_cliente.required" => "No ingreso el nombre del cliente",
            "nombre_cliente.min" => "Los caracteres mínimos para el cliente deben ser :min",
            "tipo_de_identificacion" => "No ha seleccionado el tipo de identificacion",
            "numero_de_identificacion" => "No ingreso el número de identificación.",
            "numero_de_identificacion.min" => "Los caracteres mínimos para el numero de identificacion deben ser :min",
            "numero_de_identificacion.max" => "Los caracteres maximos para el numero de identificacion deben ser :max",
            "socio.required" => "No ha seleccionado si es socio",
            "numero_socio.required" => "No ingreso el número de socio",
            "telefono_cliente.max" => "Los caracteres maximos para el numero de telefono deben ser :max",
            "telefono_cotitular.max" => "Los caracteres maximos para el numero de telefono del cotitular deben ser :max",
            "calle_cliente.required" => "No ingreso el número de calle del cliente",
            "colonia_cliente.required" => "No ha ingresado la colonia del cliente",
            "ciudad_cliente.required" => "No ha ingresado la ciudad del cliente",
            "codigo_postal_cliente.required" => "No ha ingresado el codigo postal del cliente. ",


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


        $nombre_cliente = Cliente::make($request->all());
        $nombre_cliente->save();


        return redirect()->route('listado_cliente', [])->with('registro', 'RegistroCliente');;
    }


    public function VistaAgregarCliente()
    {
        return view('admin.AgregarCliente');

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
        $cliente = Cliente::find($id);

        return View::make('admin.EditarCliente')->with(
            [
                "dato_cliente" => $cliente

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
        $nombre_cliente = Cliente::find($id);
        $reglas = [
            "nombre_cliente" => "bail|required|min:3",
            "apellido_cliente" => "bail|required",
            "tipo_de_identificacion" => 'bail|required',
            "numero_de_identificacion" => "bail|required|min:13|max:13",
            "correo_electronico_cliente" => 'bail|nullable',
            "telefono_cliente" => 'bail|nullable|max:10',
            "socio" => "bail|required",
            "numero_socio" => "bail|required_if:socio,1",
            "calle_cliente" => 'bail|required',
            "numero_cliente" => 'bail|nullable',
            "cruzamientos_cliente" => 'bail|nullable',
            "colonia_cliente" => "bail|required",
            "ciudad_cliente" => "bail|required",
            "codigo_postal_cliente" => "bail|required",
            "nombre_cotitular" => 'bail|nullable',
            "apellido_cotitular" => 'bail|nullable',
            "telefono_cotitular" => 'bail|nullable|max:10',
            "calle_cotitular" => 'bail|nullable',
            "numero_cotitular" => 'bail|nullable',
            "cruzamientos_cotitular" => 'bail|nullable',
            "colonia_cotitular" => 'bail|nullable',
            "ciudad_cotitular" => 'bail|nullable',
            "codigo_postal_cotitular" => 'bail|nullable',
            "nombre_beneficiario" => 'bail|nullable',
            "apellido_beneficiario" => 'bail|nullable',
        ];

        $mensajes = [
            "nombre_cliente.required" => "No ingreso el nombre del cliente",
            "nombre_cliente.min" => "Los caracteres mínimos para el cliente deben ser :min",
            "tipo_de_identificacion" => "No ha seleccionado el tipo de identificacion",
            "numero_de_identificacion" => "No ingreso el número de identificación.",
            "numero_de_identificacion.min" => "Los caracteres mínimos para el numero de identificacion deben ser :min",
            "numero_de_identificacion.max" => "Los caracteres maximos para el numero de identificacion deben ser :max",
            "socio.required" => "No ha seleccionado si es socio",
            "numero_socio.required" => "No ingreso el número de socio",
            "telefono_cliente.max" => "Los caracteres maximos para el numero de telefono deben ser :max",
            "telefono_cotitular.max" => "Los caracteres maximos para el numero de telefono del cotitular deben ser :max",
            "calle_cliente.required" => "No ingreso el número de calle del cliente",
            "colonia_cliente.required" => "No ha ingresado la colonia del cliente",
            "ciudad_cliente.required" => "No ha ingresado la ciudad del cliente",
            "codigo_postal_cliente.required" => "No ha ingresado el codigo postal del cliente. ",

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


        $nombre_cliente->fill($request->all());
        $nombre_cliente->save();


        return redirect()->route('listado_cliente')->with('updateCliente', 'Se actualizo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::find($id)->delete();
        return redirect()->route('listado_cliente');
    }


    public function buscarCliente(Request $request)
    {


        $clientes = Cliente::orderBy('nombre_cliente', 'desc')->where(
            'nombre_cliente',
            'LIKE',
            "%" . $request->nombre_cliente . "%"
        )
            ->orWhere(
                'apellido_cliente',
                'LIKE',
                "%" . $request->nombre_cliente . "%"
            )
            ->orWhere(
                'socio',
                'LIKE',
                "%" . $request->socio . "%"
            )
            ->orWhere(
                'numero_socio',
                'LIKE',
                "%" . $request->numero_socio . "%"
            )
            ->orWhere(
                'calle_cliente',
                'LIKE',
                "%" . $request->calle_cliente . "%"
            )
            ->orWhere(
                'numero_cliente',
                'LIKE',
                "%" . $request->numero_cliente . "%"
            )
            ->orWhere(
                'cruzamientos_cliente',
                'LIKE',
                "%" . $request->cruzamientos_cliente . "%"
            )
            ->orWhere(
                'ciudad_cliente',
                'LIKE',
                "%" . $request->ciudad_cliente . "%"
            )
            ->orWhere(
                'colonia_cliente',
                'LIKE',
                "%" . $request->colonia_cliente . "%"
            )

            ->get();


        return response()->json([
            'data' => $clientes
        ]);
    }
}
