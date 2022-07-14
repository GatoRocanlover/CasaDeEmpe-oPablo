<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PrendaController;
use App\Http\Controllers\ClienteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde se puede registrar rutas web para su aplicación. Estas
| las rutas son cargadas por el RouteServiceProvider dentro de un grupo que
| contiene el grupo de middleware "web". Ahora crea algo grandioso!
|
*/

    Route::get('/',[AdminController::class, 'iniciarsesion'])->name('inicio_sesion');

Route::prefix('admin')->group(function () {

    Route::post('alta_usuario', [UsuarioController::class, 'store'])->name('usuario.store');
    Route::get('editar_usuario/{id}', [UsuarioController::class, 'edit'])->name('usuario.edit');
    Route::put('actualizar_usuario/{id}', [UsuarioController::class, 'update'])->name('usuario.update');


    
    Route::post('alta_prenda', [PrendaController::class, 'store'])->name('prenda.store');
    Route::get('editar_prenda/{id}', [PrendaController::class, 'edit'])->name('prenda.edit');
    Route::put('actualizar_prenda/{id}', [PrendaController::class, 'update'])->name('prenda.update');


    
    Route::post('alta_cliente', [ClienteController::class, 'store'])->name('cliente.store');
    Route::get('editar_cliente/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
    Route::put('actualizar_cliente/{id}', [ClienteController::class, 'update'])->name('cliente.update');
    
    Route::get('/iniciarsesion', [AdminController::class, 'IniciarSesion'])->name('inicio_sesion');
    Route::get('/AdminInicio', [AdminController::class, 'AdminInicio'])->name('inicio_admin');
    Route::get('/Admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/AgregarCliente', [AdminController::class, 'AgregarCliente'])->name('agregar_cliente');
    Route::get('/ListadoCliente', [AdminController::class, 'ListadoCliente'])->name('listado_cliente');
    Route::get('/AgregarUsuario', [AdminController::class, 'AgregarUsuario'])->name('agregar_usuario');
    Route::get('/ListadoUsuario', [AdminController::class, 'ListadoUsuario'])->name('listado_usuario');
    Route::get('/AgregarPrenda', [AdminController::class, 'AgregarPrenda'])->name('agregar_prenda');
    Route::get('/ListadoPrenda', [AdminController::class, 'ListadoPrenda'])->name('listado_prenda');
    Route::get('/GenerarBoleta', [AdminController::class, 'GenerarBoleta'])->name('generar_boleta');
    Route::get('/ListadoBoleta', [AdminController::class, 'ListadoBoleta'])->name('listado_boleta');
    Route::get('/ListadoBoletaPagar', [AdminController::class, 'ListadoBoletaPagar'])->name('listado_boleta_pagar');
    Route::get('/ListadoBoletaDesembolsar', [AdminController::class, 'ListadoBoletaDesembolsar'])->name('listado_boleta_desembolsar');
    Route::get('/Desembolso', [AdminController::class, 'Desembolso'])->name('desembolso');
    Route::get('/Pagar', [AdminController::class, 'Pagar'])->name('pagar');
    
    Route::get('/boleta', function(){
        return view('pdf.boleta');
    })->name('pagar');
});


