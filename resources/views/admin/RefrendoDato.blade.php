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
            justify-content: center;

        }

        .align {
            display: flex;
            justify-content: center;
        }

        .tabla1 {
            width: 65%;
            height: 100%;
            padding: 30px;
            background-color: #eaeaea;
        }

        .tabla2 {

            width: 30%;
            height: 100%;
            padding: 30px;
            background-color: #f2f2f1;


        }

        .campo1 {
            background-color: #f2f2f1;
            color: black;
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
            font-size: 16px;
        }

        .signo {
            font-size: 28px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        table,
        th {
            font-size: 14px;
        }

        table {
            background-color: white;
            text-align: center;
        }
    </style>

</head>

<body class="antialiased ">
    <div class="relative sinborde items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <!-- encabezado -->
        <div class="size">
            <div class="navbar1 flex size">
                <div class="max-w-6xl mx-auto mr-2">
                    <img class="icono" src="{{ asset('img/logo.png') }}" width="450px" height="450px">
                </div>
                <div class="mx-auto ml-2 titulo neritas texto-grande size"> CASA DE EMPEÑOS <br> ASOCIADOS NUEVA MUTUA DE UMÁN S.A. DE C.V.</a></div>

            </div>
            <!-- MENU -->
            @include('layout.nav')
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




        <!-- <div class="row g-3 needs-validation size80 items-center justify-center"> -->

        {{ csrf_field() }}


        <div class="text-center mt-8">
            <label for="validationCustom03" class="form-label h4    ">DATOS DE LA PRENDA A REFRENDAR</label>
        </div>



        <div class="align">
            <div class="tabla1 ">
                <!--   
                <div class="col-md-12 text-center mt-4">
                    <label class="form-label h4">TABLA DE REFRENDO/DESEMPEÑO:</label>
                </div>
 -->

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

                            <td>$ {{ $dato_prenda->prestamo_prenda }}.00</td>

                            <td>$ {{ $dato_prenda->interes }}</td>

                            <td>$ {{ $dato_prenda->almacenaje }}</td>

                            <td>$ {{ $dato_prenda->iva }}</td>

                            <td style="background-color: yellow;" class="fw-bold">$ {{ $dato_prenda->refrendo }}</td>

                            <td>$ {{ $dato_prenda->desempeño }}</td>

                            <td>
                                {{\Carbon\Carbon::parse($dato_prenda->mes1)->formatLocalized('%d-%B-%Y')}}
                            </td>

                        </tr>
                        <tr>
                            <th>2° Mes</th>

                            <td>
                                $ {{$dato_prenda->prestamo_prenda}}.00
                            </td>
                            <td>
                                $ {{$dato_prenda->interes2}}
                            </td>
                            <td>
                                $ {{$dato_prenda->almacenaje2}}
                            </td>
                            <td>
                                $ {{$dato_prenda->iva2}}
                            </td>
                            <td style="background-color: yellow;" class="fw-bold">
                                $ {{$dato_prenda->refrendo2}}
                            </td>
                            <td>
                                $ {{$dato_prenda->desempeño2}}
                            </td>
                            <td>
                                {{\Carbon\Carbon::parse($dato_prenda->mes2)->formatLocalized('%d-%B-%Y')}}
                            </td>
                        </tr>
                        <tr>
                            <th>3° Mes</th>

                            <td>
                                $ {{$dato_prenda->prestamo_prenda}}.00
                            </td>
                            <td>
                                $ {{$dato_prenda->interes3}}
                            </td>
                            <td>
                                $ {{$dato_prenda->almacenaje3}}
                            </td>
                            <td>
                                $ {{$dato_prenda->iva3}}
                            </td>
                            <td style="background-color: yellow;" class="fw-bold">
                                $ {{$dato_prenda->refrendo3}}
                            </td>
                            <td>
                                $ {{$dato_prenda->desempeño3}}
                            </td>
                            <td>
                                {{\Carbon\Carbon::parse($dato_prenda->mes3)->formatLocalized('%d-%B-%Y')}}
                            </td>
                        </tr>
                        <tr>
                            <th>4° Mes</th>

                            <td>
                                $ {{ $dato_prenda->prestamo_prenda }}.00
                            </td>
                            <td>
                                $ {{$dato_prenda->interes4}}
                            </td>
                            <td>
                                $ {{$dato_prenda->almacenaje4}}
                            </td>
                            <td>
                                $ {{$dato_prenda->iva4}}
                            </td>
                            <td style="background-color: yellow;" class="fw-bold">
                                $ {{$dato_prenda->refrendo4}}
                            </td>
                            <td>
                                $ {{$dato_prenda->desempeño4}}
                            </td>
                            <td>
                                {{\Carbon\Carbon::parse($dato_prenda->mes4)->formatLocalized('%d-%B-%Y')}}
                            </td>
                        </tr>
                        <tr>
                            <th>5° Mes</th>

                            <td>
                                $ {{ $dato_prenda->prestamo_prenda }}.00
                            </td>
                            <td>
                                $ {{$dato_prenda->interes5}}
                            </td>
                            <td>
                                $ {{$dato_prenda->almacenaje5}}
                            </td>
                            <td>
                                $ {{$dato_prenda->iva5}}
                            </td>
                            <td style="background-color: yellow;" class="fw-bold">
                                $ {{$dato_prenda->refrendo5}}
                            </td>
                            <td>
                                $ {{$dato_prenda->desempeño5}}
                            </td>
                            <td>
                                {{\Carbon\Carbon::parse($dato_prenda->mes5)->formatLocalized('%d-%B-%Y')}}
                            </td>
                        </tr>
                    </table>
                </div>


                <div class="text-center mt-3">
                    <label for="">---------------------------------- <strong>DATOS DEL CLIENTE/PRENDA</strong> -----------------------------------</label>
                </div>
                <div class="d-flex row mt-3 justify-content-around">
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
                    <label class="mt-1"><strong>DESCRIPCION GENERICA:&nbsp;&nbsp;</strong>
                        {{$dato_prenda->descripcion_generica}}
                    </label>
                    <br>
                    <label class="mt-1"><strong>CANTIDAD DE PRENDAS:&nbsp;&nbsp;</strong>{{ $dato_prenda->cantidad_prenda }}</label>
                    <label class="mt-1"><strong>CARACTERISTICAS:&nbsp;&nbsp;</strong>{{ $dato_prenda->caracteristicas_prenda . '.' . ' ' . 'DETALLES ESPECIFICOS:' . ' KILATAJE:' . '' . ' ' . $dato_prenda->kilataje_prenda . 'k' . ',' . ' ' . 'GRAMAJE:' . '' . ' ' . $dato_prenda->gramaje_prenda . 'gr' }}</label> <br>
                    <label class="mt-1"><strong>REFRENDOS REALIZADOS:&nbsp;&nbsp;</strong>#{{ $dato_prenda->numeros_refrendos}}</label> <br>
                    <label class="mt-1"><strong>PRESTAMO INICIAL:&nbsp;&nbsp;</strong>$ {{ $dato_prenda->prestamo_inicial}}</label>
                </div>


            </div>
            <div class="tabla2">
                <div class="col-md-12 mt-3"><strong>SELECCIONE EL MES A REFRENDAR:</strong></label>
                    <select class="form-select text-center mt-2" id="interesrefre" name="interesrefre" onchange="calcular();" onchange="calcular2();" onchange="calcular66();" aria-label="Default select example">

                        <option selected value="">MES A REFRENDAR</option>
                        <option value="{{ $dato_prenda->refrendo }}" data-prestamo="{{$dato_prenda->prestamo_prenda}}" data-interes="{{$dato_prenda->interes}}" data-almacenaje="{{$dato_prenda->almacenaje}}" data-iva="{{$dato_prenda->iva}}" data-mes="{{$dato_prenda->mes2}}">1° Mes / {{\Carbon\Carbon::parse($dato_prenda->mes1)->formatLocalized('%d-%B-%Y')}}</option>
                        <option value="{{ $dato_prenda->refrendo2 }}" data-prestamo="{{$dato_prenda->prestamo_prenda}}" data-interes="{{$dato_prenda->interes2}}" data-almacenaje="{{$dato_prenda->almacenaje2}}" data-iva="{{$dato_prenda->iva2}}" data-mes="{{$dato_prenda->mes3}}">2° Mes / {{\Carbon\Carbon::parse($dato_prenda->mes2)->formatLocalized('%d-%B-%Y')}}</option>
                        <option value="{{ $dato_prenda->refrendo3 }}" data-prestamo="{{$dato_prenda->prestamo_prenda}}" data-interes="{{$dato_prenda->interes3}}" data-almacenaje="{{$dato_prenda->almacenaje3}}" data-iva="{{$dato_prenda->iva3}}" data-mes="{{$dato_prenda->mes4}}">3° Mes / {{\Carbon\Carbon::parse($dato_prenda->mes3)->formatLocalized('%d-%B-%Y')}}</option>
                        <option value="{{ $dato_prenda->refrendo4 }}" data-prestamo="{{$dato_prenda->prestamo_prenda}}" data-interes="{{$dato_prenda->interes4}}" data-almacenaje="{{$dato_prenda->almacenaje4}}" data-iva="{{$dato_prenda->iva4}}" data-mes="{{$dato_prenda->mes5}}">4° Mes / {{\Carbon\Carbon::parse($dato_prenda->mes4)->formatLocalized('%d-%B-%Y')}}</option>
                        <option value="{{ $dato_prenda->refrendo5 }}" data-prestamo="{{$dato_prenda->prestamo_prenda}}" data-interes="{{$dato_prenda->interes5}}" data-almacenaje="{{$dato_prenda->almacenaje5}}" data-iva="{{$dato_prenda->iva5}}" data-mes="{{$dato_prenda->fecha_comercializacion}}">5° Mes / {{\Carbon\Carbon::parse($dato_prenda->mes5)->formatLocalized('%d-%B-%Y')}}</option>
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
<script>
    //FUNCION PARA SACAR EL PORCENTAJE DEL AVALUO:
    function formatear(dato) {
        return dato.replace(/./g, function(c, i, a) {
            return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "" + c : c; // "," que le x
        });
    }


  


    function calcular() {
        var valor = document.getElementById("interesrefre").value;
        var valor1 = document.getElementById("capital").value;

       
        var porce = parseFloat(valor);
       
       /*  var porce1 = parseFloat(valor1 || 0)   es de capital */
        /*         var porce2 = parseFloat(porce + porce1) */
        $("#prestamo4").val(formatear(porce.toFixed(2)))
        $("#totalpago1").val(porce.toFixed(2))
        $("#multa2").val((porce/30).toFixed(2))
        $("#total").val(porce.toFixed(2))
        $("#refrendo_anterior").val(porce.toFixed(2))

        /*    $("#totalpago1").val(formatear(porce2.toFixed(2))) */

        $("#interes_anterior").val($("#interesrefre option:selected").data("interes"));
        $("#almacenaje_anterior").val($("#interesrefre option:selected").data("almacenaje"));
        $("#iva_anterior").val($("#interesrefre option:selected").data("iva"));
        $("#sub_refrendo").val((($("#interesrefre option:selected").data("interes")) + ($("#interesrefre option:selected").data("almacenaje"))).toFixed(2));

        
           }
    calcular();

  

    function calcular2() {
        var valor = document.getElementById("prestamo4").value;
        var valor1 = document.getElementById("capital").value;
        var valor2 = document.getElementById("pago6").value;
        var valor3 = document.getElementById("interesrefre").value;
        var valor4 = document.getElementById("refrendos22").value;
        var valor44 = document.getElementById("refrendos44").value;

        var valor333 = document.getElementById("multa").value;
        var valor444 = document.getElementById("multa2").value;
        var valor555 = document.getElementById("multa3").value;

        var porce444 = parseFloat(valor333);
        var porce333 = parseFloat(valor444);
        var porce555 = parseFloat(valor555);
        var porce444 = parseFloat((porce444*porce333)||0);
     
        

        var porce = parseFloat(valor);
        var porce1 = parseFloat(valor1 ||0)


        var porce2 = parseFloat(porce + porce1 + porce444)
        var porce3 = parseFloat(valor2)
        var porce4 = parseFloat(valor4)
        var porce44 = parseFloat(valor44)

        var porce6 = parseFloat(porce4+porce44)
        

        
        var porce5 = (parseFloat(porce3 - porce1))
       /*  var porce5 = (parseFloat(porce3 - porce1) || valor) */
       /* var porce5 = (parseFloat(porce3 - porce1)) */

   /*      $("#totalpago1").val(formatear(porce2.toFixed(2)))
        $("#total").val(formatear(porce2.toFixed(2))) */
        $("#totalpago1").val(porce2.toFixed(2))
        $("#total").val(porce2.toFixed(2))
        $("#abono_capital").val(porce1.toFixed(2))
        $("#sub_refrendo").val(((($("#interesrefre option:selected").data("interes")) + ($("#interesrefre option:selected").data("almacenaje"))) + (porce1) || 0).toFixed(2));
        $("#prestamo_prenda").val(porce5.toFixed(0))

        $("#prestamo_prenda1").val(porce5.toFixed(2))
        $("#prestamo_prenda2").val(porce5.toFixed(2))
        $("#prestamo_prenda3").val(porce5.toFixed(2))
        $("#prestamo_prenda4").val(porce5.toFixed(2))
        $("#prestamo_prenda5").val(porce5.toFixed(2))

        $("#importe_actual").val(porce5.toFixed(0))
        $("#numeros_refrendos").val(porce6.toFixed(0))
        $("#multa3").val(porce444.toFixed(2))
        $("#recargo_des").val(porce444.toFixed(2))

    }
    calcular2();


    

    /*     window.onload = function() {
            imprimirValor();
        }

        function imprimirValor() {
            var select = document.getElementById("interesrefre");
            $("#totalpago1").val(select.value)

        } */
    /*  usar en donde va a poner la funcion de arriba ----> onChange="imprimirValor()" */


    function calcular3() {
        var valor = document.getElementById("socio").value;
        var datopres = document.getElementById("prestamo_prenda").value;
        var porce = parseFloat(1 * valor * datopres); //almacenaje
        var porce1 = parseFloat(datopres) * 0.01 * 1; //interes
        var porce2 = parseFloat((porce + porce1) * 0.16); //iva
        var porce3 = parseFloat(porce + porce1 + porce2); //refrendo
        var porce4 = parseFloat(datopres) //datodesempe
        var porce5 = parseFloat(porce3 + porce4); // desempeño
        var porce6 = parseFloat(porce4 + porce1 + porce); //subtotal

        var inte2 = parseFloat(datopres) * 0.01 * 2; //interes
        var alma2 = parseFloat(2 * valor * datopres); //almacenaje
        var iva2 = parseFloat((inte2 + alma2) * 0.16); //iva
        var refre2 = parseFloat(inte2 + alma2 + iva2); //refrendo
        var desem2 = parseFloat(refre2 + porce4); // desempeño
        var sub2 = parseFloat(porce4 + inte2 + alma2); // subtotal

        var inte3 = parseFloat(datopres) * 0.01 * 3; //interes
        var alma3 = parseFloat(3 * valor * datopres); //almacenaje
        var iva3 = parseFloat((inte3 + alma3) * 0.16); //iva
        var refre3 = parseFloat(inte3 + alma3 + iva3); //refrendo
        var desem3 = parseFloat(refre3 + porce4); // desempeñ3
        var sub3 = parseFloat(porce4 + inte3 + alma3); // subtotal

        var inte4 = parseFloat(datopres) * 0.01 * 4; //interes
        var alma4 = parseFloat(4 * valor * datopres); //almacenaje
        var iva4 = parseFloat((inte4 + alma4) * 0.16); //iva
        var refre4 = parseFloat(inte4 + alma4 + iva4); //refrendo
        var desem4 = parseFloat(refre4 + porce4); // desempeñ3
        var sub4 = parseFloat(porce4 + inte4 + alma4); // subtotal

        var inte5 = parseFloat(datopres) * 0.01 * 5; //interes
        var alma5 = parseFloat(5 * valor * datopres); //almacenaje
        var iva5 = parseFloat((inte5 + alma5) * 0.16); //iva
        var refre5 = parseFloat(inte5 + alma5 + iva5); //refrendo
        var desem5 = parseFloat(refre5 + porce4); // desempeñ3
        var sub5 = parseFloat(porce4 + inte5 + alma5); // subtotal


        $("#almacenaje").val(porce.toFixed(2))
        $("#iva").val(porce2.toFixed(2))
        $("#interes").val((porce1.toFixed(2)))
        $("#refrendo").val((porce3.toFixed(2)))
        $("#desempeño").val((porce5.toFixed(2)))
        $("#subtotal").val((porce6.toFixed(2)))

        $("#almacenaje2").val(alma2.toFixed(2))
        $("#iva2").val(iva2.toFixed(2))
        $("#interes2").val((inte2.toFixed(2)))
        $("#refrendo2").val((refre2.toFixed(2)))
        $("#desempeño2").val((desem2.toFixed(2)))
        $("#subtotal2").val((sub2.toFixed(2)))

        $("#almacenaje3").val(formatear(alma3.toFixed(2)))
        $("#iva3").val(iva3.toFixed(2))
        $("#interes3").val((inte3.toFixed(2)))
        $("#refrendo3").val((refre3.toFixed(2)))
        $("#desempeño3").val((desem3.toFixed(2)))
        $("#subtotal3").val((sub3.toFixed(2)))

        $("#almacenaje4").val(formatear(alma4.toFixed(2)))
        $("#iva4").val(iva4.toFixed(2))
        $("#interes4").val((inte4.toFixed(2)))
        $("#refrendo4").val((refre4.toFixed(2)))
        $("#desempeño4").val((desem4.toFixed(2)))
        $("#subtotal4").val((sub4.toFixed(2)))

        $("#almacenaje5").val(formatear(alma5.toFixed(2)))
        $("#iva5").val(iva5.toFixed(2))
        $("#interes5").val((inte5.toFixed(2)))
        $("#refrendo5").val((refre5.toFixed(2)))
        $("#desempeño5").val((desem5.toFixed(2)))
        $("#subtotal5").val((sub5.toFixed(2)))
    }
    calcular3();

    $( function() {
    $("#interesrefre").change( function() {
        if ($(this).val() === "") {
            $("#capital").prop("disabled", true);
        } else {
            $("#capital").prop("disabled", false);
        }
    });
});





  

/*     function calcular4() {

    }
    calcular4();
 */

 //funcion para que acepte solo numeros positivos y sin punto en abono a capital
function filterInteger(evt,input) {
    // ASCII https://elcodigoascii.com.ar/
    // ‘0′ = 48, ‘9′ = 57, ‘-’ = 45
    // Backspace = 8, Enter = 13, NULL = 0
    var key = window.Event ? evt.which : evt.keyCode;    
    var chark = String.fromCharCode(key);
    var tempValue = input.value+chark;
    if((key >= 48 && key <= 57) /* || key == 45 */) {
        return filter(tempValue);
    } else {
        return key == 8 || key == 13 || key == 0;
    }
}

function filter(__val__) {
    // /^-?[0-9]*$/; // positivos y negativos
    // /^[0-9]*$/; // solo positivos
    var preg = /^[0-9]*$/;
    return preg.test(__val__);
}

document.getElementById('capital').addEventListener('keypress', function(evt) {
    if (filterInteger(evt, evt.target) === false) {
        evt.preventDefault();
    }
});











</script>


</html>