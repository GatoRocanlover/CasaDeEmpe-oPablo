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
    <link href="{{ asset('dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/estilos.css') }}" rel="stylesheet">
    <style>
        .fondoformulario {
            padding: 50px;
        }
    </style>

</head>

<body class="antialiased ">
    <div class="relative sinborde items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <!-- encabezado -->
        <div class="size">
            <div class="navbar1 flex size">
                <div class="max-w-6xl mx-auto mr-2">
                    <a href="{{ route('inicio_admin') }}"><img class="icono" src="{{ asset('img/logo.png') }}"></a>
                </div>
                <div class="mx-auto ml-2 titulo texto-grande size"> CASA DE EMPEÑOS <br> ASOCIADOS NUEVA MUTUA DE UMÁN S.A. DE C.V.</a></div>

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
        <div class="row g-3 mx-auto items-center justify-center needs-validation size100">
            <label for="validationCustom03" class="form-label  text-center h3 fw-bold">{{__('MODULO COTIZACIÓN POR LOTES')}}</label>
        </div>
        <br>

        <form action="{{Route('cotizacionprenda_lote.store')}}" method="POST" onsubmit="return enviar()" name="registroCotizacion" class="row needs-validation" novalidate>
            @csrf
            <div class="accordion size50 mx-auto" id="accordionPanelsStayOpenExample">

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{__('PRENDA #1:')}}
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body  fondoformulario">


                            <!-- INICIO  -->

                            <div class="col-md-8  container">
                                <label for="nombre_prenda" class="form-label">NOMBRE DE PRENDA:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="nombre_prenda" class="form-control" id="nombre_prenda" value="" placeholder="Nombre de la prenda que desea regristrar" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="caracteristicas_prenda" class="form-label">CARACTERISTICAS:</label>
                                <textarea name="caracteristicas_prenda" class="form-control " id="caracteristicas_prenda" value="" placeholder="Ingrese las caracteristicas de la prenda" requiredrows="3"></textarea>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>


                            <div class="col-md-8 mt-7 container mt-3">
                                <label for="cantidad_prenda" class="form-label">DATOS DE LA MAQUINA:</label>
                                <input type="text" oninput="cal()" name="dato_1" class="monto form-control" id="dato_1" value="" placeholder="Ingrese el dato #1" required>
                                <input type="text" oninput="cal()" name="dato_2" class="monto form-control" id="dato_2" value="" placeholder="Ingrese el dato #2" required>
                                <input type="text" oninput="cal()" name="dato_3" class="monto form-control" id="dato_3" value="" placeholder="Ingrese el dato #3" required>
                                <input type="text" oninput="cal()" name="dato_4" class=" monto form-control" id="dato_4" value="" placeholder="Ingrese el dato #4" required>

                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="kilataje_prenda" class="form-label">PROMEDIO:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="promedio_prenda" class="form-control" id="promedio_prenda" value="" placeholder="Kilataje de la prenda" readonly>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="kilataje_prenda" class="form-label">KILATAJE:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="kilataje_prenda" class="form-control" id="kilataje_prenda" value="" placeholder="Kilataje de la prenda" readonly>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="cantidad_prenda" class="form-label">VALOR GENERICO:</label>
                                <input type="text" name="valor_oro_plata" onkeyUp="calcular();" class="form-control" id="valor_oro_plata" value="" placeholder="Valor del Oro / Plata" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="gramaje_prenda" class="form-label">GRAMAJE (PESO):</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="gramaje_prenda" onkeyUp="calcular();" class="form-control" id="gramaje_prenda" value="" placeholder="Peso de la prenda" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 container mt-3">
                                <label for="avaluo_prenda" class="form-label">PRECIO DE AVALUO:</label>
                                <input type="text" name="prestamo_ava" onkeyUp="calcular();" class="form-control" id="prestamo_ava" value="" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">PORCENTAJE DE PRESTAMO SOBRE AVALUO:</label>
                                <select name="prestamo_por" class="form-select" onchange="calcular();" aria-label="Default select example" id="prestamo_por">
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
                            <div class="col-md-8 container mt-3">
                                <label for="prestamo_prenda" class="form-label">PRESTAMO:</label>
                                <input type="text" name="prestamo_lote" class="form-control" id="prestamo_lote" onkeyUp="calculartotal();" value="" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- FIN -->


                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            PRENDA #2:
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body  fondoformulario">

                            <!-- INICIO  -->

                            <div class="col-md-8  container">
                                <label for="nombre_prenda_2" class="form-label">NOMBRE DE PRENDA:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="nombre_prenda_2" class="form-control" id="nombre_prenda_2" value="" placeholder="Nombre de la prenda que desea regristrar" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="caracteristicas_prenda_2" class="form-label">CARACTERISTICAS:</label>
                                <textarea name="caracteristicas_prenda_2" class="form-control " id="caracteristicas_prenda_2" value="" placeholder="Ingrese las caracteristicas de la prenda" requiredrows="3"></textarea>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-8 mt-7 container mt-3">
                                <label class="form-label">DATOS DE LA MAQUINA:</label>
                                <input type="text" oninput="cal()" name="dato_1_2" class="monto form-control" id="dato_1_2" value="" placeholder="Ingrese el dato #1" required>
                                <input type="text" oninput="cal()" name="dato_2_2" class="monto form-control" id="dato_2_2" value="" placeholder="Ingrese el dato #2" required>
                                <input type="text" oninput="cal()" name="dato_3_2" class="monto form-control" id="dato_3_2" value="" placeholder="Ingrese el dato #3" required>
                                <input type="text" oninput="cal()" name="dato_4_2" class=" monto form-control" id="dato_4_2" value="" placeholder="Ingrese el dato #4" required>

                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="kilataje_prenda_2" class="form-label">PROMEDIO:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="promedio_prenda_2" class="form-control" id="promedio_prenda_2" value="" placeholder="Kilataje de la prenda" readonly>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="kilataje_prenda_2" class="form-label">KILATAJE:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="kilataje_prenda_2" class="form-control" id="kilataje_prenda_2" value="" placeholder="Kilataje de la prenda" readonly>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="cantidad_prenda_2" class="form-label">VALOR GENERICO:</label>
                                <input type="text" name="valor_oro_plata_2" onkeyUp="calcular();" class="form-control" id="valor_oro_plata_2" value="" placeholder="Valor del Oro / Plata" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="gramaje_prenda" class="form-label">GRAMAJE (PESO):</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="gramaje_prenda_2" onkeyUp="calcular();" class="form-control" id="gramaje_prenda_2" value="" placeholder="Peso de la prenda" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 container mt-3">
                                <label for="avaluo_prenda" class="form-label">PRECIO DE AVALUO:</label>
                                <input type="text" name="avaluo_prenda_2" onkeyUp="calcular();" class="form-control" id="avaluo_prenda_2" value="" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">PORCENTAJE DE PRESTAMO SOBRE AVALUO:</label>
                                <select name="porcentaje_prestamo_sobre_avaluo_2" class="form-select" onchange="calcular();" aria-label="Default select example" id="porcentaje_prestamo_sobre_avaluo_2">
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
                            <div class="col-md-8 container mt-3">
                                <label for="prestamo_prenda" class="form-label">PRESTAMO:</label>
                                <input type="text" name="prestamo_prenda_2" class="form-control" id="prestamo_prenda_2" value="" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- FIN -->


                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            PRENDA #3:
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body fondoformulario">
                            <!-- INICIO  -->

                            <div class="col-md-8  container">
                                <label for="nombre_prenda" class="form-label">NOMBRE DE PRENDA:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="nombre_prenda_3" class="form-control" id="nombre_prenda_3" value="" placeholder="Nombre de la prenda que desea regristrar" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="caracteristicas_prenda" class="form-label">CARACTERISTICAS:</label>
                                <textarea name="caracteristicas_prenda_3" class="form-control " id="caracteristicas_prenda_3" value="" placeholder="Ingrese las caracteristicas de la prenda" requiredrows="3"></textarea>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-8 mt-7 container mt-3">
                                <label for="cantidad_prenda" class="form-label">DATOS DE LA MAQUINA:</label>
                                <input type="text" oninput="cal()" name="dato_1_3" class="monto form-control" id="dato_1_3" value="" placeholder="Ingrese el dato #1" required>
                                <input type="text" oninput="cal()" name="dato_2_3" class="monto form-control" id="dato_2_3" value="" placeholder="Ingrese el dato #2" required>
                                <input type="text" oninput="cal()" name="dato_3_3" class="monto form-control" id="dato_3_3" value="" placeholder="Ingrese el dato #3" required>
                                <input type="text" oninput="cal()" name="dato_4_3" class=" monto form-control" id="dato_4_3" value="" placeholder="Ingrese el dato #4" required>

                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="kilataje_prenda" class="form-label">PROMEDIO:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="promedio_prenda_3" class="form-control" id="promedio_prenda_3" value="" placeholder="Kilataje de la prenda" readonly>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="kilataje_prenda" class="form-label">KILATAJE:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="kilataje_prenda_3" class="form-control" id="kilataje_prenda_3" value="" placeholder="Kilataje de la prenda" readonly>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="cantidad_prenda" class="form-label">VALOR GENERICO:</label>
                                <input type="text" name="valor_oro_plata_3" onkeyUp="calcular();" class="form-control" id="valor_oro_plata_3" value="" placeholder="Valor del Oro / Plata" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="gramaje_prenda" class="form-label">GRAMAJE (PESO):</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="gramaje_prenda_3" onkeyUp="calcular();" class="form-control" id="gramaje_prenda_3" value="" placeholder="Peso de la prenda" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 container mt-3">
                                <label for="avaluo_prenda" class="form-label">PRECIO DE AVALUO:</label>
                                <input type="text" name="avaluo_prenda_3" onkeyUp="calcular();" class="form-control" id="avaluo_prenda_3" value="" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">PORCENTAJE DE PRESTAMO SOBRE AVALUO:</label>
                                <select name="porcentaje_prestamo_sobre_avaluo_3" class="form-select" onchange="calcular();" aria-label="Default select example" id="porcentaje_prestamo_sobre_avaluo_3">
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
                            <div class="col-md-8 container mt-3">
                                <label for="prestamo_prenda" class="form-label">PRESTAMO:</label>
                                <input type="text" name="prestamo_prenda_3" class="form-control" id="prestamo_prenda_3" value="" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- FIN -->
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            PRENDA #4:
                        </button>
                    </h2>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                        <div class="accordion-body fondoformulario">
                            <!-- INICIO  -->

                            <div class="col-md-8  container">
                                <label for="nombre_prenda" class="form-label">NOMBRE DE PRENDA:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="nombre_prenda_4" class="form-control" id="nombre_prenda_4" value="" placeholder="Nombre de la prenda que desea regristrar" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="caracteristicas_prenda" class="form-label">CARACTERISTICAS:</label>
                                <textarea name="caracteristicas_prenda_4" class="form-control " id="caracteristicas_prenda_4" value="" placeholder="Ingrese las caracteristicas de la prenda" requiredrows="3"></textarea>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-8 mt-7 container mt-3">
                                <label for="cantidad_prenda" class="form-label">DATOS DE LA MAQUINA:</label>
                                <input type="text" oninput="cal()" name="dato_1_4" class="monto form-control" id="dato_1_4" value="" placeholder="Ingrese el dato #1" required>
                                <input type="text" oninput="cal()" name="dato_2_4" class="monto form-control" id="dato_2_4" value="" placeholder="Ingrese el dato #2" required>
                                <input type="text" oninput="cal()" name="dato_3_4" class="monto form-control" id="dato_3_4" value="" placeholder="Ingrese el dato #3" required>
                                <input type="text" oninput="cal()" name="dato_4_4" class=" monto form-control" id="dato_4_4" value="" placeholder="Ingrese el dato #4" required>

                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="kilataje_prenda" class="form-label">PROMEDIO:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="promedio_prenda_4" class="form-control" id="promedio_prenda_4" value="" placeholder="Kilataje de la prenda" readonly>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="kilataje_prenda" class="form-label">KILATAJE:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="kilataje_prenda_4" class="form-control" id="kilataje_prenda_4" value="" placeholder="Kilataje de la prenda" readonly>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="cantidad_prenda" class="form-label">VALOR GENERICO:</label>
                                <input type="text" name="valor_oro_plata_4" onkeyUp="calcular();" class="form-control" id="valor_oro_plata_4" value="" placeholder="Valor del Oro / Plata" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="gramaje_prenda" class="form-label">GRAMAJE (PESO):</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="gramaje_prenda_4" onkeyUp="calcular();" class="form-control" id="gramaje_prenda_4" value="" placeholder="Peso de la prenda" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 container mt-3">
                                <label for="avaluo_prenda" class="form-label">PRECIO DE AVALUO:</label>
                                <input type="text" name="avaluo_prenda_4" onkeyUp="calcular();" class="form-control" id="avaluo_prenda_4" value="" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">PORCENTAJE DE PRESTAMO SOBRE AVALUO:</label>
                                <select name="porcentaje_prestamo_sobre_avaluo_4" class="form-select" onchange="calcular();" aria-label="Default select example" id="porcentaje_prestamo_sobre_avaluo_4">
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
                            <div class="col-md-8 container mt-3">
                                <label for="prestamo_prenda" class="form-label">PRESTAMO:</label>
                                <input type="text" name="prestamo_prenda_4" class="form-control" id="prestamo_prenda_4" value="" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- FIN -->
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            PRENDA #5:
                        </button>
                    </h2>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                        <div class="accordion-body  fondoformulario">
                            <!-- INICIO  -->

                            <div class="col-md-8  container">
                                <label for="nombre_prenda" class="form-label">NOMBRE DE PRENDA:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="nombre_prenda_5" class="form-control" id="nombre_prenda_5" value="" placeholder="Nombre de la prenda que desea regristrar" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="caracteristicas_prenda" class="form-label">CARACTERISTICAS:</label>
                                <textarea name="caracteristicas_prenda_5" class="form-control " id="caracteristicas_prenda_5" value="" placeholder="Ingrese las caracteristicas de la prenda" requiredrows="3"></textarea>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-8 mt-7 container mt-3">
                                <label for="cantidad_prenda" class="form-label">DATOS DE LA MAQUINA:</label>
                                <input type="text" oninput="cal()" name="dato_1_5" class="monto form-control" id="dato_1_5" value="" placeholder="Ingrese el dato #1" required>
                                <input type="text" oninput="cal()" name="dato_2_5" class="monto form-control" id="dato_2_5" value="" placeholder="Ingrese el dato #2" required>
                                <input type="text" oninput="cal()" name="dato_3_5" class="monto form-control" id="dato_3_5" value="" placeholder="Ingrese el dato #3" required>
                                <input type="text" oninput="cal()" name="dato_4_5" class=" monto form-control" id="dato_4_5" value="" placeholder="Ingrese el dato #4" required>

                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="kilataje_prenda" class="form-label">PROMEDIO:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="promedio_prenda_5" class="form-control" id="promedio_prenda_5" value="" placeholder="Kilataje de la prenda" readonly>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="kilataje_prenda" class="form-label">KILATAJE:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="kilataje_prenda_5" class="form-control" id="kilataje_prenda_5" value="" placeholder="Kilataje de la prenda" readonly>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="cantidad_prenda" class="form-label">VALOR GENERICO:</label>
                                <input type="text" name="valor_oro_plata_5" onkeyUp="calcular();" class="form-control" id="valor_oro_plata_5" value="" placeholder="Valor del Oro / Plata" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="gramaje_prenda" class="form-label">GRAMAJE (PESO):</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="gramaje_prenda_5" onkeyUp="calcular();" class="form-control" id="gramaje_prenda_5" value="" placeholder="Peso de la prenda" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 container mt-3">
                                <label for="avaluo_prenda" class="form-label">PRECIO DE AVALUO:</label>
                                <input type="text" name="avaluo_prenda_5" onkeyUp="calcular();" class="form-control" id="avaluo_prenda_5" value="" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">PORCENTAJE DE PRESTAMO SOBRE AVALUO:</label>
                                <select name="porcentaje_prestamo_sobre_avaluo_5" class="form-select" onchange="calcular();" aria-label="Default select example" id="porcentaje_prestamo_sobre_avaluo_5">
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
                            <div class="col-md-8 container mt-3">
                                <label for="prestamo_prenda" class="form-label">PRESTAMO:</label>
                                <input type="text" name="prestamo_prenda_5" class="form-control" id="prestamo_prenda_5" value="" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- FIN -->
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingsix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                            PRENDA #6:
                        </button>
                    </h2>
                    <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                        <div class="accordion-body fondoformulario">
                            <!-- INICIO  -->

                            <div class="col-md-8  container">
                                <label for="nombre_prenda" class="form-label">NOMBRE DE PRENDA:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="nombre_prenda_6" class="form-control" id="nombre_prenda_6" value="" placeholder="Nombre de la prenda que desea regristrar" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="caracteristicas_prenda" class="form-label">CARACTERISTICAS:</label>
                                <textarea name="caracteristicas_prenda_6" class="form-control " id="caracteristicas_prenda_6" value="" placeholder="Ingrese las caracteristicas de la prenda" requiredrows="3"></textarea>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <div class="col-md-8 mt-7 container mt-3">
                                <label for="cantidad_prenda" class="form-label">DATOS DE LA MAQUINA:</label>
                                <input type="text" oninput="cal()" name="dato_1_6" class="monto form-control" id="dato_1_6" value="" placeholder="Ingrese el dato #1" required>
                                <input type="text" oninput="cal()" name="dato_2_6" class="monto form-control" id="dato_2_6" value="" placeholder="Ingrese el dato #2" required>
                                <input type="text" oninput="cal()" name="dato_3_6" class="monto form-control" id="dato_3_6" value="" placeholder="Ingrese el dato #3" required>
                                <input type="text" oninput="cal()" name="dato_4_6" class=" monto form-control" id="dato_4_6" value="" placeholder="Ingrese el dato #4" required>

                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="kilataje_prenda" class="form-label">PROMEDIO:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="promedio_prenda_6" class="form-control" id="promedio_prenda_6" value="" placeholder="Kilataje de la prenda" readonly>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="kilataje_prenda" class="form-label">KILATAJE:</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="kilataje_prenda_6" class="form-control" id="kilataje_prenda_6" value="" placeholder="Kilataje de la prenda" readonly>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="cantidad_prenda" class="form-label">VALOR GENERICO:</label>
                                <input type="text" name="valor_oro_plata_6" onkeyUp="calcular();" class="form-control" id="valor_oro_plata_6" value="" placeholder="Valor del Oro / Plata" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">
                                <label for="gramaje_prenda" class="form-label">GRAMAJE (PESO):</label>
                                <div class="input-group has-validation">
                                    <input type="text" name="gramaje_prenda_6" onkeyUp="calcular();" class="form-control" id="gramaje_prenda_6" value="" placeholder="Peso de la prenda" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-8 container mt-3">
                                <label for="avaluo_prenda" class="form-label">PRECIO DE AVALUO:</label>
                                <input type="text" name="avaluo_prenda_6" onkeyUp="calcular();" class="form-control" id="avaluo_prenda_6" value="" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-8 container mt-3">PORCENTAJE DE PRESTAMO SOBRE AVALUO:</label>
                                <select name="porcentaje_prestamo_sobre_avaluo_6" class="form-select" onchange="calcular();" aria-label="Default select example" id="porcentaje_prestamo_sobre_avaluo_6">
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
                            <div class="col-md-8 container mt-3">
                                <label for="prestamo_prenda" class="form-label">PRESTAMO:</label>
                                <input type="text" name="prestamo_prenda_6" class="form-control" id="prestamo_prenda_6" value="" readonly>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- FIN -->
                        </div>
                    </div>
                </div>
                <br>
                <div class="fondoformulario">
                    <div class="col-md-8 container mt-3">
                        <label for="validationCustomUsername" class="form-label">DESCRIPCIÓN GENERICA DEL LOTE:</label>
                        <select class="form-select" aria-label="Default select example" name="descripcion_generica" id="descripcion_generica">
                            <option selected value="" class="text-center">DESCRIPCIÓN GENERICA DEL LOTE</option>
                            <option value="ORO">ORO</option>
                            <option value="PLATA" disabled>PLATA</option>
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-8 container mt-3">
                        <label for="cantidad_prenda" class="form-label">CANTIDAD DE PRENDAS:</label>
                        <input type="text" name="cantidad_prenda" class="form-control" id="cantidad_prenda" value="" placeholder="Ingrese las unidades cotizadas" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-8 container mt-3">
                        <label for="Prestamo_lote" class="form-label">AVALUO TOTAL:</label>
                        <input type="text" name="avaluo_prenda" class="form-control" id="avaluo_prenda" onkeyUp="calcularpor();" value="" readonly>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-8 container mt-3">
                        <label for="Prestamo_lote" class="form-label">PORCETAJE DE AVALUO:</label>
                        <input type="text" name="porcentaje_prestamo_sobre_avaluo" class="form-control" id="porcentaje_prestamo_sobre_avaluo" value="" readonly>
                        <input type="hidden" name="lote" class="form-control" id="lote" value="1" readonly>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-8 container mt-3">
                        <label for="Prestamo_lote" class="form-label">PRESTAMO TOTAL:</label>
                        <input type="text" name="prestamo_prenda" class="form-control" id="prestamo_prenda" onkeyUp="calcularpor();" value="" readonly>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>




                    <div class=" mb-8 max-w-6xl mx-auto flex items-center justify-center mt-4">
                        <button class="size50 bordes btn btn-primary navbar1 fw-bold">DAR DE ALTA</button>
                    </div>
                </div>
            </div>
        </form>
        <br>
</body>

<script src="{{ asset('dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('dist/js/cotizacion_lote.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script>
   // /MENSAJE DE ALERTA BOTTON


function enviar() {
event.preventDefault();

Swal.fire({
title: '¿DESEA REGISTRAR COTIZACIÓN?',
text: "Esta seguro que desea realizar esta operación!",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'SI, DESEO REGISTRAR LA COTIZACIÓN!',
cancelButtonText: "No"
}).then((result) => {
if (result.value) {
document.registroCotizacion.submit();
/* Swal.fire(
'Deleted!',
'Your file has been deleted.',
'success'
)
*/
}
})
}
</script>

</html>