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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css">

    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        textarea {
            width: 150px;
            height: 120px;
        }

        .input2 {
            background-color: #e9ecef;

        }

        .tamañoletra {
            font-size: 30px;
            font-weight: bold;

        }

        .letracambio {
            font-size: 30px;
            font-weight: bold;
            color: red;
        }

        .tabla {
            display: flex;
            flex-wrap: wrap;

        }

        .tabla1 {
            width: 500px;
            height: 690px;
            padding: 30px;
            background-color: #eaeaea;
        }

        .tabla2 {
            border-left: 2px solid black;
            width: 600px;
            height: 690px;
            padding: 30px;
            background-color: #f2f2f1;

        }

        .letrapago {
            font-size: 30px;
            font-weight: bold;
        }

        .letranom {
            font-size: 20px;
        }

        .btnpago {
            background-color: green;
        }

        .btnpago:hover {
            background-color: blue;
        }

        .btn-secondary:hover {
            background-color: red;
        }

        .caja {
            margin: 30px;
        }

        .caja2 {
            padding: 0;
            margin: 20px;
        }

        .letra1 {
            font-size: 22px;
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
                <div class="mx-auto ml-2 titulo neritas texto-grande size"> CASA DE EMPEÑOS <br> ASOCIACION NUEVA MUTUA S.A. DE C.V.</a></div>

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




            <!-- <div class="row g-3 needs-validation size80 items-center justify-center"> -->

            {{ csrf_field() }}


            <div class="text-center mt-8">
                <label for="validationCustom03" class="form-label h4    ">DATOS DE LA PRENDA A DESEMPEÑAR</label>
            </div>


            <div class="tabla justify-content-center mt-4">
                <div class="tabla1 ">
                    <div class="d-flex row justify-content-around">
                        <div class="col-md-5">
                            <label class="letra1"><strong>FOLIO:&nbsp;&nbsp;</strong>{{$dato_prenda->id_prendas}}</label>
                        </div>
                        <div class="col-md-5">
                            <label class="letra1"><strong>SOCIO:</strong>@if($dato_prenda->cliente->socio==0.020)
                                SI
                                @ENDIF
                                @if($dato_prenda->cliente->socio==0.025)
                                NO
                                @ENDIF

                            </label>
                        </div>
                    </div>
                    <div class="mt-2">&nbsp;</div>
                    <div class="col-md-11 mt-8 letra1"> 
                        <label ><strong> CLIENTE: &nbsp;&nbsp;</strong>{{$dato_prenda->cliente->nombre_cliente.' '.$dato_prenda->cliente->apellido_cliente}} </label>
                        <label class="mt-3"><strong>NOMBRE DE LA PRENDA:&nbsp;&nbsp;</strong>{{$dato_prenda->nombre_prenda}}</label>
                        <label class="mt-3"><strong>DESCRIPCION GENERICA:&nbsp;&nbsp;</strong>@if($dato_prenda->descripcion_generica == 1)
                            ORO
                            @endif
                            @if($dato_prenda->descripcion_generica == 2)
                            PLATA
                            @endif
                        </label>
                        <label class="mt-3"><strong>CANTIDAD DE PRENDAS:&nbsp;&nbsp;</strong>{{$dato_prenda->cantidad_prenda}}</label>
                        <label class="mt-3"><strong>CARACTERISTICAS:&nbsp;&nbsp;</strong>{{$dato_prenda->caracteristicas_prenda.'.'.' '.'DETALLES ESPECIFICOS:'.' KILATAJE:'.''.' '.$dato_prenda->kilataje_prenda.'k'.','.' '.'GRAMAJE:'.''.' '.$dato_prenda->gramaje_prenda.'gr'}}</label>
                    </div>

                </div>



                <div class="tabla2">
                    <div class="col-md-12">
                        <label for="avaluo_prenda" class="form-label negritas">AVALUO:</label>
                        <input type="text" name="avaluo_prenda" class="form-control text-center letranom" id="avaluo_prenda" value="{{$dato_prenda->avaluo_prenda}}" readonly>
                    </div>
                    <div class="col-md-12 mt-4"><label class=" negritas">PORCENTAJE AVALUO:</label>
                        <select class="form-select mt-2 text-center letranom" aria-label="Default select example" disabled>

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == -1)
                            <option selected value="-1">SELECCIONA</option>
                            @else
                            <option value="-1">SELECCIONA</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 45)
                            <option selected value="45">45</option>
                            @else
                            <option value="45">45 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 50)
                            <option selected value="50">50 %</option>
                            @else
                            <option value="50">50 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 55)
                            <option selected value="55">55 %</option>
                            @else
                            <option value="55">55 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 60)
                            <option selected value="60">60 %</option>
                            @else
                            <option value="60">60 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 65)
                            <option selected value="65">65%</option>
                            @else
                            <option value="65">65 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 70)
                            <option selected value="70">70 %</option>
                            @else
                            <option value="70">70 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 75)
                            <option selected value="75">75 %</option>
                            @else
                            <option value="75">75 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 80)
                            <option selected value="80">80 %</option>
                            @else
                            <option value="80">80 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 85)
                            <option selected value="85">85 %</option>
                            @else
                            <option value="85">85 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 90)
                            <option selected value="90">90 %</option>
                            @else
                            <option value="90">90 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 95)
                            <option selected value="95">95 %</option>
                            @else
                            <option value="95">95 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 100)
                            <option selected value="100">100 %</option>
                            @else
                            <option value="100">100 %</option>
                            @endif
                        </select>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="prestamo_prenda" class="form-label negritas">PRESTAMO:</label>
                        <input type="text" class="form-control text-center letrapago" name="prestamo_prenda" id="prestamo_prenda" value="{{$dato_prenda->prestamo_prenda}}" placeholder="00.00" readonly>
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="" class="negritas">PAGO RECIBIDO:</label>
                        <input type="number" id="cantidad_pago1" name="cantidad_pago1" class="form-control input_style tamañoletra text-center" placeholder="$ 0.00" onkeypress="return filterFloatdecimal2(event,this);" autocomplete="off">
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="" class="negritas">CAMBIO ENTREGADO:</label>
                        <input type="text" id="cambio_boleta1" name="cambio_boleta1" class="form-control input_style letracambio text-center" readonly placeholder="$ 0.00">
                    </div>
                    <div class=" mb-8 max-w-6xl mx-auto flex items-center justify-center mt-5">
                        <button class="size60 bordes btn btn-primary navbar1 modal55" type="submit" id="btn-submit" data-toggle="modal" data-target="#exampleModal{{$dato_prenda->id_prendas}}" data-item-prestamo="cantidad_pago">PAGAR</button>
                    </div>
                    @include('admin.Modals.modaldesempeño')
                </div>
            </div>

</body>

<div class="mt-8">

</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="{{asset('dist/js/bootstrap.js')}}"></script>
<script src="{{asset('dist/js/jquery.min.js')}}"></script>
<script src="{{asset('dist/js/desempeño.js')}}"></script>


</html>