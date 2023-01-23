<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CASA DE EMPEÑOS</title>
    <link rel="icon" type="image/png" href="/favicon.png" />



    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/Refrendodato.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css">
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
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
                <div class="mx-auto ml-2 titulo neritas texto-grande size"> CASA DE EMPEÑOS <br> ASOCIADOS NUEVA MUTUA DE UMÁN S.A. DE C.V.</a></div>

            </div>
            <!-- MENU -->
            @include('layout.nav')

            @can('pago-refrendo')
        </div>


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        {{ csrf_field() }}


        <div class="text-center mt-8">
            <label for="validationCustom03" class="form-label h4    ">DATOS DE LA PRENDA A REFRENDAR</label>
        </div>



        <div class="align">
            <div class="tabla1 ">


                <div class=" table-responsive">

                
                    <label for=""><strong>TABLA DE PAGOS:</strong></label>
                    <table class="table table-sm mt-3">
                        <tr>

                            <th rowspan="2">
                                <br>
                                NUMERO
                            </th>

                            <th colspan="4">MONTO</th>

                            <th colspan="2">TOTAL A PAGAR</th>

                            <th rowspan="2">CUANDO SE REALIZAN LOS PAGOS</th>

                        </tr>

                        <tr>

                            <th>IMPORTE DE MUTUO</th>

                            <th>&nbsp;INTERESES&nbsp;</th>

                            <th>&nbsp;ALMACENAJE&nbsp;</th>

                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IVA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

                            <th style="background-color: yellow;">POR REFRENDO</th>

                            <th>POR DESEMPEÑO</th>

                        </tr>

                        <tr>

                            <th>1° Mes</th>

                            <td>{{toMoney($dato_prenda->prestamo_prenda)}}</td>

                            <td>{{toMoney($dato_prenda->interes)}}</td>

                            <td>{{toMoney($dato_prenda->almacenaje)}}</td>

                            <td>{{toMoney($dato_prenda->iva)}}</td>

                            <td style="background-color: yellow;" class="fw-bold">{{toMoney($dato_prenda->refrendo)}}</td>

                            <td>{{toMoney($dato_prenda->desempeño)}}</td>

                            <td>
                                {{\Carbon\Carbon::parse($dato_prenda->mes1)->formatLocalized('%d-%B-%Y')}}
                            </td>

                        </tr>
                        <tr>
                            <th>2° Mes</th>

                            <td>
                                {{toMoney($dato_prenda->prestamo_prenda)}}
                            </td>
                            <td>
                                {{toMoney($dato_prenda->interes2)}}
                            </td>
                            <td>
                                {{toMoney($dato_prenda->almacenaje2)}}
                            </td>
                            <td>
                                {{toMoney($dato_prenda->iva2)}}
                            </td>
                            <td style="background-color: yellow;" class="fw-bold">
                                {{toMoney($dato_prenda->refrendo2)}}
                            </td>
                            <td>
                                {{toMoney($dato_prenda->desempeño2)}}
                            </td>
                            <td>
                                {{\Carbon\Carbon::parse($dato_prenda->mes2)->formatLocalized('%d-%B-%Y')}}
                            </td>
                        </tr>
                        <tr>
                            <th>3° Mes</th>

                            <td>
                                {{toMoney($dato_prenda->prestamo_prenda)}}
                            </td>
                            <td>
                                {{toMoney($dato_prenda->interes3)}}
                            </td>
                            <td>
                                {{toMoney($dato_prenda->almacenaje3)}}
                            </td>
                            <td>
                                {{toMoney($dato_prenda->iva3)}}
                            </td>
                            <td style="background-color: yellow;" class="fw-bold">
                                {{toMoney($dato_prenda->refrendo3)}}
                            </td>
                            <td>
                                {{toMoney($dato_prenda->desempeño3)}}
                            </td>
                            <td>
                                {{\Carbon\Carbon::parse($dato_prenda->mes3)->formatLocalized('%d-%B-%Y')}}
                            </td>
                        </tr>
                        <tr>
                            <th>4° Mes</th>

                            <td>
                                {{toMoney($dato_prenda->prestamo_prenda)}}
                            </td>
                            <td>
                                {{toMoney($dato_prenda->interes4)}}
                            </td>
                            <td>
                                {{toMoney($dato_prenda->almacenaje4)}}
                            </td>
                            <td>
                                {{toMoney($dato_prenda->iva4)}}
                            </td>
                            <td style="background-color: yellow;" class="fw-bold">
                                {{toMoney($dato_prenda->refrendo4)}}
                            </td>
                            <td>
                                {{toMoney($dato_prenda->desempeño4)}}
                            </td>
                            <td>
                                {{\Carbon\Carbon::parse($dato_prenda->mes4)->formatLocalized('%d-%B-%Y')}}
                            </td>
                        </tr>
                        <tr>
                            <th>5° Mes</th>

                            <td>
                                {{toMoney($dato_prenda->prestamo_prenda)}}
                            </td>
                            <td>
                                {{toMoney($dato_prenda->interes5)}}
                            </td>
                            <td>
                                {{toMoney($dato_prenda->almacenaje5)}}
                            </td>
                            <td>
                                {{toMoney($dato_prenda->iva5)}}
                            </td>
                            <td style="background-color: yellow;" class="fw-bold">
                                {{toMoney($dato_prenda->refrendo5)}}
                            </td>
                            <td>
                                {{toMoney($dato_prenda->desempeño5)}}
                            </td>
                            <td>
                                {{\Carbon\Carbon::parse($dato_prenda->mes5)->formatLocalized('%d-%B-%Y')}}
                            </td>
                        </tr>
                    </table>
                </div>


                <div class="text-center mt-4">
                    <label for="">---------------------------------- <strong>DATOS DEL CLIENTE/PRENDA</strong> -----------------------------------</label>
                </div>
                <div class="d-flex row mt-4 justify-content-around">
                    <div class="col-md-5">
                        <label class="letra1"><strong>FOLIO:&nbsp;&nbsp;</strong>{{ $dato_prenda->id_prendas }}</label>
                    </div>
                    <div class="col-md-5">
                        <label class="letra1"><strong>SOCIO:</strong>
                            @if ($dato_prenda->cliente->socio == 0.02)
                            SI
                            @ENDIF
                            @if ($dato_prenda->cliente->socio == 0.025)
                            NO
                            @ENDIF
                        </label>
                    </div>
                </div>
                <div class="col-md-11 mt-3 letra1">
                    <label><strong> CLIENTE:
                            &nbsp;&nbsp;</strong>{{ $dato_prenda->cliente->nombre_cliente . ' ' . $dato_prenda->cliente->apellido_cliente }}
                    </label> <br>
                    <label class="mt-1"><strong>NOMBRE DE LA
                            PRENDA:&nbsp;&nbsp;</strong>{{ $dato_prenda->nombre_prenda }}</label><br>
                    <label class="mt-1"><strong>DESCRIPCIÓN GENERICA:&nbsp;&nbsp;</strong>
                        {{$dato_prenda->descripcion_generica}}
                    </label>
                    <br>
                    <label class="mt-1"><strong>CANTIDAD DE PRENDAS:&nbsp;&nbsp;</strong>{{ $dato_prenda->cantidad_prenda }}</label>
                    <label class="mt-1"><strong>CARACTERÍSTICAS:&nbsp;&nbsp;</strong>@if ($dato_prenda->status ==1){{$dato_prenda->caracteristicas_prenda}}@else{{ $dato_prenda->caracteristicas_prenda . '.' . ' ' . 'DETALLES ESPECIFICOS:' . ' KILATAJE:' . '' . ' ' . $dato_prenda->kilataje_prenda . 'k' . ',' . ' ' . 'GRAMAJE:' . '' . ' ' . $dato_prenda->gramaje_prenda . 'gr' }}@endif</label> <br>
                    <label class="mt-1"><strong>CANTIDAD DE REFRENDOS REALIZADOS:&nbsp;&nbsp;</strong>#{{ $dato_prenda->numeros_refrendos}}</label> <br>
                    <label class="mt-1"><strong>-   ULTIMO PAGO REALIZADO (REFRENDO):&nbsp;&nbsp;</strong>{{toMoney($dato_prenda->refrendo_anterior)}}</label> <br>
                    <label class="mt-1"><strong>CANTIDAD DE ABONOS A CAPITAL REALIZADOS:&nbsp;&nbsp;</strong>#{{ $dato_prenda->numeros_capital}}</label> <br>
                    <label class="mt-1"><strong>- ULTIMO PAGO REALIZADO (CAPITAL):&nbsp;&nbsp;</strong>{{toMoney($dato_prenda->total_capi)}}</label> <br>
                    <label class="mt-1"><strong>PRÉSTAMO INICIAL:&nbsp;&nbsp;</strong>{{toMoney($dato_prenda->prestamo_inicial)}}</label>
                </div>


            </div>
            <div class="tabla2">
                <div class="col-md-12 mt-3"><strong>SELECCIONE EL MES A REFRENDAR:</strong></label>
                    <select class="form-select text-center mt-2" id="interesrefre" name="interesrefre" onchange="calcular();" onchange="calcular2();" onchange="calcular66();" aria-label="Default select example">

                        <option selected value="">MES A REFRENDAR</option>
                        <option value="{{ $dato_prenda->refrendo }}" data-prestamo="{{$dato_prenda->prestamo_prenda}}" data-interes="{{$dato_prenda->interes}}" data-almacenaje="{{$dato_prenda->almacenaje}}" data-iva="{{$dato_prenda->iva}}" data-mes="{{$dato_prenda->mes2}}" data-refrendo_r="{{$dato_prenda->refrendo}}">1° Mes / {{\Carbon\Carbon::parse($dato_prenda->mes1)->formatLocalized('%d-%B-%Y')}}</option>
                        <option value="{{ $dato_prenda->refrendo2 }}" data-prestamo="{{$dato_prenda->prestamo_prenda}}" data-interes="{{$dato_prenda->interes2}}" data-almacenaje="{{$dato_prenda->almacenaje2}}" data-iva="{{$dato_prenda->iva2}}" data-mes="{{$dato_prenda->mes3}}" data-refrendo_r="{{$dato_prenda->refrendo}}">2° Mes / {{\Carbon\Carbon::parse($dato_prenda->mes2)->formatLocalized('%d-%B-%Y')}}</option>
                        <option value="{{ $dato_prenda->refrendo3 }}" data-prestamo="{{$dato_prenda->prestamo_prenda}}" data-interes="{{$dato_prenda->interes3}}" data-almacenaje="{{$dato_prenda->almacenaje3}}" data-iva="{{$dato_prenda->iva3}}" data-mes="{{$dato_prenda->mes4}}" data-refrendo_r="{{$dato_prenda->refrendo}}">3° Mes / {{\Carbon\Carbon::parse($dato_prenda->mes3)->formatLocalized('%d-%B-%Y')}}</option>
                        <option value="{{ $dato_prenda->refrendo4 }}" data-prestamo="{{$dato_prenda->prestamo_prenda}}" data-interes="{{$dato_prenda->interes4}}" data-almacenaje="{{$dato_prenda->almacenaje4}}" data-iva="{{$dato_prenda->iva4}}" data-mes="{{$dato_prenda->mes5}}" data-refrendo_r="{{$dato_prenda->refrendo}}">4° Mes / {{\Carbon\Carbon::parse($dato_prenda->mes4)->formatLocalized('%d-%B-%Y')}}</option>
                        <option value="{{ $dato_prenda->refrendo5 }}" data-prestamo="{{$dato_prenda->prestamo_prenda}}" data-interes="{{$dato_prenda->interes5}}" data-almacenaje="{{$dato_prenda->almacenaje5}}" data-iva="{{$dato_prenda->iva5}}" data-mes="{{$dato_prenda->fecha_comercializacion}}" data-refrendo_r="{{$dato_prenda->refrendo}}">5° Mes / {{\Carbon\Carbon::parse($dato_prenda->mes5)->formatLocalized('%d-%B-%Y')}}</option>
                    </select>
                </div>


                <input type="hidden" id="prestamo4" name="prestamo4" onkeyUp="calcular2();"  class="form-control tamañoletra  text-center " readonly placeholder="0.00">


                <label for="" class="negritas mt-4">PULSE EL BOTON SI DESEA ABONAR A CAPITAL:</label>

                <div class="mt-2">
                    <button class="btn btn-primary col-md-12" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                        ABONAR A CAPITAL &nbsp; <i class="fa fa-plus-circle" style="font-size:20px"></i>
                    </button>
                    </p>
                </div>
                <div class="collapse" id="collapseExample1">
                    <div class="card card-body">
                        <label for=""><strong>ABONO A CAPITAL </strong></label>
                        <label for="" class="negritas mt-4">CUANTO DESEA ABONAR A CAPITAL:</label>
                        <div class="input-group has-validation ">
                            <span class="input-group-text fw-bold signo" id="inputGroupPrepend">$</span>
                            <input type="number" id="capital" name="capital" onkeyUp="calcular2();" class="form-control input_style tamañoletra text-center" placeholder="0.00" min="0" disabled>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                        <button class="btn btn-primary col-md-12" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            RECARGO POR DIA &nbsp; <i class="fa fa-plus-circle" style="font-size:20px"></i>
                        </button>
                        </p>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <label for=""><strong>RECARGO POR DIA:</strong></label>
                            <label for="" class="negritas mt-4">PONGA LOS DIAS DE DIREFENCIA:</label>
                            <div class="input-group has-validation ">
                                <span class="input-group-text fw-bold signo" id="inputGroupPrepend">Dias:&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <input type="number" id="multa" name="multa"  value="" onkeyUp="calcular2();" class="form-control input_style tamañoletra text-center" placeholder="0">
                                                           </div>
                            <div class="input-group has-validation ">
                                <span class="input-group-text fw-bold signo" id="inputGroupPrepend">Por dia:</span>
                                <input type="number" id="multa2" name="multa2" onkeyUp="calcular2();" class="form-control input_style text-center" disabled>
                            </div>
                            <div class="input-group has-validation ">
                                <span class="input-group-text fw-bold signo" id="inputGroupPrepend">Total: $</span>
                                <input type="number" id="multa3" name="multa3" onkeyUp="calcular2();" class="form-control input_style text-center" disabled>
                            </div>
                            <b class="mt-1 text-center" style="color:red;">Enter al poner un valor o modificar</b>
                        </div>
                    </div>

                <input type="hidden" id="abonototal" name="abonototal" onkeyUp="calcular2();" class="form-control input_style tamañoletra text-center" value="{{$dato_prenda->prestamo_prenda}}" readonly>



                <div class="  d-flex mt-4 justify-center">
                    <label for="" class=" h4"><strong>TOTAL A PAGAR:</strong></label>
                </div>
                <div class="flex justify-center">
                    <div class="col-md-12">
                        <div class="input-group has-validation">
                            <span class="input-group-text fw-bold signo" style=" background-color:white" id="inputGroupPrepend">$</span>
                            <input type="number" id="totalpago1" name="totalpago1" style=" background-color:white"  class="form-control input_style tamañoletra text-center col-md-8" placeholder="0.00" disabled>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <label for="" class="negritas">PAGO RECIBIDO:</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text fw-bold signo" style=" background-color:white" id="inputGroupPrepend">$</span>
                        <input type="number" id="cantidad_pago1" name="cantidad_pago1" class="form-control input_style tamañoletra text-center" placeholder="0.00" onkeypress="return filterFloatdecimal2(event,this);" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <label for="" class="negritas">CAMBIO ENTREGADO:</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text fw-bold signo" id="inputGroupPrepend">$</span>
                        <input type="text" id="cambio_boleta1" name="cambio_boleta1" class="form-control input_style letracambio text-center" readonly placeholder="0.00">
                    </div>
                </div>

                <select class="form-select text-center mt-4" id="socio" onchange="calcular3();" name="socio" aria-label="Default select example">
                    <option class="fw-bold" value="DISPONIBLE">¿CONFIRMASTE LOS DATOS?</option>
                    <option class="fw-bold" value="{{$dato_prenda->cliente->socio}}">SI</option>
                </select>

                <div class=" mb-8 max-w-6xl  flex  justify-center mt-5">
                    <button type="submit" id="idBoton" class="size60 bordes btn btn-primary navbar1 modal55" data-toggle="modal" data-target="#exampleModal{{ $dato_prenda->id_prendas }}" data-item-prestamo="cantidad_pago">PAGAR</button>
                </div>

            </div>
            @include('admin.Modals.modalrefrendo')
        </div>
 @else
        <div class="h3 text-center fw-bold mt-8">No tienes los permisos para ver este modulo <br> Comunicate con tu superior...</div> 
    @endcan
</body>

<div class="mt-8">

</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="{{ asset('dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('dist/js/jquery.min.js') }}"></script>
<script src="{{ asset('dist/js/refrendo.js') }}"></script>
</html>