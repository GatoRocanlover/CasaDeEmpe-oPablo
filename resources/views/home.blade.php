<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">

    <title>CASA DE EMPEÑOS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/estilos.css') }}" rel="stylesheet">


    <style>
        body {

            font-family: 'Nunito', sans-serif;

        }
        .u :hover{
            color: white;
        }
    </style>

</head>

<body class="antialiased ">
    <div class="sinborde relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <!-- encabezado -->
        <div class="size">
            <div class="navbar1 flex size">
                <div class="mx-auto ml-2 titulo u texto-grande size"><a {{-- href="{{ route('inicio_admin') }}" --}}> CASA DE EMPEÑOS <br> ASOCIADOS NUEVA MUTUA DE UMÁN
                    S.A. DE C.V.</a></div>

            </div>

            @include('layout.nav')

            <div class="row justify-content-center">
                <div class="col-md-4 text-center mt-4 fw-bold">


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡¡Has iniciado sesión!!') }}
                    {{ Auth::user()->name }}

                    <div class="max-w-6xl mx-auto flex .sm\:items-center texto">
                        <div class="max-w-6xl size  flex items-center justify-center ">


                            <div class="max-w-6xl mx-auto mt-4 mr-2">
                                <img class="mr-2" src="{{ asset('img/logo.png') }}" width="400px" height="400px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('dist/js/bootstrap.js') }}"></script>

</html>
