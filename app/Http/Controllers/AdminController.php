<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Usuario;
use App\Models\Prenda;
use App\Models\Cliente;
use App\Models\CotizacionPrenda; 
use Illuminate\http\Request;

class AdminController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function iniciarsesion()
    {
        return view('admin.IniciarSesion');
    }



    public function AdminInicio()
    {
        return view('admin.admininicio');
    }

    public function AgregarCliente()
    {


        return view('admin.AgregarCliente');
    }
    public function EditarCliente()
    {
        $clientes = Cliente::get();
        return view('admin.EditarCliente')->with(

            [
                "lista_clientes" => $clientes
            ]
        );
    }
    public function ListadoCliente()
    {
        $clientes = Cliente::get();

        return view('admin.ListadoCliente')->with(

            [
                "lista_clientes" => $clientes
            ]
        );
    }
    public function AgregarUsuario()
    {
        return view('admin.AgregarUsuario');
    }
    public function EditarUsuario()
    {
        return view('admin.EditarUsuario');
    }
    public function ListadoUsuario()
    {
        $usuarios = Usuario::get();

        return view('admin.ListadoUsuario')->with(
            [
                "lista_usuarios" => $usuarios
            ]
        );
    }
    public function AgregarPrenda()
    {
        return view('admin.AgregarPrenda');
    }
    public function EditarPrenda()
    {
        return view('admin.EditarPrenda');
    }
    public function ListadoPrenda()
    {
        $prendas = Prenda::get();

        return view('admin.ListadoPrenda')->with(
            [
                "lista_prendas" => $prendas
            ]
        );
    }


    public function ListadoBoletaPagar()
    {
        $prendas1 = Prenda::get();
        return view('admin.ListadoBoletaPagar')->with(
            [
                "lista_prendas1" => $prendas1
            ]
        );
    }


    
   // ->when(request('search'), function ($query) {
   //     return $query->where('nombre_prenda', 'like', '%' . request('search') . '%');
   // })








    public function GenerarBoleta()
    {
        return view('admin.GenerarBoleta');
    }
    public function ListadoBoleta()

    {
        return view('admin.ListadoBoleta');
    }

    public function ListadoBoletaDesembolsar()
    {
        return view('admin.ListadoBoletaDesembolsar');
    }
    public function Desembolso()
    {
        return view('admin.Desembolso');
    }
/*     public function Pagar()
    {
        return view('admin.Pagar');
    } */

    public function refrendo()
    {
        return view('admin.refrendo');
    }
    
   

}
