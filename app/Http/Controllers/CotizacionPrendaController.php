<?php

namespace App\Http\Controllers;

//SECCION DONDE IMPORTAMOS LAS CLASES QUE NECESITAMOS//PARA RECIBIR PARAMETROS
use Illuminate\Http\Request; //PARA RECIBIR PARAMETROS
use App\Models\CotizacionPrenda; // PARA USAR LA TABLA CLIENTES
use Illuminate\Support\Facades\View; // PARA USAR LAS VISTAS
use Illuminate\Support\Facades\Validator;


class CotizacionPrendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = trim($request->get('search'));
        $lista_cotizacionprendas = CotizacionPrenda::orderBy('id_cotizacionprenda', 'desc')
            ->select(
                'id_cotizacionprenda',
                'nombre_prenda',
                'descripcion_generica',
                'valor_oro_plata',
                'dato_1',
                'dato_2',
                'dato_3',
                'dato_4',
                'kilataje_prenda',
                'gramaje_prenda',
                'caracteristicas_prenda',
                'avaluo_prenda',
                'porcentaje_prestamo_sobre_avaluo',
                'prestamo_prenda',
                'cantidad_prenda',
                'created_at'
            )
            ->where('id_cotizacionprenda', 'LIKE', '%' . $search . '%')
            ->orWhere('descripcion_generica', 'LIKE', '%' . $search . '%')
            ->orWhere('prestamo_prenda', 'LIKE', '%' . $search . '%')
            ->orWhere('nombre_prenda', 'LIKE', '%' . $search . '%')
            ->paginate(5);
        return view('admin.ListadoCotizacionPrenda', compact('lista_cotizacionprendas'));
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
            "nombre_prenda" => "bail|required|min:3",
            "caracteristicas_prenda" => 'bail|required',
            "descripcion_generica" => "bail|required",
            "valor_oro_plata" => 'bail|required',
            "cantidad_prenda" => 'bail|required',
            "dato_1" => "bail|required",
            "dato_2" => "bail|required",
            "dato_3" => "bail|required",
            "dato_4" => "bail|required",
         
            "kilataje_prenda" => "bail|required",
            "gramaje_prenda" => 'bail|required',    
            "avaluo_prenda" => "bail|required",
            "porcentaje_prestamo_sobre_avaluo" => 'bail|required',
            "prestamo_prenda" => 'bail|required',
        ];

        $mensajes = [

            "nombre_prenda.required" => "No ingreso el nombre de la pieza a refrendar",
            "nombre_prenda.min" => "Los caracteres mínimos para la pieza a refrendar deben ser :min",
            "caracteristicas_prenda.required" => "No ingreso las caracteristicas de la pieza a refrendar",
            "descripcion_generica.required" => "No ingreso la descripcion de la pieza a refrendar",
            "valor_oro_plata.required" => "No ingreso el valor generico de la prenda",
            "cantidad_prenda.required" => "No ingreso la cantidad de la pieza a refrendar",
            "dato_1.required" => "No ingreso el valor #1 de la prenda",
            "dato_2.required" => "No ingreso el valor #2 de la prenda",
            "dato_3.required" => "No ingreso el valor #3 de la prenda",
            "dato_4.required" => "No ingreso el valor #4 de la prenda",
          
            "kilataje_prenda.required" => "No ingreso el kilataje de la pieza a refrendar",
            "gramaje_prenda.required" => "No ingreso el gramaje de la pieza a refrendar",
            "avaluo_prenda.required" => "No ha ingresado el avaluo",
            "porcentaje_prestamo_sobre_avaluo.required" => "No ha seleccionado el porfentaje del avaluo",
            "prestamo_prenda.required" => "No ha seleccionado el prestamo de preda. ",

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


        $cotizacionprenda = CotizacionPrenda::make($request->all());
        $cotizacionprenda->save();


        return redirect()->route('cotizacionprenda.listado')->with('successCotizacion', 'SE REALIZO EL PAGO');
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
    { {
            $cotizacionprenda = CotizacionPrenda::find($id);

            return View::make('admin.EditarCotizacionPrenda')->with(
                [
                    "dato_prenda_cotizar" => $cotizacionprenda

                ]
            );
        }
    }
    public function vistaaltacoti($id)
    { {
            $cotizacionprenda = CotizacionPrenda::find($id);

            return View::make('admin.agregarPrenda')->with(
                [
                    "datoCotizar" => $cotizacionprenda

                ]
            );
        }
    }
    


    public function update(Request $request, $id)
    {
        $cotizacionprenda = CotizacionPrenda::find($id);

        $reglas = [
            "nombre_prenda" => "bail|required|min:3",
            "descripcion_generica" => "bail|required",
            "kilataje_prenda" => "bail|required",
            "gramaje_prenda" => 'bail|required',
            "caracteristicas_prenda" => 'bail|required',
            "avaluo_prenda" => "bail|required",
            "porcentaje_prestamo_sobre_avaluo" => 'bail|required',
            "prestamo_prenda" => 'bail|required',
        ];

        $mensajes = [

            "nombre_prenda.required" => "No ingreso el nombre de la pieza a refrendar",
            "nombre_prenda.min" => "Los caracteres mínimos para la pieza a refrendar deben ser :min",
            "descripcion_generica.required" => "No ingreso la descripcion de la pieza a refrendar",
            "kilataje_prenda.required" => "No ingreso el kilataje de la pieza a refrendar",
            "gramaje_prenda.required" => "No ingreso el gramaje de la pieza a refrendar",
            "caracteristicas_prenda.required" => "No ingreso las caracteristicas de la pieza a refrendar",
            "avaluo_prenda.required" => "No ha ingresado el avaluo",
            "porcentaje_prestamo_sobre_avaluo.required" => "No ha seleccionado el porfentaje del avaluo",
            "prestamo_prenda.required" => "No ha seleccionado el prestamo de preda. ",

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


        $cotizacionprenda->fill($request->all());
        $cotizacionprenda->save();


        return redirect()->route('cotizacionprenda.listado', []);
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


    public function AgregarPrenda()
    {
        return view('admin.CotizacionPrenda');
    }

    public function vistaTicket($id)
    {
        $ticket_cot = CotizacionPrenda::find($id);

        return View::make('pdf.ticket_cotizacion')->with(
            [
                "dato_tickecoti" => $ticket_cot

            ]
        );
    }
}
