

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
            tr th{
                text-align:center;
            }
            tr td{
                text-align:center;
            }
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
                    <div class="mx-auto ml-2 titulo  texto-grande size"> CASA DE EMPEÑOS <br> ASOCIADOS NUEVA MUTUA DE UMÁN S.A. DE C.V.</a></div>
                
                </div>
                
                @include('layout.nav')

                <div class="mt-8 size95 mx-auto items-center justify-center flex negritas">
                    <div class="max-w-6xl size  flex items-center justify-center ">
                    
                    <table class="table table-hover">
                        <thead class="letra-blanca bg-dark">
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">USUARIO</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">ROL DE USUARIO</th>
                            <th scope="col">FECHA DE CREACIÓN</th>
                            <th scope="col">EDITAR</th>

                            </tr>
                        </thead>
                            @foreach($list_user as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>     
                                    <td></td>
                                    <td>{{$user->created_at->format('d-m-Y')}}</td>
                                    <td><a class="nav-link" href="" id="navbarDarkDropdownMenuLink"  aria-expanded="false"><button class="ntn btn-primary "><i class="fas fa-edit"></i></button></a></td>
                                </tr>
                            @endforeach
                    </table>
                </div>

    </body>

  <script src="{{asset('dist/js/bootstrap.js')}}"></script>

</html>
