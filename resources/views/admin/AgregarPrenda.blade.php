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

        .tabla {
            display: flex;
            flex-wrap: wrap;
        }

        .tabla1 {
            width: 550px;
            height: 500px;
            padding: 30px;
        }

        .tabla2 {
            border-left: 2px solid black;
            width: 600px;
            height: 500px;
            padding: 30px;
        }

        .tabla3 {
            width: 1150px;
            border-top: 2px solid black;
            height: 400px;
            padding: 30px;
        }

        textarea {
            width: 405px;
            height: 90px;
        }

        .sub {
            font-size: 20px;
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



        <br>
        <form action="{{Route('prenda.store')}}" method="POST" class="row g-3 needs-validation size100 items-center justify-center" novalidate>

            @csrf

            <div class="tabla justify-content-center">
                <div class="tabla1">
                    <label for="" class="h5 text-center col-md-11">DATOS DEL CLIENTE:</label>
                    {{ csrf_field() }}
                    <div class="col-md-11 mt-8">
                        <input type="text" name="buscar_cliente" class="form-control" id="buscar_cliente" value="" placeholder="BUSCAR CLIENTE" required>
                        <input type="hidden" name="id_cliente" class="form-control" id="id_cliente" value="" placeholder="BUSCAR CLIENTE" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <button class=" size20 bordes btn btn-primary navbar1" id="btn_busqueda" type="button">BUSCAR</button>

                    </div>
                    <br>
                    <div class="col-md-11">
                        <label for="" class="fw-bold">NOMBRE DEL CLIENTE:</label>
                        <input type="text" name="nombre_cliente" class="col-md-11 tamaño" id="nombre_cliente" value="" placeholder="CLIENTE" readonly>
                        <br>
                        <label for="" class="fw-bold mt-2">DIRECCIÓN:</label>
                        <input type="text" name="numero_socio" class="col-md-11 tamaño" id="numero_socio" value="" placeholder="numero de socio" readonly>
                        <br>
                        <label for="" class="fw-bold mt-2">PROMEDIO SI ES SOCIO:</label>
                        <input type="text" name="socio" class="col-md-11 tamaño" id="socio" value="" placeholder="socio" readonly>
                        <br>
                        <label for="" class="fw-bold mt-2">NUMERO SOCIO:</label>
                        <input type="text" name="numero_socio" class="col-md-11 tamaño" id="numero_socio" value="" placeholder="numero de socio" readonly>


                    </div>
                </div>
                <div class="tabla2">
                    <label for="" class="h5 text-center col-md-11">DATOS DE LA PRENDA:</label>
                    <div class="col-md-12">
                        <br>
                        <label for="" class="sub"><strong>FOLIO DE COTIZACIÓN: </strong>{{$datoCotizar->id_cotizacionprenda}}</label>
                        <input type="hidden" name="folio_cotizacion" class="form-control" id="folio_cotizacion" value="{{$datoCotizar->id_cotizacionprenda}}" readonly>
                        <br>
                        <label for="" class="sub"><strong>NOMBRE PRENDA: </strong>{{$datoCotizar->nombre_prenda}}</label>
                        <input type="hidden" name="nombre_prenda" class="form-control" id="nombre_prenda" value="{{$datoCotizar->nombre_prenda}}" readonly>
                        <br>
                        <label for="" class="sub mt-1"><strong>CANTIDAD DE PRENDAS: </strong>{{$datoCotizar->cantidad_prenda}}</label>
                        <input type="hidden" name="cantidad_prenda" class="form-control" id="cantidad_prenda" value="{{$datoCotizar->id_cantidad_prenda}}" readonly>
                        <br>
                        <label for="" class="sub mt-1"><strong>DESCRIPCIÓN: </strong>{{$datoCotizar->caracteristicas_prenda}}</label>
                        <input type="hidden" name="caracteristicas_prenda" class="form-control" id="caracteristicas_prenda" value="{{$datoCotizar->caracteristicas_prenda}}" readonly>
                        <br>
                        <label for="" class="sub mt-1"><strong>DESCRIPCIÓN GENERICA: </strong>@if($datoCotizar->descripcion_generica == 1)
                            ORO
                            @else
                            @endif
                            @if($datoCotizar->descripcion_generica == 2)
                            PLATA
                            @else
                            @endif</label>
                        <input type="hidden" name="descripcion_generica" class="form-control" id="descripcion_generica" value="@if($datoCotizar->descripcion_generica == 1)
                            ORO
                            @else
                            @endif
                            @if($datoCotizar->descripcion_generica == 2)
                            PLATA
                            @else
                            @endif" readonly>
                        <br>
                        <label for="" class="sub"><strong>KILATAJE: </strong>{{$datoCotizar->kilataje_prenda}}</label>
                        <input type="hidden" name="kilataje_prenda" class="form-control" id="kilataje_prenda" value="{{$datoCotizar->kilataje_prenda}}" readonly>
                        <br>
                        <label for="" class="sub"><strong>GRAMAJE: </strong>{{$datoCotizar->gramaje_prenda}}</label>
                        <input type="hidden" name="gramaje_prenda" class="form-control" id="gramaje_prenda" value="{{$datoCotizar->gramaje_prenda}}" readonly>
                        <br>
                        <label for="" class="sub"><strong>AVALUO: </strong>${{$datoCotizar->avaluo_prenda}}</label>
                        <input type="hidden" name="avaluo_prenda" class="form-control" id="avaluo_prenda" value="{{$datoCotizar->avaluo_prenda}}" readonly>
                        <br>
                        <label for="" class="sub"><strong>PORCENTAJE DE AVALUO: </strong>{{$datoCotizar->porcentaje_prestamo_sobre_avaluo}}%</label>
                        <input type="hidden" name="porcentaje_prestamo_sobre_avaluo" class="form-control" id="porcentaje_prestamo_sobre_avaluo" value="{{$datoCotizar->porcentaje_prestamo_sobre_avaluo}}" readonly>
                        <br>

                        <input type="hidden" onkeyUp="calcular();" name="prestamo_inicial" class="form-control" id="prestamo_inicial" value="{{$datoCotizar->prestamo_prenda}}" readonly>


                        <label for="" class="sub"><strong>PRESTAMO: </strong>${{$datoCotizar->prestamo_prenda}}</label>
                        <input type="hidden" name="prestamo_prenda" class="form-control" id="prestamo_prenda" value="{{$datoCotizar->prestamo_prenda}}" readonly>
                        <!--                    <input type="text" class="form-control input-sm" id="intereses" name="prestamo_prenda" value="" required>
                        <input type="text" class="form-control input-sm" id="almacenaje" name="almacenaje" value="" required>
                        <input type="text" class="form-control input-sm" id="iva" name="iva" value="" required>
                        <input type="text" class="form-control input-sm" id="refrendo" name="refrendo" value="" required>
                        <input type="text" class="form-control input-sm" id="desempeño" name="desempeño" value="" required>
                        <input type="text" class="form-control input-sm" id="abono_capital" name="abono_capital" value="" required>                
 -->
                    </div>
                </div>
                <div class="tabla3">
                    <div class="col-md-4">
                        <label for="" class="h5 col-md-11">MONTO:</label>
                        <br>
                        <label for="" class="sub"><strong>INTERES:</strong></label>
                        <input type="text" name="interes" class="form-control" id="interes" value="" readonly>

                    </div>

                </div>

            </div>
    </div>


    <!-- ------------------------------------------------ -->

    <div class=" mb-8 max-w-6xl mx-auto flex items-center justify-center mt-4">

        <button class="size50 bordes btn btn-primary navbar1">GENERAR BOLETA</button>
    </div>

    </form>



</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="{{asset('dist/js/bootstrap.js')}}"></script>
<script src="{{asset('dist/js/jquery.min.js')}}"></script>
<script>
    function changeValue(newColor) {
        var valor = document.getElementById('interes').value;
        document.getElementById('interes2').innerHTML = valor;
    }


    //--------------------------------

    function setearCliente(id_cliente, nombre_cliente, socio, numero_socio, calle_cliente) {


        $("#id_cliente").val(id_cliente)    ;
        $("#nombre_cliente").val(nombre_cliente);
        $("#socio").val(socio);
        $("#numero_socio").val(numero_socio);
        $("#direccion").val(calle_cliente);
        $("#modal_cliente").css('display', 'none');

    }

    $("#btn_busqueda").on('click', function() {



        var nombre_busqueda = $("#buscar_cliente").val();

        if (nombre_busqueda.length == 0) {
            alert("Ingrese el nombre del cliente");
        }


        $.post("{{env('APP_URL')}}/api/buscar/cliente", {
                "nombre_cliente": nombre_busqueda
             

            },
            function(data, status) {

                console.log(data);




                $("#modal_cliente").css('display', 'flex');


                var clientes = data.data;

                console.log(clientes);
                $("#listado_clientes").empty();

                clientes.forEach(cliente => {

                    $("#listado_clientes").append(
                        "<button class='btn btn-primary select-cliente' onclick='setearCliente(\"" + cliente.id_cliente + "\",\"" + cliente.nombre_cliente + " " + cliente.apellido_cliente +  "\",\""+ cliente.socio +"\",\""+cliente.numero_socio+ "\")'>"
                         + cliente.nombre_cliente + " " + cliente.apellido_cliente +  "</button>"

                    );

                });




            }, "json");

    });

    //-------------------------------------------------------------

    //FUNCION PARA SACAR EL INTERES
    function formatear(dato) {
        return dato.replace(/./g, function(c, i, a) {
            return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "" + c : c; // "," que le x
        });
    }

    function calcular() {
        var valor = document.getElementById("prestamo_inicial").value;
        var porce = parseInt(valor) / 100;
        $("#interes").val(formatear(porce.toFixed(2)))
    }
    calcular();
</script>

</html>