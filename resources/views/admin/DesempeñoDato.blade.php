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
            width: 600px;
            height: 645px;
            padding: 30px;
            background-color: #eaeaea;
        }

        .tabla2 {
            border-left: 2px solid black;
            width: 400px;
            height: 645px;
            padding: 30px;
            background-color: #f2f2f1;

        }
        .letrapago{
            font-size: 30px;
            font-weight: bold;
        }
        .letranom{
            font-size: 20px;
        }
        .btnpago{
            background-color:green;
        }
        .btnpago:hover{
            background-color: red;
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


            <div class="tabla justify-content-center mt-5">
                <div class="tabla1">
                    <div class="col-md-2">
                        <label for="nombre_prenda" class="form-label negritas">FOLIO: </label>
                        <input type="text" name="id_prendas" class="form-control text-center letranom" id="id_prenda" value="{{$dato_prenda->id_prendas}}" readonly>
                    </div>
                    <div class="col-md-9 mt-4">
                        <label for="nombre_prenda" class="form-label "> CLIENTE: </label>
                        <input type="text" name="nombre_cliente" class="form-control letranom" id="nombre_cliente" value="{{$dato_prenda->id_cliente.' - '.$dato_prenda->cliente->nombre_cliente.' '.$dato_prenda->cliente->apellido_cliente}}" readonly>
                    </div>
                    <div class="col-md-9 mt-4">
                        <label for="nombre_prenda" class="form-label negritas"> NOMBRE DE LA PRENDA: </label>
                        <input type="text" name="nombre_prenda" class="form-control letranom" id="nombre_prenda" value="{{$dato_prenda->nombre_prenda}}" readonly>
                    </div>
                    <div class="col-md-9 mt-4 negritas">DESCRIPCION GENERICA:</label>
                        <select class="form-select mt-2 text-center input2 letranom" name="descripcion_generica" id="descripcion_generica" aria-label="Default select example">
                            @if($dato_prenda->descripcion_generica == 1)
                            <option value="1" selected>ORO</option>
                            @else
                            <option value="1">ORO</option>
                            @endif
                            @if($dato_prenda->descripcion_generica == 2)
                            <option value="2" selected>PLATA</option>
                            @else
                            <option value="2">PLATA</option>
                            @endif
                        </select>
                    </div>
                    <div class="col-md-9 mt-4">
                        <label for="caracteristicas_prenda" class="form-label negritas  ">CARACTERISTICAS:</label>
                        <textarea name="caracteristicas_prenda" class="form-control" id="caracteristicas_prenda" value="" requiredrows="3" readonly>{{$dato_prenda->caracteristicas_prenda.'.'.' '.'DETALLES ESPECIFICOS:'.' KILATAJE:'.''.' '.$dato_prenda->kilataje_prenda.'k'.','.' '.'GRAMAJE:'.''.' '.$dato_prenda->gramaje_prenda.'gr'}}</textarea>
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
                        <label for="" class="negritas">CANTIDAD PAGADA:</label>
                        <input type="number" id="cantidad_pago1" name="cantidad_pago1" class="form-control input_style tamañoletra text-center" placeholder="$ 0.00" onkeypress="return filterFloatdecimal2(event,this);" autocomplete="off">
                    </div>
                    <div class="col-md-12 mt-4">
                        <label for="" class="negritas">CAMBIO:</label>
                        <input type="text" id="cambio_boleta1" name="cambio_boleta1" class="form-control input_style letracambio text-center" readonly placeholder="$ 0.00">
                    </div>
                    <div class=" mb-8 max-w-6xl mx-auto flex items-center justify-center mt-5">
                        <button class="size60 bordes btn btn-primary navbar1 modal55" type="submit" id="btn-submit" data-toggle="modal" data-target="#exampleModal{{$dato_prenda->id_prendas}}" data-item-prestamo="cantidad_pago">PAGAR</button>
                    </div>
                    @include('admin.Modals.modaldesempeño')
                </div>
            </div>



            <!-- -------------------------------------------------------------------------------------------->
     



        <!-- Modal -->
        <!-- 
    <form action="{{Route('prenda1.update',$dato_prenda->id_prendas)}}" method="POST">
                    <div class="modal fade mb-8" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">VERIFICAR PAGO:</h5>
                                    <button type="button" data-toggle="modal" data-target="#EjemploModal" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                      <div class="modal-body">
                                        <table class="table">
                                            <thead class="letra-blanca bg-dark">
                                                <tr>
                                                    <th scope="col">FOLIO</th>
                                                    <th scope="col">NOMBRE</th>
                                                    <th scope="col">PRESTAMO</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <th class="text-center"></th>
                                                    <td></td>
                                                    <td class="text-center"></td>
                                                </tr>


                                            </tbody>
                                        </table>

                                        <div class="mt-8 col-md-8">
                                            <label for="validationCustom02" class="form-label ">CANTIDAD PAGADA:</label>
                                            <input type="text" class="form-control" value="" id="foro_id" >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mt-3 col-md-8">
                                            <label for="validationCustom02" class="form-label">CAMBIO:</label>
                                            <input type="text" class="form-control"value="" disabled>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="mt-8">

                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" >CONTINUAR</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </form>  -->
        <!------  FIN MODAL -->


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