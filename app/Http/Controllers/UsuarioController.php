<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;//VALIDAR LO QUE MANDA LOS USUARIOS
use App\Models\Usuario; // PARA USAR LA TABLA usuarios
use Illuminate\Support\Facades\View; // PARA USAR LAS VISTAS

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
           "usuario"=>"bail|required|min:5|max:30",
           "nombre_usuario" => "bail|required|max:30",
           "apellido_usuario" => 'bail|required|max:30',
           "tipo_de_usuario" => "bail|required|min:1",
           "contrasenia" => "bail|required",
        ];

        $mensajes = [
             "usuario.required" => "No ingreso el usuario",
             "usuario.min" => "Los caracteres mínimos para el usuario deben ser :min",
             "usuario.max" => "Los caracteres máximos para el usuario deben ser :max", 
             "nombre_usuario.required" => "Los caracteres máximos para el nombre del usuario deben ser :max", 
             "apellido_usuario.required" => "Los caracteres máximos para el apellido del usuario deben ser :max", 
             "nombre_usuario.required" => "No ingreso el nombre del usuario", 
             "tipo_de_usuario.required" => "No ingreso el tipo de usuario",
             "contrasenia.required" => "No ingreso la contraseña",       
        ];


        $validator = Validator::make($request->all(), 
        $reglas, $mensajes 
        
);

    if ($validator->fails()) {
        return redirect()->back()
                    ->withErrors($validator)
                ->withInput();
    }


    $usuario = Usuario::make($request->all());
   
    $usuario->save();


    return redirect()->route('listado_usuario', []);



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
        $usuario = Usuario::find($id);

        return View::make('admin.EditarUsuario')->with(
            [
                "dato_usuario" => $usuario
            
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
        $usuario = Usuario::find($id);

        $reglas = [
            "usuario"=>"bail|required|min:5|max:30",
            "nombre_usuario" => "bail|required|max:30",
            "apellido_usuario" => 'bail|required|max:30',
            "tipo_de_usuario" => "bail|required|min:1",
            "contrasenia" => "bail|required",
         ];
 
         $mensajes = [
              "usuario.required" => "No ingreso el usuario",
              "usuario.min" => "Los caracteres mínimos para el usuario deben ser :min",
              "usuario.max" => "Los caracteres máximos para el usuario deben ser :max", 
              "nombre_usuario.required" => "Los caracteres máximos para el nombre del usuario deben ser :max", 
              "apellido_usuario.required" => "Los caracteres máximos para el apellido del usuario deben ser :max", 
              "nombre_usuario.required" => "No ingreso el nombre del usuario", 
              "tipo_de_usuario.required" => "No ingreso el tipo de usuario",
              "contrasenia.required" => "No ingreso la contraseña",       
         ];
 
 
         $validator = Validator::make($request->all(), 
         $reglas, $mensajes 
         
 );
 
     if ($validator->fails()) {
         return redirect()->back()
                     ->withErrors($validator)
                 ->withInput();
     }
 
 
     $usuario->fill($request->all());
    
     $usuario->save();
 
 
     return redirect()->route('listado_usuario', []);


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
}
