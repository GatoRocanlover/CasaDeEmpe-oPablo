
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title >CASA DE EMPEÑOS</title> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
        <link href="">
        
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
        <div class="sinborde relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
           
 <!-- encabezado -->
            <div class="size">
                <div class="navbar1 flex size">
                    <div class="mx-auto ml-2 titulo  texto-grande size"> CASA DE EMPEÑOS <br> ASOCIACION NUEVA MUTUA S.A. DE C.V.</a></div>
                
                </div>
                
                @include('layout.nav')

                <div class="max-w-6xl mx-auto flex .sm\:items-center texto">
                    <div class="max-w-6xl size  flex items-center justify-center ">
                    
            
                    <div class="max-w-6xl mx-auto mr-2"> 
                        <img class="mr-2" src="{{asset('img/logo.png')}}" width="450px" height="450px">  
                    </div>
                </div>
    </body>

  <script src="{{asset('dist/js/bootstrap.js')}}"></script>

</html>
