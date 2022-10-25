

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
        <div class="relative sinborde items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
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
                    <div class="mx-auto ml-2 titulo letratitulo texto-grande size"> CASA DE EMPEÑOS <br> ASOCIADOS NUEVA MUTUA DE UMÁN S.A. DE C.V.</a></div>
                
                </div>
                <div class="franja"></div>

                <div class="max-w-6xl mx-auto flex .sm\:items-center texto">
                    <div class="max-w-6xl size  flex items-center justify-center ">
                        <form  action="" method="post" enctype="text/plain" >
                            <div class="max-w-6xl mx-auto flex justify-between">
                                <label class="size50 negritas" href="">USUARIO :</label>
                                <input class="size50 bordes" type="text" size="15" maxlength="30" value="" name="nombre">
                            </div>

                            <div class="max-w-6xl mx-auto flex justify-between mt-4">
                                <label class="size50 negritas"href="">CONTRASEÑA :</label>
                                <input class="size50 bordes" type="password" name="contraseña">
                            </div>
                            
                            <div class="max-w-6xl mx-auto flex items-center justify-center mt-4" x-ref="mesaggeError">
                                <h4 class="titulo">Mensaje de Error</h4>   
                            </div>
                            <div class="max-w-6xl mx-auto flex items-center justify-center mt-4" x-ref="mesaggeError">
                                <button class="size50 bordes btn btn-primary navbar1">ACCEDER</button>
                            </div>
                        </form>
                    </div>
            
                    <div class="max-w-6xl mx-auto mr-2"> 
                        <img class="mr-2" src="{{asset('img/logo.png')}}" width="450px" height="450px"> 
                        <p class="card_text"></p>
                    </div>
                </div>
    </body>
 <!--    <script type="text/javascript">
        function AdminInicio(){

            
            return->AdminInicio(){
                view('admin.admininicio')
            }
        }
    </script> -->

</html>
