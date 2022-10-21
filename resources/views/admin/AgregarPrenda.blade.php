<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CASA DE EMPEÑOS</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/estilos.css') }}" rel="stylesheet">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .tabla {
            display: flex;
            flex-wrap: wrap;
        }

        .tabla1 {
            width: 500px;
            height: 455px;
            padding: 30px;
        }

        .tabla2 {

            width: 500px;
            height: 455px;
            padding: 30px;
        }

        textarea {
            width: 405px;
            height: 90px;
        }

        .sub {
            font-size: 18px;
        }

        .sub2 {
            font-size: 16px;
        }

        .centro1 {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .red1 :hover {
            background-color: green;

        }

        @media only screen and (min-width: 268px) {

            .tabla2 {
                border-left: none;
                border-top: 2px solid black;
            }
        }

        @media only screen and (min-width: 1024px) {

            .tabla2 {
                border-left: 2px solid black;
                border-top: none;
            }
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
                <a href="{{ route('inicio_admin') }}"><img class="icono" src="{{ asset('img/logo.png') }}"></a>
            </div>
            <div class="mx-auto ml-2 titulo  texto-grande size"> CASA DE EMPEÑOS <br> ASOCIADOS NUEVA MUTUA DE UMÁN S.A. DE
                C.V.</a>
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

        @can('alta-cotizacion')

        <br>
        <form action="{{ Route('prenda.store') }}" method="POST" onsubmit="return enviar()" name="formulario_boleta"
            class="row g-3 needs-validation size100 items-center justify-center" novalidate>
            @csrf
            <div class="tabla justify-content-center">
                <div class="tabla1">
                    <label for="" class="h5 text-center col-md-11 fw-bold">DATOS DEL CLIENTE:</label>

                    <div class="mt-5"></div>


                    <div class="col-md-11 mt-4 red1">
                        <input type="hidden" name="buscar_cliente" class="form-control" id="buscar_cliente"
                            value="" placeholder="BUSCAR CLIENTE" required>
                        <input type="hidden" name="id_cliente" class="form-control" id="id_cliente" value=""
                            placeholder="BUSCAR CLIENTE" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <button class=" size20 bordes btn btn-primary " id="btn_busqueda"
                            type="button"><strong>PRESIONE PARA BUSCAR
                                CLIENTE</strong> &nbsp; <i class="fa fa-search" style="font-size:24px"></i></button>
                    </div>

                    <div class="col-md-13 mt-4">
                        <label for="" class="fw-bold sub">NOMBRE DEL CLIENTE:</label>
                        <input type="text" name="nombre_cliente" class="col-md-11 sub" id="nombre_cliente"
                            value="" placeholder="CLIENTE" readonly>
                        <br>
                        <label for="" class="fw-bold mt-2 sub col-md-14">DIRECCIÓN:</label>
                        <input type="text" name="direccion" class="col-md-11 sub2" id="direccion" value=""
                            placeholder="DIRECCIÓN" readonly>
                        <br>
                        <label for="" class="fw-bold mt-2 sub">NUMERO SOCIO:</label>
                        <input type="text" name="numero_socio" class="col-md-11 sub" id="numero_socio" value=""
                            placeholder="NUMERO DE SOCIO" readonly>
                        <strong><label class="col-md-8 sub mt-2">REAFIRMA SI ES SOCIO:</label></strong><br>
                        <div class="col-md-11">
                            <select class="form-select text-center mt-1" id="socio" onchange="calcular();"
                                name="socio" aria-label="Default select example">
                                <option class="fw-bold" value="DISPONIBLE">¿ES SOCIO?</option>
                                <option class="fw-bold" value="0.020">SI</option>
                                <option class="fw-bold" value="0.025">NO</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="tabla2">
                    <label for="" class="h5 text-center col-md-11 fw-bold mt">DATOS DE LA PRENDA:</label>
                    <div class="col-md-12">
                        <br>
                        <br>
                        <label for="" class="sub"><strong>FOLIO DE COTIZACIÓN:
                            </strong>{{ $datoCotizar->id_cotizacionprenda }}</label>
                        <input type="hidden" name="folio_cotizacion" class="form-control" id="folio_cotizacion"
                            value="{{ $datoCotizar->id_cotizacionprenda }}" readonly>
                        <br>
                        <label for="" class="sub"><strong>NOMBRE PRENDA:
                            </strong>{{ $datoCotizar->nombre_prenda }}</label>
                        <input type="hidden" name="nombre_prenda" class="form-control" id="nombre_prenda"
                            value="{{ $datoCotizar->nombre_prenda }}" readonly>
                        <br>
                        <label for="" class="sub mt-1"><strong>CANTIDAD DE PRENDAS:
                            </strong>{{ $datoCotizar->cantidad_prenda }}</label>
                        <input type="hidden" name="cantidad_prenda" class="form-control" id="cantidad_prenda"
                            value="{{ $datoCotizar->cantidad_prenda }}" readonly>
                        <br>
                        <label for="" class="sub mt-1"><strong>DESCRIPCIÓN:
                            </strong>{{ $datoCotizar->caracteristicas_prenda }}</label>
                        <input type="hidden" name="caracteristicas_prenda" class="form-control"
                            id="caracteristicas_prenda" value="{{ $datoCotizar->caracteristicas_prenda }}" readonly>
                        <br>
                        <label for="" class="sub mt-1"><strong>DESCRIPCIÓN GENERICA:
                            </strong>{{ $datoCotizar->descripcion_generica }}</label>
                        <input type="hidden" name="descripcion_generica" class="form-control"
                            id="descripcion_generica" value="{{ $datoCotizar->descripcion_generica }}" readonly>
                        <br>
                        <label for="" class="sub"><strong>KILATAJE:
                            </strong>{{ $datoCotizar->kilataje_prenda }}</label>
                        <input type="hidden" name="kilataje_prenda" class="form-control" id="kilataje_prenda"
                            value="{{ $datoCotizar->kilataje_prenda }}" readonly>
                        <br>
                        <label for="" class="sub"><strong>GRAMAJE:
                            </strong>{{ $datoCotizar->gramaje_prenda }}</label>
                        <input type="hidden" name="gramaje_prenda" class="form-control" id="gramaje_prenda"
                            value="{{ $datoCotizar->gramaje_prenda }}" readonly>
                        <br>
                        <label for="" class="sub"><strong>AVALUO:
                            </strong>${{ $datoCotizar->avaluo_prenda }}</label>
                        <input type="hidden" name="avaluo_prenda" class="form-control" id="avaluo_prenda"
                            value="{{ $datoCotizar->avaluo_prenda }}" readonly>
                        <br>
                        <label for="" class="sub"><strong>PORCENTAJE DE AVALUO:
                            </strong>{{ $datoCotizar->porcentaje_prestamo_sobre_avaluo }}%</label>
                        <input type="hidden" name="porcentaje_prestamo_sobre_avaluo" class="form-control"
                            id="porcentaje_prestamo_sobre_avaluo"
                            value="{{ $datoCotizar->porcentaje_prestamo_sobre_avaluo }}" readonly>
                        <br>

                        <input type="hidden" onkeyUp="calcular();" name="prestamo_inicial" class="form-control"
                            id="prestamo_inicial" value="{{ $datoCotizar->prestamo_prenda }}" readonly>


                        <label for="" class="sub"><strong>PRESTAMO:
                            </strong>${{ $datoCotizar->prestamo_prenda }}</label>
                        <input type="hidden" name="prestamo_prenda" class="form-control" id="prestamo_prenda"
                            value="{{ $datoCotizar->prestamo_prenda }}" readonly>
                    </div>
                </div>

            </div>

            <input type="hidden" name="fecha_prestamo" class="sub uno" id="fecha_prestamo"
                value="{{ dias() }}" readonly>
            <input type="hidden" name="mes1" class="sub uno" id="mes1"
                value="{{ \Carbon\Carbon::now()->addMonths(1) }}" readonly>
            <input type="hidden" name="mes2" class="sub uno" id="mes2"
                value="{{ \Carbon\Carbon::now()->addMonths(2) }}" readonly>
            <input type="hidden" name="mes3" class="sub uno" id="mes3"
                value="{{ \Carbon\Carbon::now()->addMonths(3) }}" readonly>
            <input type="hidden" name="mes4" class="sub uno" id="mes4"
                value="{{ \Carbon\Carbon::now()->addMonths(4) }}" readonly>
            <input type="hidden" name="mes5" class="sub uno" id="mes5"
                value="{{ \Carbon\Carbon::now()->addMonths(5) }}" readonly>
            <input type="hidden" name="fecha_comercializacion" class="sub uno" id="fecha_comercializacion"
                value="{{ \Carbon\Carbon::now()->addMonths(6) }}" readonly>

            <input type="hidden" name="interes" class="sub uno" id="interes" value="" readonly>
            <input type="hidden" name="almacenaje" class="form-control" id="almacenaje" value="" readonly>
            <input type="hidden" name="iva" class="form-control" id="iva" value="" readonly>
            <input type="hidden" name="refrendo" class="form-control" id="refrendo" value="" readonly>
            <input type="hidden" name="desempeño" class="form-control" id="desempeño" value="" readonly>
            <input type="hidden" name="subtotal" class="form-control" id="subtotal" value="" readonly>

            <input type="hidden" name="interes2" class="sub uno" id="interes2" value="" readonly>
            <input type="hidden" name="almacenaje2" class="form-control" id="almacenaje2" value="" readonly>
            <input type="hidden" name="iva2" class="form-control" id="iva2" value="" readonly>
            <input type="hidden" name="refrendo2" class="form-control" id="refrendo2" value="" readonly>
            <input type="hidden" name="desempeño2" class="form-control" id="desempeño2" value="" readonly>
            <input type="hidden" name="subtotal2" class="form-control" id="subtotal2" value="" readonly>

            <input type="hidden" name="interes3" class="sub uno" id="interes3" value="" readonly>
            <input type="hidden" name="almacenaje3" class="form-control" id="almacenaje3" value="" readonly>
            <input type="hidden" name="iva3" class="form-control" id="iva3" value="" readonly>
            <input type="hidden" name="refrendo3" class="form-control" id="refrendo3" value="" readonly>
            <input type="hidden" name="desempeño3" class="form-control" id="desempeño3" value="" readonly>
            <input type="hidden" name="subtotal3" class="form-control" id="subtotal3" value="" readonly>

            <input type="hidden" name="interes4" class="sub uno" id="interes4" value="" readonly>
            <input type="hidden" name="almacenaje4" class="form-control" id="almacenaje4" value="" readonly>
            <input type="hidden" name="iva4" class="form-control" id="iva4" value="" readonly>
            <input type="hidden" name="refrendo4" class="form-control" id="refrendo4" value="" readonly>
            <input type="hidden" name="desempeño4" class="form-control" id="desempeño4" value="" readonly>
            <input type="hidden" name="subtotal4" class="form-control" id="subtotal4" value="" readonly>

            <input type="hidden" name="interes5" class="sub uno" id="interes5" value="" readonly>
            <input type="hidden" name="almacenaje5" class="form-control" id="almacenaje5" value="" readonly>
            <input type="hidden" name="iva5" class="form-control" id="iva5" value="" readonly>
            <input type="hidden" name="refrendo5" class="form-control" id="refrendo5" value="" readonly>
            <input type="hidden" name="desempeño5" class="form-control" id="desempeño5" value="" readonly>
            <input type="hidden" name="subtotal5" class="form-control" id="subtotal5" value="" readonly>

            <input type="hidden" name="almacenaje_anterior" class="form-control" id="almacenaje_anterior"
                value="0" readonly>
            <input type="hidden" name="iva_anterior" class="form-control" id="iva_anterior" value="0"
                readonly>
            <input type="hidden" name="refrendo_anterior" class="form-control" id="refrendo_anterior"
                value="0" readonly>
            <input type="hidden" name="numeros_refrendos" class="form-control" id="numeros_refrendos"
                value="0" readonly>
            <input type="hidden" name="folio_refrendo" class="form-control" id="folio_refrendo" value="0"
                readonly>
            <input type="hidden" name="interes_anterior" class="form-control" id="interes_anterior" value="0"
                readonly>
            <input type="hidden" name="cantidad_pago" class="form-control" id="cantidad_pago" value="0"
                readonly>
            <input type="hidden" name="cambio_boleta" class="form-control" id="cambio_boleta" value="0"
                readonly>
            <input type="hidden" name="sub_refrendo" class="form-control" id="sub_refrendo" value="0"
                readonly>
            <input type="hidden" name="total" class="sub uno" id="total" value="0" readonly>
            <input type="hidden" name="recargo_des" class="sub uno" id="recargo_des" value="0" readonly>
            <input type="hidden" name="importe_actual" class="form-control" id="importe_actual" value="0"
                readonly>
            <input type="hidden" name="importe_anterior" class="form-control" id="importe_anterior" value="0"
                readonly>
            <input type="hidden" name="abono_capital" class="form-control" id="abono_capital" value="0"
                readonly>


            <input type="hidden" name="folio_capi" class="form-control" id="folio_capi" value="0" readonly>
            <input type="hidden" name="abono_capital_capi" class="form-control" id="abono_capital_capi"
                value="0" readonly>
            <input type="hidden" name="interes_anterior_capi" class="form-control" id="interes_anterior_capi"
                value="0" readonly>
            <input type="hidden" name="almacenaje_anterior_capi" class="form-control" id="almacenaje_anterior_capi"
                value="0" readonly>
            <input type="hidden" name="sub_capital" class="form-control" id="sub_capital" value="0" readonly>
            <input type="hidden" name="iva_anterior_capi" class="form-control" id="iva_anterior_capi"
                value="0" readonly>
            <input type="hidden" name="total_capi" class="form-control" id="total_capi" value="0" readonly>
            <input type="hidden" name="cantidad_pago_capi" class="form-control" id="cantidad_pago_capi"
                value="0" readonly>
            <input type="hidden" name="cambio_boleta_capi" class="form-control" id="cambio_boleta_capi"
                value="0" readonly>
            <input type="hidden" name="importe_anterior_capi" class="form-control" id="importe_anterior_capi"
                value="0" readonly>
            <input type="hidden" name="importe_actual_capi" class="form-control" id="importe_actual_capi"
                value="0" readonly>
            <input type="hidden" name="recargo_des_capi" class="form-control" id="recargo_des_capi" value="0"
                readonly>
            <input type="hidden" name="numeros_capital" class="form-control" id="numeros_capital" value="0"
                readonly>

           
            <div class=" mb-8 max-w-6xl mx-auto flex items-center justify-center">
                <button id="idBoton" class="size50 bordes btn btn-primary navbar1">GENERAR BOLETA</button>
            </div>
    </div>
    </form>
    @else
    <div class="h3 text-center fw-bold mt-8">No tienes los permisos para ver este modulo <br> Comunicate con tu superior...</div> 
@endcan
</body>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="{{ asset('dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('dist/js/jquery.min.js') }}"></script>
<script src="{{ asset('dist/js/AgregarPrenda.js') }}"></script>
<script>
    function setearCliente(id_cliente, nombre_cliente, numero_socio, calle_cliente, colonia_cliente, numero_cliente,
        cruzamientos_cliente, ciudad_cliente) {


        $("#id_cliente").val(id_cliente);
        $("#nombre_cliente").val(nombre_cliente);

        $("#numero_socio").val(numero_socio);
        $("#direccion").val(calle_cliente);
        $("#modal_cliente").css('display', 'none');

    }

    $("#btn_busqueda").on('click', function() {



        var nombre_busqueda = $("#buscar_cliente").val();



        $.post("{{ env('APP_URL') }}/api/buscar/cliente", {
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
                        "<button class='btn btn-primary select-cliente' onclick='setearCliente(\"" +
                        cliente.id_cliente + "\",\"" + cliente.nombre_cliente + " " + cliente
                        .apellido_cliente +
                        "\",\"" + cliente.numero_socio + "\",\"" + cliente.calle_cliente +
                        ", #" +
                        cliente.numero_cliente + ", " + cliente.cruzamientos_cliente +
                        " COL. " + cliente.colonia_cliente + ", " + cliente.ciudad_cliente +
                        " YUC." + "\")'>" +
                        cliente.nombre_cliente + " " + cliente.apellido_cliente + "</button>"

                    );

                });

            }, "json");

    });
</script>

</html>
