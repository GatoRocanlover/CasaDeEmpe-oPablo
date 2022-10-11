

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
        <div class="mi_modal" id="modal_prenda">
            <div class="body-modal">
            <h2 class="text-center">Seleccione una prenda</h2>
            <div id="listado_prendas">    
            </div>
            </div>
        </div>
        <div class="relative sinborde items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
          
 <!-- encabezado -->
        <div class="size">
                <div class="navbar1 flex size">
                    <div class="max-w-6xl mx-auto mr-2"> 
                        <img class="icono" src="{{asset('img/logo.png')}}" width="450px" height="450px">  
                    </div>
                        <div class="mx-auto ml-2 titulo  texto-grande size"> CASA DE EMPEÑOS <br> ASOCIACION NUEVA MUTUA UMAN S.A. DE C.V.</a>
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

            <div class="mt-8 max-w-6xl mx-auto items-center justify-center flex negritas  texto size80 fondoformulario">
                <form class="row g-3 needs-validation size80" novalidate>
                <label for="validationCustom03" class="form-label mt-8 text-center">GENERAR BOLETA DE EMPEÑO <br> Selecciona al cliente y la prenda correctamente</label>
                
                    <div class="col-md-6  has-validation">
                        
                        <label for="validationCustom01" class="form-label">CLIENTE</label>
                        <input type="text" name="buscar_cliente" class="form-control" id="buscar_cliente" value="" placeholder="BUSCAR CLIENTE" required>
                        
                        <input type="hidden" name="id_cliente" class="form-control" id="id_cliente" value="" placeholder="BUSCAR CLIENTE" required>
                        <div class="valid-feedback">Looks good!
                        </div>
                        <div class="mr-2 mt-4 mb-8 flex items-center justify-center">
                            <button  class=" size50 bordes btn btn-primary navbar1" id="btn_busqueda" type="button">Buscar</button>
                        </div>
                        <div>
                            <input type="text" name="buscar_cliente" class="form-control" id="nombre_cliente" value="" placeholder="" readonly>
                        </div>
                        
                    </div>
                    <div class="col-md-6  has-validation">
                        <label for="validationCustom02" class="form-label">PRENDA</label>
                        <input type="text" name="buscar_prenda" class="form-control" id="buscar_prenda" value="" placeholder="BUSCAR PRENDA" required>
     
                        <input type="hidden" name="id_cliente" class="form-control" id="id_prenda" value="" placeholder="BUSCAR PRENDA" required>
                        <input type="hidden" name="id_prenda" class="form-control" id="id_prenda" value="" placeholder="BUSCAR PRENDA" required>

                        <div class="valid-feedback">
                        Looks good!
                        </div>
                            <div class="mr-2 mt-4 mb-8 flex items-center justify-center">
                                <button class="size50 bordes btn btn-primary navbar1" id="btn_busqueda2" type="button">Buscar</button>
                            </div>
                        </div>
                    <div>
                        <input type="text" name="buscar_prenda" class="form-control" id="nombre_prenda" value="" placeholder="" readonly>
                    </div>
                    
                    <div class=" mb-8 max-w-6xl mx-auto flex items-center justify-center mt-4">
                        <button class="size50 bordes btn btn-primary navbar1">GENERAR</button>
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



function setearPrenda(id_cliente, id_prendas, nombre_prenda) {
            
    
            $("#id_cliente").val(id_cliente);
            $("#id_prendas").val(id_prendas);
            $("#nombre_prenda").val(nombre_prenda);
        $("#modal_prenda").css('display','none');
        
        }
        $("#btn_busqueda2").on('click', function(){



var nombre_busqueda2 =  $("#buscar_prenda").val();

if(nombre_busqueda2.length==0){
alert("Ingrese el nombre de la prenda");
}


    $.post("{{env('APP_URL')}}/api/buscar/prenda", { 
       "nombre_prenda" : nombre_busqueda2
    },
    function(data, status) {

        console.log(data);
        
        $("#modal_prenda").css('display','flex');
        
        var prendas = data.data;

        console.log(prendas);
        $("#listado_prendas").empty();

        prendas.forEach(prenda => {
                
             

                $("#listado_prendas").append(
                    "<button class='btn btn-primary select-prenda' onclick='setearPrenda(\""+cliente.id_cliente+"\",\""+prenda.id_prendas+" "+prenda.nombre_prenda+"\")'>"+prenda.id_prendas+" "+prenda.nombre_prenda+"</button>"
                );
        
            });
        
        
    }, "json");


});


</script>
</html>
