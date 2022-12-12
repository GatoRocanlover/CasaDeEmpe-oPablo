<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CapitalController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CotizacionPrendaController;
use App\Http\Controllers\PrendaController;
use App\Http\Controllers\RefrendoController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesempeñoController;

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    ///rutas con acceso a login
    Route::post('alta_usuario', [UsuarioController::class, 'store'])->name('usuario.store');
    Route::get('editar_usuario/{id}', [UsuarioController::class, 'edit'])->name('usuario.edit');
    Route::put('actualizar_usuario/{id}', [UsuarioController::class, 'update'])->name('usuario.update');

    Route::post('Tickets', [TicketController::class, 'store'])->name('Tickets.store');

    Route::post('alta_prenda', [PrendaController::class, 'store'])->name('prenda.store');
    Route::post('alta_prenda2', [PrendaController::class, 'store2'])->name('prenda.store2');

    
    Route::get('Pago_prenda/{id}', [PrendaController::class, 'editPago'])->name('prenda1.edit');
    Route::post('Pago_prenda/{id}', [PrendaController::class, 'FechasMes'])->name('prenda1.mes');
    Route::put('actualizar_prenda_pago/{id}', [PrendaController::class, 'updatePago'])->name('prenda1.update');
    Route::get('editar_prenda/{id}', [PrendaController::class, 'edit'])->name('prenda.edit');
    Route::put('actualizar_prenda/{id}', [PrendaController::class, 'update'])->name('prenda.update');
    Route::put('prenda_capital/{id}', [PrendaController::class, 'update_capital'])->name('prenda_capi.update');
    Route::get('/ListadoPrenda', [PrendaController::class, 'ListadoPrenda'])->name('listado_prenda');
    Route::get('/listado_tickets_refrendo', [PrendaController::class, 'listado_tickets_refrendo'])->name('listado_tickets_refrendo');
    Route::get('/listado_tickets_capital', [PrendaController::class, 'listado_tickets_capital'])->name('listado_tickets_capital');
    Route::get('/ListadoBoletaPagar', [PrendaController::class, 'index'])->name('listado_boleta_pagar');
    Route::get('/Pagar', [PrendaController::class, 'prendaPagar'])->name('Pagar');
    Route::get('boleta_cliente/{id}', [PrendaController::class, 'vistaboleta'])->name('boleta.vistaboleta');
    Route::get('ticket_refre/{id}', [PrendaController::class, 'vistarefreboleta'])->name('boleta.vistarefre');
    Route::get('ticket_capital/{id}', [PrendaController::class, 'vistacapitalboleta'])->name('boleta.vistacapital');
    Route::get('Capital_prenda/{id}', [PrendaController::class, 'editCapital'])->name('Capital1.edit');
    Route::get('Refrendo_prenda/{id}', [PrendaController::class, 'editRefrendo'])->name('Refrendo1.edit');

    Route::post('alta_cliente', [ClienteController::class, 'store'])->name('cliente.store');
    Route::get('editar_cliente/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
    Route::delete('delete_cliente/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');
    Route::put('actualizar_cliente/{id}', [ClienteController::class, 'update'])->name('cliente.update');
    Route::get('/AgregarCliente', [ClienteController::class, 'VistaAgregarCliente'])->name('agregar_cliente');
    Route::get('/ListadoCliente', [ClienteController::class, 'index'])->name('listado_cliente');

    Route::post('alta_cotizacion', [CotizacionPrendaController::class, 'store'])->name('cotizacionprenda.store');
    Route::put('actualizar_cotizacion_prenda/{id}', [CotizacionPrendaController::class, 'update'])->name('cotizacionprenda.update');
    
    Route::get('altacotizacion/{id}', [CotizacionPrendaController::class, 'vistaaltacoti'])->name('coti.altacotizacion');
    Route::post('/altacotizacion/fetch', [CotizacionPrendaController::class, 'fetch'])->name('autocomplete.fetch');
    
    Route::get('/ListadoCotizacion', [CotizacionPrendaController::class, 'index'])->name('cotizacionprenda.listado');
    Route::get('/AgregarCotizacionPrenda', [CotizacionPrendaController::class, 'AgregarPrenda'])->name('cotizacion.agregar_prenda');
    Route::get('ticket_cotizacion/{id}', [CotizacionPrendaController::class, 'vistaTicket'])->name('ticket.vistaTicketCotiza');
    Route::get('editar_cotizacion_prenda/{id}', [CotizacionPrendaController::class, 'edit'])->name('cotizacionprenda.edit');
    Route::delete('delete_cotizacion/{id}', [CotizacionPrendaController::class, 'destroy'])->name('cotizacionprenda.destroy');
    
    Route::get('/iniciarsesion', [AdminController::class, 'IniciarSesion'])->name('inicio_sesion');
    Route::get('/Admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('/AgregarUsuario', [AdminController::class, 'AgregarUsuario'])->name('agregar_usuario');
    Route::get('/AgregarPrenda', [AdminController::class, 'AgregarPrenda'])->name('agregar_prenda');
    Route::get('/GenerarBoleta', [AdminController::class, 'GenerarBoleta'])->name('generar_boleta');
    Route::get('/ListadoBoleta', [AdminController::class, 'ListadoBoleta'])->name('listado_boleta');
    Route::get('/AdminInicio', [AdminController::class, 'AdminInicio'])->name('inicio_admin');
/*     Route::get('/ListadoBoletaDesembolsar', [AdminController::class, 'ListadoBoletaDesembolsar'])->name('listado_boleta_desembolsar');
    Route::get('/Desembolso', [AdminController::class, 'Desembolso'])->name('desembolso');  */
    
    /* Route::get('/ListadoUsuario', [UserController::class, 'ListUser'])->name('listado_usuario'); */

    Route::get('/TicketDesempeño', [TicketController::class, 'index'])->name('Ticket_Desempeño');
    Route::get('ticket_impre/{id}', [TicketController::class, 'vistaTicket'])->name('ticket.vistaTicket');

    Route::get('/refrendo', [RefrendoController::class, 'refrendopago'])->name('1refrendo');
    Route::get('/capital', [CapitalController::class, 'capitalpago'])->name('1capital');
   
    Route::get('desempeños', [DesempeñoController::class, 'index'])->name('desempeños');
    Route::get('boleta_desempeñada/{id}', [DesempeñoController::class, 'vistaboleta'])->name('boleta_desempeño.vistaboleta');

    Route::get('Lotes_Cotizacion', [CotizacionPrendaController::class, 'index_lote'])->name('lotes_cotizacion');
    Route::post('alta_cotizacion_lote', [CotizacionPrendaController::class, 'store_lote'])->name('cotizacionprenda_lote.store');
});

// Otros
/* Route::get('/', [AdminController::class, 'iniciarsesion'])->name('inicio_sesion'); */
/* Route::prefix('admin')->group(function () { */

/*   Route::get('/abono_capital', [AjaxController::class, 'index'])->name('abonocapital'); */
/*  Route::post('/abono_capital/fetch', [AjaxController::class, 'fetch'])->name('autocomplete.fetch'); */
/* }); */

//https://github.com/infodp checarjaj