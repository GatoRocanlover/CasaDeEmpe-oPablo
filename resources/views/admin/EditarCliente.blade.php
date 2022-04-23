

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

            <div class="mt-8 max-w-6xl mx-auto items-center justify-center flex negritas  texto size80 fondoformulario">
                <form class="row g-3 needs-validation size80" novalidate>
                <label for="validationCustom03" class="form-label mt-8 text-center">EDITAR DATOS DEL CLIENTE</label>
                <div class="col-md-6">
                        <label for="validationCustom01" class="form-label">NOMBRE(S)</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">APELLIDOS</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    
                    <div class="col-md-6">IDENTIFICACION</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>TIPO DE IDENTIFICACION</option>
                            <option value="1">INE</option>
                            <option value="2">CARTILLA MILITAR </option>
                            <option value="3">PASAPORTE</option>
                        </select>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">NUMERO DE IDENTIFICACION</label>
                        <div class="input-group has-validation">
                           <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustomUsername" class="form-label">CORREO ELECTRONICO</label>
                        <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">TELEFONO</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    
                    <div class="col-md-6">SOCIO</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>SELECCIONA</option>
                            <option value="1">SI</option>
                            <option value="2">NO </option>
                        </select>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom02" class="form-label">N° DE SOCIO</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <label for="validationCustom03" class="form-label">DATOS DOMICILIARIOS DEL CLIENTE</label>
                    <div class="col-md-4">
                        <label for="validationCustom03" class="form-label">CALLE/AVENIDA</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                        Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom05" class="form-label">NUMERO</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                        Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom05" class="form-label">CRUZAMIENTOS</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom05" class="form-label">COLONIA</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom05" class="form-label">CIUDAD</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom05" class="form-label">CODIGO POSTAL</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <label for="validationCustom03" class="form-label">DATOS DEL COTITULAR</label>
                    
                    <div class="col-md-4">
                        <label for="validationCustom05" class="form-label">NOMBRE(S)</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                        Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom05" class="form-label">APELLIDO(S)</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom05" class="form-label">TELEFONO</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom03" class="form-label">CALLE/AVENIDA</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                        Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom05" class="form-label">NUMERO</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                        Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom05" class="form-label">CRUZAMIENTOS</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom05" class="form-label">COLONIA</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom05" class="form-label">CIUDAD</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom05" class="form-label">CODIGO POSTAL</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <label for="validationCustom03" class="form-label">DATOS DEL BENEFICIARIO</label>
                    <div class="col-md-6">
                        <label for="validationCustom03" class="form-label">NOMBRE(S)</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                        Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">APELLIDO(S)</label>
                        <input type="text" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                        Please provide a valid city.
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
