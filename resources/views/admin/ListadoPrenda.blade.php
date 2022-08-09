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
                <div class="mx-auto ml-2 titulo texto-grande size"> CASA DE EMPEÑOS <br> ASOCIACION NUEVA MUTUA S.A. DE C.V.</a></div>

            </div>

            @include('layout.nav')

            <div class="mt-8 size95 mx-auto items-center justify-center flex negritas">
                <div class="max-w-6xl size  flex items-center justify-center ">
                    <div class="col-md-12">
                        <label>LISTA DE PRENDAS</label>
                        <table class="table table-hover">
                            <thead class="letra-blanca bg-dark">
                                <tr>
                                    <th scope="col">#</th>

                                    <th scope="col">nombre</th>
                                    <th scope="col">PRENDA</th>
                                    <th scope="col">CARACTERISTICAS</th>
                                    <th scope="col">AVALUO</th>
                                    <th scope="col">% DE PRESTAMO</th>
                                    <th scope="col">PRESTAMO</th>
                                    <th scope="col">EDITAR</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lista_prendas as $prenda )

                                <tr>
                                    <th scope="row">{{$prenda->id_prendas}}</th>
                                    <th></th>
                                    <td>{{$prenda->nombre_prenda}}</td>
                                    <td>{{$prenda->kilataje_prenda.'k '.', '.$prenda->gramaje_prenda.'gr '.', '.$prenda->caracteristicas_prenda}}</td>
                                    <td> {{'$ '.$prenda->avaluo_prenda}}</td>

                                    <td> @IF($prenda->porcentaje_prestamo_sobre_avaluo == 45)
                                        45 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 50)
                                        50 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 55)
                                        55 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 60)
                                        60 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 65)
                                        65 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 70)
                                        70 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 75)
                                        75 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 80)
                                        80 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 85)
                                        85 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 90)
                                        90 %
                                        @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 95)
                                        95 %
                                        @else
                                        100 %
                                        @endif
                                    </td>
                                    <td>$&nbsp;{{$prenda->prestamo_prenda}}</td>
                                    <td><a class="nav-link" href="{{route('prenda.edit', [$prenda->id_prendas] )}}" id="navbarDarkDropdownMenuLink" aria-expanded="false"><button class="ntn btn-primary "><i class="fas fa-edit"></i></button></a></td>
                                </tr>
                                <tr>
                                    @endforeach



                            </tbody>

                        </table>
                    </div>
</body>

<script src="{{asset('dist/js/bootstrap.js')}}"></script>

</html>