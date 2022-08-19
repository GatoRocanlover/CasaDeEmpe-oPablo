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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css">
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
            <br>
            <div class="row g-3 mx-auto items-center justify-center needs-validation size100">
                <label for="validationCustom03" class="form-label  text-center h3 fw-bold">COTIZACIÓN PRENDA</label>
            </div>

            <div class="mt-8  max-w-6xl mx-auto items-center justify-center flex negritas  texto size50 fondoformulario">

                <form action="{{Route('cotizacionprenda.store')}}" method="POST" onsubmit="return enviar()" name="registroCotizacion" class="row g-3 needs-validation size100 items-center justify-center" novalidate>

                    @csrf
                    <label for="validationCustom03" class="form-label text-center mt-8">DATOS DE LA PRENDA: </label>

                    <div class="col-md-8">
                        <label for="nombre_prenda" class="form-label">NOMBRE DE PRENDA:</label>
                        <div class="input-group has-validation">
                            <input type="text" name="nombre_prenda" class="form-control" id="nombre_prenda" value="" placeholder="Nombre de la prenda que desea regristrar" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="caracteristicas_prenda" class="form-label">CARACTERISTICAS:</label>
                        <textarea name="caracteristicas_prenda" class="form-control " id="caracteristicas_prenda" value="" placeholder="Ingrese las caracteristicas de la prenda" requiredrows="3"></textarea>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="validationCustomUsername" class="form-label">DESCRIPCIÓN GENERICA:</label>
                        <select class="form-select" aria-label="Default select example" name="descripcion_generica" id="descripcion_generica">
                            <option selected value="-1">SELECCIONE LA DESCRIPCIÓN GENERICA DE LA PRENDA</option>
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
                        <label for="gramaje_prenda" class="form-label">GRAMAJE (PESO):</label>
                        <div class="input-group has-validation">
                            <input type="text" name="gramaje_prenda" onkeyUp="calcular1();" class="form-control" id="gramaje_prenda" value="" placeholder="Peso de la prenda" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <label for="avaluo_prenda" class="form-label">PRECIO DE AVALUO:</label>
                        <input type="text" name="avaluo_prenda" onkeyUp="calcular();" class="form-control" id="avaluo_prenda" value="" readonly>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-8">PORCENTAJE DE PRESTAMO SOBRE AVALUO:</label>
                        <select name="porcentaje_prestamo_sobre_avaluo" class="form-select" onchange="calcular();" aria-label="Default select example" id="porcentaje_prestamo_sobre_avaluo">
                            <option selected value="0">SELECCIONE EL PORCENTAJE DE AVALUO</option>
                            <option value="45">45 %</option>
                            <option value="50">50 %</option>
                            <option value="55">55 %</option>
                            <option value="60">60 %</option>
                            <option value="65">65 %</option>
                            <option value="70">70 %</option>
                            <option value="75">75 %</option>
                            <option value="80">80 %</option>
                            <option value="85">85 %</option>
                            <option value="90">90 %</option>
                            <option value="95">95 %</option>
                            <option value="100">100 %</option>
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="prestamo_prenda" class="form-label">PRESTAMO:</label>
                        <input type="text" name="prestamo_prenda" class="form-control" id="prestamo_prenda" value="" readonly>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class=" mb-8 max-w-6xl mx-auto flex items-center justify-center mt-4">
                        <button class="size50 bordes btn btn-primary navbar1 fw-bold">DAR DE ALTA</button>
                    </div>

                </form>
            </div>
        </div>
    </body>
    <script src="{{asset('dist/js/bootstrap.js')}}"></script>
<script src="{{asset('dist/js/jquery.min.js')}}"></script>
    <script>
    //FUNCION PARA SACAR EL PORCENTAJE DEL AVALUO:
    function formatear(dato) {
        return dato.replace(/./g, function(c, i, a) {
            return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "" + c : c; // "," que le x
        });
    }

    function calcular() {
        var valor = document.getElementById("porcentaje_prestamo_sobre_avaluo").value;
        var valor2 = document.getElementById("avaluo_prenda").value;
        var porce = parseInt(valor2) * valor / 100;
        $("#prestamo_prenda").val(formatear(porce.toFixed(0)))
    }
    calcular();
    </script>

   

</html>