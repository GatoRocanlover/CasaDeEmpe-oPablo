

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


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            <div class="mt-8 max-w-6xl mx-auto items-center justify-center flex negritas  texto size60 fondoformulario">
                <form action="{{Route('cliente.store')}}" method="POST" class= "row g-3 needs-validation size95 items-center justify-center" novalidate>
                
                @csrf
                
                <label for="validationCustom03" class="form-label mt-8 text-center">DATOS PRINCIPALES DEL CLIENTE</label>
                    <div class="col-md-6">
                        <label for="nombre_cliente" class="form-label">NOMBRE(S)</label>
                        <input type="text" name="nombre_cliente" class="form-control" id="nombre_cliente" value="" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="apellido_cliente" class="form-label">APELLIDOS</label>
                        <input type="text" name="apellido_cliente" class="form-control" id="apellido_cliente" value="" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    
                    <div class="col-md-6">IDENTIFICACION</label>
                        <select class="form-select" name="tipo_de_identificacion" id="tipo_de_identificacion" aria-label="Default select example">
                            <option selected value="-1">TIPO DE IDENTIFICACION</option>
                            <option value="1">INE</option>
                            <option value="2">CARTILLA MILITAR </option>
                            <option value="3">PASAPORTE</option>
                        </select>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="numero_de_identificacion" class="form-label">NUMERO DE IDENTIFICACION</label>
                        <div class="input-group has-validation">
                           <input type="text" name="numero_de_identificacion" class="form-control" id="numero_de_identificacion" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="correo_electronico_cliente" class="form-label">CORREO ELECTRONICO</label>
                        <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="correo_electronico_cliente" class="form-control" id="correo_electronico_cliente" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="telefono_cliente" class="form-label">TELEFONO</label>
                        <input type="text" name="telefono_cliente" class="form-control" id="telefono_cliente" value="" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">SOCIO</label>
                        <select class="form-select" id="socio" aria-label="Default select example">
                            <option selected value="-1">SELECCIONA</option>
                            <option value="1">SI</option>
                            <option value="2">NO </option>
                        </select>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-6">
                    <label for="numero_socio"  class="form-label">N° DE SOCIO</label>
                        <input type="text" name="numero_socio" class="form-control" id="numero_socio" required>
                       
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <label for="validationCustom03" class="form-label">DATOS DOMICILIARIOS DEL CLIENTE</label>
                    <div class="col-md-4">
                        <label for="calle_cliente" class="form-label">CALLE/AVENIDA</label>
                        <input type="text" name="calle_cliente" class="form-control" id="calle_cliente" required>
                        <div class="invalid-feedback">
                        Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="numero_cliente" class="form-label">NUMERO</label>
                        <input type="text" name="numero_cliente" class="form-control" id="numero_cliente" required>
                        <div class="invalid-feedback">
                        Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="cruzamientos_cliente" class="form-label">CRUZAMIENTOS</label>
                        <input type="text" name="cruzamientos_cliente" class="form-control" id="cruzamientos_cliente" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="colonia_cliente" class="form-label">COLONIA</label>
                        <input type="text" name="colonia_cliente" class="form-control" id="colonia_cliente" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="ciudad_cliente" class="form-label">CIUDAD</label>
                        <input type="text" name="ciudad_cliente" class="form-control" id="ciudad_cliente" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="codigo_postal_cliente" class="form-label">CODIGO POSTAL</label>
                        <input type="text"  name="codigo_postal_cliente" class="form-control" id="codigo_postal_cliente" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <label for="validationCustom03" class="form-label">DATOS DEL COTITULAR</label>
                    
                    <div class="col-md-4">
                        <label for="nombre_cotitular" class="form-label">NOMBRE(S)</label>
                        <input type="text" name="nombre_cotitular" class="form-control" id="nombre_cotitular" required>
                        <div class="invalid-feedback">
                        Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="apellido_cotitular" class="form-label">APELLIDO(S)</label>
                        <input type="text" name="apellido_cotitular" class="form-control" id="apellido_cotitular" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="telefono_cotitular" class="form-label">TELEFONO</label>
                        <input type="text" name="telefono_cotitular" class="form-control" id="telefono_cotitular" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="calle_cotitular" class="form-label">CALLE/AVENIDA</label>
                        <input type="text" name="calle_cotitular'" class="form-control" id="calle_cotitular" required>
                        <div class="invalid-feedback">
                        Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="numero_cotitular" class="form-label">NUMERO</label>
                        <input type="text"  name="numero_cotitular" class="form-control" id="numero_cotitular" required>
                        <div class="invalid-feedback">
                        Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="cruzamientos_cotitular" class="form-label">CRUZAMIENTOS</label>
                        <input type="text" name="cruzamientos_cotitular" class="form-control" id="cruzamientos_cotitular" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="colonia_cotitular" class="form-label">COLONIA</label>
                        <input type="text" name="colonia_cotitular'" class="form-control" id="colonia_cotitular" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="ciudad_cotitular" class="form-label">CIUDAD</label>
                        <input type="text"  name="ciudad_cotitular" class="form-control" id="ciudad_cotitular" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="codigo_postal_cotitular" class="form-label">CODIGO POSTAL</label>
                        <input type="text" name="codigo_postal_cotitular" class="form-control" id="codigo_postal_cotitular" required>
                        <div class="invalid-feedback">
                        Please provide a valid zip.
                        </div>
                    </div>
                    <label for="validationCustom03" class="form-label">DATOS DEL BENEFICIARIO</label>
                    <div class="col-md-6">
                        <label for="nombre_beneficiario" class="form-label">NOMBRE(S)</label>
                        <input type="text" name="nombre_beneficiario" class="form-control" id="nombre_beneficiario" required>
                        <div class="invalid-feedback">
                        Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="apellido_beneficiario" class="form-label">APELLIDO(S)</label>
                        <input type="text"  name="apellido_beneficiario"  class="form-control" id="apellido_beneficiario" required>
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
 <!-- --> 

