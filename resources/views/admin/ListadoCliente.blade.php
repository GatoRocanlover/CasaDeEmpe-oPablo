<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CASA DE EMPEÑOS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/estilos.css') }}" rel="stylesheet">
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    </style>

</head>

<body class="antialiased ">
    <div class="sinborde relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


        <!-- encabezado -->
        <div class="size">
            <div class="navbar1 flex size">
                <div class="max-w-6xl mx-auto mr-2">
                    <a href="{{ route('inicio_admin') }}"><img class="icono" src="{{ asset('img/logo.png') }}"></a>
                </div>
                <div class="mx-auto ml-2 titulo  texto-grande size"> CASA DE EMPEÑOS <br> ASOCIADOS NUEVA MUTUA DE UMÁN S.A. DE
                    C.V.</a></div>

            </div>

            @include('layout.nav')

            @can('ver-cliente')
            <br>
            <br>
            <div class="row g-3 mx-auto items-center justify-center needs-validation size100">
                <label for="validationCustom03" class="form-label  text-center h3 fw-bold">
                    LISTADO DE CLIENTES</label>
            </div>

            <div class="mt-8 size95 mx-auto items-center justify-center flex negritas">
                <div class="max-w-6xl size  flex items-center justify-center ">

                    <div class="table-responsive">
                        <div class="searchSep mt-3">
                            <div>
                                <form action="{{ route('listado_cliente') }}" method="GET">
                                    <div class="col-md-12 d-flex ">
                                        <input class="col-md-4 form-control text-center  me-2" type="search" placeholder="ingrese folio o nombre del cliente" name="search" aria-label="Search" value="{{ request('search') }}">
                                        <button class="btn bbtn mt-5 btn-primary my-2 my-sm-0" type="submit">Buscar</button>
                                    </div>
                                </form>
                            </div>
                            @can('crear-cliente')
                            <div class=" justify-content-end">
                                <a class="btn btn-warning fw-bold" href="{{ route('agregar_cliente') }}">Agregar Nuevo Cliente</a>
                            </div>
                            @endcan
                        </div>


                        <table class="table table-sm table-striped mt-4">
                            <thead class="letra-blanca bg-dark">
                                <tr>
                                    <th scope="col">Folio</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Identificación</th>
                                    <th scope="col">Celular</th>
                                    <th scope="col">Domicilio</th>
                                    @can('editar-cliente')
                                    <th scope="col">EDITAR</th>
                                    @endcan
                                    @can('borrar-cliente')
                                    <th scope="col">ELIMINAR</th>
                                    @endcan
                                </tr>
                            </thead>

                            @foreach ($clientes as $cliente)
                            <tr>
                                <th scope="row">{{ $cliente->id_cliente }}</th>
                                <td>{{ $cliente->nombre_cliente . ' ' . $cliente->apellido_cliente }}</td>
                                <td>
                                    {{ $cliente->tipo_de_identificacion }}
                                </td>
                                <td>{{ $cliente->telefono_cliente }} </td>
                                <td>{{ 'C.' . $cliente->calle_cliente . ', N°' . $cliente->numero_cliente . ', ' . $cliente->colonia_cliente . ', ' . $cliente->ciudad_cliente }}
                                </td>
                                @can('editar-cliente')
                                <td class="text-center">
                                    <a class="btn btn-info" href="{{ route('cliente.edit', [$cliente->id_cliente]) }}">Editar</a>   
                                </td>
                                @endcan
                                @can('borrar-cliente')
                                <td class="text-center">                              
                                        {!! Form::open(['method' => 'DELETE','route' => ['cliente.destroy', $cliente->id_cliente],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                </td>
                                @endcan
                            </tr>
                            @endforeach

                        </table>
                        <div class="d-flex  justify-content-end">
                            {!! $clientes->links() !!}
                        </div>

                    </div>

                </div>
                @else
        <div class="h3 text-center fw-bold mt-8">No tienes los permisos para ver este modulo <br> Comunicate con tu superior...</div> 
    @endcan
</body>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('dist/js/ListadoCliente.js') }}"></script>
@if (session('registro') == 'RegistroCliente')
<script>
    Swal.fire(
        'SE REGISTRO CON EXITO!',
        'VALIDAR INFORMACIÓN EN LA SIGUIENTE TABLA!!',
        'success')
</script>
@endif

@if (session('updateCliente') == 'Se actualizo')
<script>
    /* Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'SE ACTUALIZO LA INFORMACIÓN!',
                        showConfirmButton: false,
                        timer: 1500
                    }) */
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'SE ACTUALIZO LA INFORMACIÓN!'
    })
</script>
@endif

</html>