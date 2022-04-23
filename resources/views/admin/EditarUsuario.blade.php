

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CASA DE EMPEÑOS</title> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
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
        <div class="relative sinborde items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
          
 <!-- encabezado -->
        <div class="size">
                <div class="navbar1 flex size">
                    <div class="max-w-6xl mx-auto mr-2"> 
                        <img class="icono" src="{{asset('img/logo.png')}}" width="450px" height="450px">  
                    </div>
                    <div class="mx-auto ml-2 titulo negritas texto-grande size"> CASA DE EMPEÑOS <br> ASOCIACION NUEVA MUTUA S.A. DE C.V.</a></div>
                
                </div>
               <!-- MENU --> 
                @include('layout.nav')

            <div class="mt-8 max-w-6xl mx-auto items-center justify-center flex negritas  texto size50 fondoformulario">
                <form class="row g-3 needs-validation size80  items-center justify-center" novalidate>
                <label for="validationCustom03" class="form-label mt-8 text-center">EDITAR USUARIO</label>
                <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">USUARIO</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>    
                <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">NOMBRE(S)</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="validationCustom02" class="form-label">APELLIDOS</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-8">TIPO DE USUARIO</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>TIPO DE USUARIO</option>
                            <option value="1">ADMINISTRADOR</option>
                            <option value="2">EVALUADOR</option>
                            <option value="3">CAJERO</option>
                        </select>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-8 mx-auto">STATUS</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected></option>
                            <option value="1">ACTIVO</option>
                            <option value="2">INACTIVO</option>
                        </select>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="validationCustom02" class="form-label">AGREGAR CONTRASEÑA</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                   
                    <div class=" mb-8 max-w-6xl mx-auto flex items-center justify-center mt-4">
                        <button class="size50 bordes btn btn-primary navbar1">GUARDAR</button>
                    </div>

                </form>
            </div>
         </div>
    </body>

  <script src="{{asset('dist/js/bootstrap.js')}}"></script>

</html>
