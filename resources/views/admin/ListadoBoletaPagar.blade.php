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
    <link href="{{asset('dist/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('dist/fontawesome/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/estilos.css')}}" rel="stylesheet">
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased ">
    <div class="sinborde relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))

        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">HOME</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <!-- encabezado -->
        <div class="size">
            <div class="navbar1 flex size">
                <div class="max-w-6xl mx-auto mr-2">
                    <img class="icono" src="{{asset('img/logo.png')}}">
                </div>
                <div class="mx-auto ml-2 titulo texto-grande size"> CASA DE EMPEÑOS <br> ASOCIACION NUEVA MUTUA UMAN S.A. DE C.V.</a></div>

            </div>

            @include('layout.nav')

            <div class="mt-8 size95 mx-auto items-center justify-center flex negritas">
                <div class="max-w-6xl size  flex items-center justify-center ">
                    <div class="col-md-12">

                        <table class="table table-hover">
                            <label class="h4"><strong>LISTADO DE BOLETAS:</strong></label>

                            <!-- OPCION BUSCAR -->
                            <div class="justify-content-end d-flex">
                                <form action="{{route('listado_boleta_pagar')}}" method="GET">
                                    <div class="col-md-4 d-flex  mt-8 ">
                                        <input class="form-control  me-2" type="search" placeholder="Search" name="search" aria-label="Search" value="{{request('search')}}">
                                        <button class="btn bbtn mt-5 btn-primary my-2 my-sm-0" type="submit">Search</button>
                                    </div>
                                </form>

                            </div>

                            <div class="mt-4"></div>
                            <thead class="letra-blanca bg-dark">
                                <tr>
                                    <th class="text-center" scope="col">FOLIO</th>
                                    <th class="text-center" scope="col">CLIENTE</th>
                                    <th class="text-center" scope="col">PRENDA</th>
                                    <th class="text-center" scope="col">DESCRIPCION</th>
                                    <th class="text-center" scope="col">AVALUO</th>
                                    <th class="text-center" scope="col">PORCENTAJE DE PRESTAMO</th>
                                    <th class="text-center" scope="col">PRESTAMO</th>
                                    <th class="text-center" scope="col">DESEMPEÑAR</th>
                                    <th class="text-center" scope="col">REFRENDO</th>
                                    <th class="text-center" scope="col">ABONO CAPITAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($prenda1 as $prenda)

                                <tr>
                                    <th class="text-center" scope="row">{{$prenda->id_prendas}}</th>

                                    <td>{{$prenda->id_cliente}}</td>

                                    <td>{{$prenda->nombre_prenda}}</td>
                                    <td>{{$prenda->kilataje_prenda.'k '.', '.$prenda->gramaje_prenda.'gr '.', '.$prenda->caracteristicas_prenda}}</td>
                                    <td class="text-center"> {{'$ '.$prenda->avaluo_prenda}}</td>

                                    <td class="text-center"> @IF($prenda->porcentaje_prestamo_sobre_avaluo == 1)
                                        45 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 2)
                                        50 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 4)
                                        55 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 5)
                                        60 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 6)
                                        65 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 7)
                                        70 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 8)
                                        75 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 9)
                                        80 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 10)
                                        85 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 11)
                                        90 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 12)
                                        95 %
                                        @else
                                        100 %
                                        @endif
                                    </td>
                                    <td class="text-center">{{'$'.$prenda->prestamo_prenda}}</td>

                                    <td class="text-center">
                                        <a class="nav-link" href="" id="navbarDarkDropdownMenuLink" aria-expanded="false">
                                            <button class="ntn btn-primary ">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </a>
                                    </td>

                                    <td class="text-center">
                                        <a class="nav-link" href="" id="navbarDarkDropdownMenuLink" aria-expanded="false">
                                            <button class="ntn btn-primary ">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a class="nav-link" href="" id="navbarDarkDropdownMenuLink" aria-expanded="false">
                                            <button class="ntn btn-primary ">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex  justify-content-end">
                            {!! $prenda1 ->links() !!}
                        </div>

                    </div>

</body>

<script src="{{asset('dist/js/bootstrap.js')}}"></script>

</html>