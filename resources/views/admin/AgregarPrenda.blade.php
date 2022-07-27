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

       <div class="mi_modal" id="modal_cliente">
            <div class="body-modal">
                <h2 class="text-center">Seleccione un cliente</h2>
                <div id="listado_clientes">
                    
                </div>
            </div>
       </div>
            
    <!-- encabezado -->
        <div class="size">
                    <div class="navbar1 flex size">
                        <div class="max-w-6xl mx-auto mr-2"> 
                            <img class="icono" src="{{asset('img/logo.png')}}" width="450px" height="450px">  
                        </div>
                        <div class="mx-auto ml-2 titulo  texto-grande size"> CASA DE EMPEÑOS <br> ASOCIACION NUEVA MUTUA S.A. DE C.V.</a>
                        </div>
                    
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

            <div class="mt-8  max-w-6xl mx-auto items-center justify-center flex negritas  texto size50 fondoformulario">

                <form action="{{Route('prenda.store')}}" method="POST" class= "row g-3 needs-validation size100 items-center justify-center" novalidate>
                    
                    @csrf

                    <label for="validationCustom03" class="form-label mt-8 text-center">AGREGAR PRENDA NUEVA</label>
                    <div class="col-md-8">
                        
                        <div class=" input-group has-validation">
                            <input type="text" name="buscar_cliente" class="form-control" id="buscar_cliente" value="" placeholder="BUSCAR CLIENTE" required>
                            <input type="hidden" name="id_cliente" class="form-control" id="id_cliente" value="" placeholder="BUSCAR CLIENTE" required>
                            <div class="valid-feedback">
                            Looks good!
                        </div>
                        <button class=" size20 bordes btn btn-primary navbar1" id="btn_busqueda" type="button">BUSCAR</button>
                    </div>
                    <div class=" input-group has-validation">
                        <label for="nombre_prenda" class="form-label">NOMBRE CLIENTE</label>
                    <div class=" input-group has-validation">
                        <input type="text" name="nombre_cliente" class="form-control" id="nombre_cliente" value="" placeholder="CLIENTE" readonly>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    
                </div>
                    </div>    
                    <div class="col-md-8">
                            <label for="nombre_prenda" class="form-label">NOMBRE DE PRENDA</label>
                            <div class="input-group has-validation">
                                <input type="text" name="nombre_prenda" class="form-control" id="nombre_prenda" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="cantidad_prenda" class="form-label">CANTIDAD</label>
                            <input type="text" name="cantidad_prenda" class="form-control" id="cantidad_prenda" value="" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="validationCustomUsername" class="form-label">TIPO</label>
                            <select class="form-select" aria-label="Default select example" name="descripcion_generica" id="descripcion_generica">
                                <option selected value="-1">DESCRIPCION GENERICA</option>
                                <option value="1">ORO</option>
                                <option value="2">PLATA</option>
                            </select>
                            <div class="valid-feedback">
                            Looks good!
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="kilataje_prenda" class="form-label">KILATAJE</label>
                            <div class="input-group has-validation">
                                <input type="text" name="kilataje_prenda" class="form-control" id="kilataje_prenda" value="" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="gramaje_prenda" class="form-label">GRAMAJE</label>
                            <div class="input-group has-validation">
                                <input type="text" name="gramaje_prenda" class="form-control" id="gramaje_prenda" value="" required>
                                <div class="valid-feedback">
                                Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="caracteristicas_prenda" class="form-label">CARACTERISTICAS</label>
                            <textarea name ="caracteristicas_prenda"class="form-control " id="caracteristicas_prenda" value="" requiredrows="3"></textarea>
                            <div class="valid-feedback">
                            Looks good!
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="avaluo_prenda" class="form-label">AVALUO</label>
                            <input type="text" name="avaluo_prenda" class="form-control" id="avaluo_prenda" value="" required>
                            <div class="valid-feedback">
                            Looks good!
                            </div>
                        </div>
                        <div class="col-md-8">PORCENTAJE DE PRESTAMO SOBRE AVALUO</label>
                            <select name="porcentaje_prestamo_sobre_avaluo" class="form-select" aria-label="Default select example" id="porcentaje_prestamo_sobre_avaluo">
                                <option selected  value="-1"></option>
                                <option value="1">45 %</option>
                                <option value="2">50 %</option>
                                <option value="3">55 %</option>
                                <option value="4">60 %</option>
                                <option value="5">65 %</option>
                                <option value="6">70 %</option>
                                <option value="7">75 %</option>
                                <option value="8">80 %</option>
                                <option value="9">85 %</option>
                                <option value="10">90 %</option>
                                <option value="11">95 %</option>
                                <option value="12">100 %</option>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="prestamo_prenda" class="form-label">PRESTAMO</label>
                            <input type="text" name="prestamo_prenda" class="form-control" id="prestamo_prenda" value="" required>
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
    <script src="{{asset('dist/js/jquery.min.js')}}"></script>
    <script>

        function setearCliente(id_cliente, nombre_cliente) {
            
    
                $("#id_cliente").val(id_cliente);
                $("#nombre_cliente").val(nombre_cliente);
            $("#modal_cliente").css('display','none');

        }

        $("#btn_busqueda").on('click', function(){

        
           
          var nombre_busqueda =  $("#buscar_cliente").val();

          if(nombre_busqueda.length==0){
            alert("Ingrese el nombre del cliente");
          }


                $.post("{{env('APP_URL')}}/api/buscar/cliente", { 
                   "nombre_cliente" : nombre_busqueda
                },
                function(data, status) {

                    console.log(data);
                    
                    $("#modal_cliente").css('display','flex');
                    
                    var clientes = data.data;

                    console.log(clientes);
                    $("#listado_clientes").empty();

                        clientes.forEach(cliente => {
                            
                         

                            $("#listado_clientes").append(
                                "<button class='btn btn-primary select-cliente' onclick='setearCliente(\""+cliente.id_cliente+"\",\""+cliente.nombre_cliente+" "+cliente.apellido_cliente+"\")'>"+cliente.nombre_cliente+" "+cliente.apellido_cliente+"</button>"
                            );
                    
                        });
                    
                    
                }, "json");


        });

     
    
    </script>

</html>
