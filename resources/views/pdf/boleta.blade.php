<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>Casa de Empeño Asociados Nueva Mutua.</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('dist/css/estilosBoleta.css') }}">
    <script type="text/javascript" src="/JavaScript.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <!--Boostrap-->
    <link href="{{ asset('dist/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
    <!-- las tres siguientes líneas son un truco para obtener elementos semánticos de HTML5 que funcionan en versiones de Internet Explorer antiguas -->
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <style>
        .numT {
            border: 0;
            color: black;
            padding: 0;
            margin: 0;
        }

        .tabla {
            display: flex;
            flex-wrap: wrap;
        }

        .centro1 {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<div class="container">

    <body>
        <table>
            <tr>
                <th colspan="9">
                    <header>
                        <div>
                            <h5>Folio:&nbsp;{{ $dato_prenda->id_prendas }}
                                <h5>
                        </div>
                        <div>
                            <h5>Asociados Nueva Mutua S.A. DE C.V.</h5>
                            <h6>RFC: ANM-180517PD6 <br>
                                Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                Col. Centro, Umán, Yucatán, C.P. 97390<br>
                                Boleta de Empeño</h6>

                        </div>
                        <div>
                            <img src="{{ asset('img/FONDO.png') }}" alt="">
                        </div>
                    </header>
                    <div class="iempresa">
                        <div class="lineal">
                            <p>Fecha de celebración del contrato Umán, Yuc a
                                {{ $dato_prenda->created_at->format('D, d F, Y.') }}
                                <script type="text/javascript"> var meses = new Array 
                    ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 
                    var f=new Date(); document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear()); </script>
                            </p>
                        </div>
                        {{dias()}}
                        {{diasmes2()}}
                        {{diasmes3()}}
                        {{diasmes4()}}
                       
                        

                        
                       
                        <p>CONTRATO DE MUTUO CON INTERES Y GARANTIA PRENDARIA (PRÉSTAMO), que celebra: ASOCIADOS NUEVA
                            MUTUA S.A. DE C.V., EL PROVEEDOR,
                            con domicilio en: Calle 23 No 100-B x 18 y 20 Col. Centro, Umán,
                            Yucatán, México. C.P.97390, R.F.C. ANM-180517PD6, 988 933 0223,
                            Correo electrónico: asociadosnm2018@gmail.com.
                            <br>
                            y EL CONSUMIDOR <b>{{ $dato_prenda->cliente->nombre_cliente }}
                                {{ $dato_prenda->cliente->apellido_cliente }}</b>, que se identifica con
                            <b>{{ $dato_prenda->cliente->tipo_de_identificacion }}</b>, número:
                            <b>{{ $dato_prenda->cliente->numero_de_identificacion }}</b> con domicilio en:
                            <b>CALLE {{ $dato_prenda->cliente->calle_cliente }} N°
                                {{ $dato_prenda->cliente->numero_cliente }} COL.
                                {{ $dato_prenda->cliente->colonia_cliente }},
                                {{ $dato_prenda->cliente->ciudad_cliente }},</b> Tel:
                            <b>{{ $dato_prenda->cliente->telefono_cliente }}</b>, correo electrónico:
                            <b>{{ $dato_prenda->cliente->correo_electronico_cliente }}</b>, quien designa como
                            cotitular a
                            <b>{{ $dato_prenda->cliente->nombre_cotitular }}
                                {{ $dato_prenda->cliente->apellido_cotitular }}</b>, con domicilio en <b>CALLE N°
                                {{ $dato_prenda->cliente->calle_cotitular }} COL.
                                {{ $dato_prenda->cliente->colonia_cotitular }},
                                {{ $dato_prenda->cliente->ciudad_cotitular }}.</b>, solo para efectos de este.
                        </p>
                        <p>
                            @if ($dato_prenda->cliente->socio == 0.02)
                            SOCIO: SI (X) NO ( ) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N° SOCIO:
                            {{ $dato_prenda->cliente->numero_socio }}
                            @else
                            @endif
                            @if ($dato_prenda->cliente->socio == 0.025)
                            SOCIO: SI ( ) NO (X) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N° SOCIO: N/A
                            @else
                            @endif
                        </p>
                    </div>
                </th>
            </tr>


            <tr>

                <th rowspan="2">CAT <br> Costo Anual Total</th>

                <th rowspan="2">TASA DE<br> INTERES ANUAL</th>

                <th rowspan="2">MONTO DEL<br> PRESTAMO</th>

                <th rowspan="2">MONTO TOTAL <br>A PAGAR</th>

                <th colspan="5">COMISIONES</th>


            </tr>

            <tr>
                <th colspan="5">MONTOS Y CLAUSULAS (ANEXO CONTRATO)</th>

            </tr>

            <tr>
                <td>Para fines informativos <br>y de comparación<br>
                    @if ($dato_prenda->cliente->socio == 0.02)
                    39.5% FIJO
                    @else
                    @endif
                    @if ($dato_prenda->cliente->socio == 0.025)
                    46.9% FIJO
                    @else
                    @endif <br> (SIN IVA)
                </td>

                <td>13.92% <BR> TASA FIJA</td>

                <td>
                    $ {{ $dato_prenda->prestamo_prenda }}.00
                </td>

                <td>
                    <div class="d-flex align-items-center justify-content-center">
                        <span>$</span><input type="text" name="desempcopia" class="numT col-md-6 " id="desempcopia" value="" disabled>
                    </div>
                    (CON IVA)
                </td>

                <td colspan="5">
                    @if ($dato_prenda->cliente->socio == 0.02)
                    Comisión por Almacenaje: <b>2 %</b> (Claus. 11a) Pág. 5 <br>
                    Comisión por Avaluó:<b> $0.00</b> (Claus. 11b) Pág. 5 <br>
                    Comisión por comercialización:<b>30 %</b> (Claus. 11c) Pág. 5 <br>
                    Comisión por reposición de contrato: <b>$10.00</b> (Claus. 11d) Pág 5 <br>
                    Desempeño Extemporáneo:<b>10%</b> (Claus. 11e) Pág. 5 <br>
                    Gastos de administración: <b>$ 500.00</b> (Claus. 11f) Pág. 5.
                    @else
                    @endif
                    @if ($dato_prenda->cliente->socio == 0.025)
                    Comisión por Almacenaje: <b>2.5 %</b> (Claus. 11a) <br>
                    Comisión por Avaluó:<b> $0.00</b> (Claus. 11b)<br>
                    Comisión por comercialización:<b>30 %</b> (Claus. 11c) <br>
                    Comisión por reposición de contrato: <b>$10.00</b> (Claus. 11d) <br>
                    Desempeño Extemporáneo:<b>10%</b> (Claus. 11e) <br>
                    Gastos de administración: <b>$ 500.00</b> (Claus. 11f)
                    @else
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="9">
                    <div class="iempresa">
                        Metodología de calculo de interés: tasa de interés anual fija dividida entre
                        360 días por el importe del saldo insoluto del préstamo por el numero de
                        días efectivamente transcurridos.
                    </div>
                </td>
            </tr>
            <tr>

                <td colspan="9">
                    <div class="iempresa">
                        Plazo del préstamo (Fecha limite para el refrendo o desempeño) : 15-JUL-2022.
                        Total de refrendos aplicables: 5 . Su pago será: EFECTIVO. En caso de que sea
                        día inhábil, se considera el día siguiente.
                    </div>
                </td>
            </tr>

            <tr>

                <td rowspan="7">OPCIONES DE PAGO PARA REFRENDO O DESEMPEÑO</td>

                <td rowspan="2">NUMERO</td>

                <td colspan="4">MONTO</td>

                <td colspan="2">TOTAL A PAGAR</td>

                <td rowspan="2">CUANDO SE REALIZAN LOS PAGOS</td>

            </tr>

            <tr>

                <th>IMPORTE DE MUTUO</th>

                <th>INTERESES</th>

                <th>ALMACENAJE</th>

                <th>IVA</th>

                <th>POR REFRENDO</th>

                <th>POR DESEMPEÑO</th>

            </tr>

            <tr>

                <th>1° Mes</th>

                <td>$ {{ $dato_prenda->prestamo_prenda }}.00</td>

                <td>$ {{ $dato_prenda->interes }}</td>

                <td>$ {{ $dato_prenda->almacenaje }}</td>

                <td>$ {{ $dato_prenda->iva }}</td>

                <td>$ {{ $dato_prenda->refrendo }}</td>

                <td>$ {{ $dato_prenda->desempeño }}</td>

                <td>
                    <script>
                        var d = new Date(f);
                        var r = new Date(new Date(d).setMonth(d.getMonth() + 1));
                        var mesesAbr = new Array("en", "feb", "mar", "abr", "may", "jun", "jul", "ag", "sept", "oct", "nov", "dic");
                        document.write(r.getDate() + "-" + mesesAbr[r.getMonth()] + "-" + r.getFullYear());
                    </script>
                </td>

            </tr>
            <tr>
                <th>2° Mes</th>

                <td>${{ $dato_prenda->prestamo_prenda }}.00</td>

                <td>
                    <div class="centro1">

                        <div class="d-flex align-items-center justify-content-center">
                            <span>$</span><input type="text" name="interes2" class="col-md-5 numT" id="interes2" disabled>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="centro1">

                        <div class="d-flex align-items-center justify-content-center">
                            <span>$</span><input type="text" name="alma2" class="numT col-md-5" id="alma2" value="" disabled>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="centro1">

                        <div class="d-flex align-items-center justify-content-center">
                            <span>$</span><input type="text" name="iva2" class="numT col-md-5" id="iva2" value="" disabled>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="centro1">

                        <div class="d-flex align-items-center justify-content-center">
                            <span>$</span><input type="text" name="refre2" class="numT col-md-5" id="refre2" value="" disabled>
                        </div>
                    </div>
                </td>

                <td>
                    <div class="centro1">

                        <div class="d-flex align-items-center justify-content-center">
                            <span>$</span><input type="text" name="desemp2" class="numT col-md-5" id="desemp2" value="" disabled>
                        </div>
                    </div>
                </td>

                <td>
                    <script>
                        var d = new Date(f);
                        var r = new Date(new Date(d).setMonth(d.getMonth() + 2));
                        document.write(r.getDate() + "-" + mesesAbr[r.getMonth()] + "-" + r.getFullYear());
                    </script>
                </td>

            </tr>
            <tr>
                <th>3° Mes</th>

                <td>${{ $dato_prenda->prestamo_prenda }}.00</td>

                <td>
                    $<input type="text" name="interes3" class="numT col-md-5" id="interes3" value="" disabled>
                </td>

                <td>
                    $<input type="text" name="alma3" class="numT col-md-5" id="alma3" value="" disabled>
                </td>

                <td>
                    $<input type="text" name="iva3" class="numT col-md-5" id="iva3" value="" disabled>
                </td>

                <td>
                    $<input type="text" name="refre3" class="numT col-md-5" id="refre3" value="" disabled>
                </td>

                <td> $<input type="text" name="desemp3" class="numT col-md-5" id="desemp3" value="" disabled>
                </td>

                <td>
                    <script>
                        var d = new Date(f);
                        var r = new Date(new Date(d).setMonth(d.getMonth() + 3));
                        document.write(r.getDate() + "-" + mesesAbr[r.getMonth()] + "-" + r.getFullYear());
                    </script>
                </td>

            </tr>
            <tr>
                <th>4° Mes</th>

                <td>${{ $dato_prenda->prestamo_prenda }}.00</td>

                <td>
                    $<input type="text" name="interes4" class="numT col-md-5" id="interes4" value="" disabled>
                </td>

                <td>
                    $<input type="text" name="alma4" class="numT col-md-5" id="alma4" value="" disabled>
                </td>

                <td>
                    $<input type="text" name="iva4" class="numT col-md-5" id="iva4" value="" disabled>
                </td>

                <td>
                    $<input type="text" name="refre4" class="numT col-md-5" id="refre4" value="" disabled>
                </td>

                <td>
                    $<input type="text" name="desemp4" class="numT col-md-5" id="desemp4" value="" disabled>
                </td>

                <td>
                    <script>
                        var d = new Date(f);
                        var r = new Date(new Date(d).setMonth(d.getMonth() + 4));
                        document.write(r.getDate() + "-" + mesesAbr[r.getMonth()] + "-" + r.getFullYear());
                    </script>
                </td>

            </tr>
            <tr>
                <th>5° Mes</th>

                <td>${{ $dato_prenda->prestamo_prenda }}.00</td>

                <td>
                    $<input type="text" name="interes5" class="numT col-md-5" id="interes5" value="" disabled>
                </td>

                <td>
                    $<input type="text" name="alma5" class="numT col-md-5" id="alma5" value="" disabled>
                </td>

                <td>
                    $<input type="text" name="iva5" class="numT col-md-5" id="iva5" value="" disabled>
                </td>

                <td>
                    $<input type="text" name="refre5" class="numT col-md-5" id="refre5" value="" disabled>
                </td>

                <td>
                    $<input type="text" name="desemp5" class="numT col-md-5" id="desemp5" value="" disabled>
                </td>

                <td>
                    <script>
                        var d = new Date(f);
                        var r = new Date(new Date(d).setMonth(d.getMonth() + 5));
                        document.write(r.getDate() + "-" + mesesAbr[r.getMonth()] + "-" + r.getFullYear());
                    </script>
                </td>



            </tr>

            <tr>

                <th colspan="5">COSTO MENSUAL TOTAL</th>

                <th colspan="4">COSTO DIARIO TOTAL</th>

            </tr>
            <tr>

                <td colspan="5">Para fines informativos y de comparación: <br> <b>3.9083</b> % fijo sin IVA</td>

                <td colspan="4">Para fines informativos y de comparación: <br> <b>0.1303</b> % fijo sin IVA</td>

            </tr>
            <tr>
                <td colspan="9">
                    <div class="iempresa">
                        "Cuide su capacidad de pago, generalmente no debe exceder del 35% de sus ingresos". "Si usted no
                        paga en tiempo y forma corre el riesgo de perder sus prendas"
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="9">
                    <div class="iempresa">
                        GARANTÍA: Para garantizar el pago de este préstamo, el consumidor deja en garantía el bien que
                        se describe a continuación:
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="9">
                    <b> DESCRIPCION DE LA PRENDA</b>
                </td>
            </tr>
            <tr>
                <td><b>DESCRIPCION</b></td>
                <td colspan="4"><b><b>CARACTERISTICAS</b></td>
                <td><b>AVALÚO</b></td>
                <td><b>PRÉSTAMO</b></td>
                <td colspan="2"><b>% PRÉSTAMO SOBRE AVALÚO</b></td>
            </tr>
            <tr class="margen">

                <td>Oro</td>
                <td colspan="4">Cant. 1 Collas acapas de 10k, 15.6gr, completo.</td>
                <td>$7,041.00</td>
                <td>$6,300.00</td>
                <td colspan="2">90%</td>
            </tr>
            <tr>
                <td class="iempresa" colspan="5">Monto de avaluó: </td>
                <td colspan="4"> $7,041.00 Son: Siete mil Cuarents y un pesos 00/100M.N</td>
            </tr>
            <tr>
                <td class="iempresa" colspan="5">Porcentaje del préstamo sobre el avaluó: </td>
                <td colspan="4"> 90%</td>
            </tr>
            <tr>
                <td class="iempresa" colspan="5">Fecha de inicio de comercialización:</td>
                <td colspan="4">
                    <script>
                        var d = new Date(f);
                        var r = new Date(new Date(d).setMonth(d.getMonth() + 6));
                        document.write(r.getDate() + "-" + mesesAbr[r.getMonth()] + "-" + r.getFullYear());
                    </script>
                </td>
            </tr>
            <tr>
                <td class="iempresa" colspan="5">El monto del préstamo se realiza en:</td>
                <td class="iempresa" colspan="4">Efectivo:<u> x </u>__ o a la cuenta bancaria del Consumidor al
                    <br>numero:
                </td>
            </tr>
            <tr>
                <td class="iempresa" colspan="5">Fecha límite de finiquito:</td>
                <td class="iempresa" colspan="4">
                    <script>
                        var d = new Date(f);
                        var r = new Date(new Date(d).setMonth(d.getMonth() + 5));
                        document.write(r.getDate() + "-" + mesesAbr[r.getMonth()] + "-" + r.getFullYear());
                    </script>
                </td>
            </tr>
            <tr>
                <td colspan="9">Terminos y condiciones para recibir pagos anticipados: Clausula 13 (decimo tercera,
                    inciso b.) Pág. 5)</td>
            </tr>
        </table>
        <p class="letrapequeña">Estos conceptos causaran el pago de impuesto al valor agregado (IVA) a la tasa del
            16.00
            % </p>

        <footer>
            <p>©Copyright 2022 Asociados Nueva Mutua. Reservados todos los derechos..</p>
        </footer>
</div>
<input type="hidden" onkeyUp="calcular();" name="interes" class="form-control" id="interes" value="{{ $dato_prenda->interes }}" readonly>
<input type="hidden" onkeyUp="calcular();" name="almacenaje" class="form-control" id="almacenaje" value="{{ $dato_prenda->almacenaje }}" readonly>
<input type="hidden" onkeyUp="calcular();" name="prestamo" class="form-control" id="prestamo" value="{{ $dato_prenda->prestamo_prenda }}" readonly>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="{{ asset('dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('dist/js/jquery.min.js') }}"></script>
<script>
    function formatear(dato) {
        return dato.replace(/./g, function(c, i, a) {
            return i > 0 && c !== "." && (a.length - i) % 3 === 0 ? "" + c : c; // "," que le x
        });
    }

    function calcular() {
        var datopres = document.getElementById("interes").value;
        var datoalma = document.getElementById("almacenaje").value;
        var prestamo = document.getElementById("prestamo").value;
        var interes2 = parseFloat(datopres) * 2;
        var interes3 = parseFloat(datopres) * 3;
        var interes4 = parseFloat(datopres) * 4;
        var interes5 = parseFloat(datopres) * 5;

        var almacenaje2 = parseFloat(datoalma) * 2;
        var almacenaje3 = parseFloat(datoalma) * 3;
        var almacenaje4 = parseFloat(datoalma) * 4;
        var almacenaje5 = parseFloat(datoalma) * 5;

        var iva2 = parseFloat(interes2 + almacenaje2) * 0.16;
        var iva3 = parseFloat(interes3 + almacenaje3) * 0.16;
        var iva4 = parseFloat(interes4 + almacenaje4) * 0.16;
        var iva5 = parseFloat(interes5 + almacenaje5) * 0.16;

        var refre2 = parseFloat(interes2 + almacenaje2 + iva2);
        var refre3 = parseFloat(interes3 + almacenaje3 + iva3);
        var refre4 = parseFloat(interes4 + almacenaje4 + iva4);
        var refre5 = parseFloat(interes5 + almacenaje5 + iva5);


        var prestamo1 = parseFloat(prestamo);
        var desem2 = parseFloat(prestamo1 + refre2);
        var desem3 = parseFloat(prestamo1 + refre3);
        var desem4 = parseFloat(prestamo1 + refre4);
        var desem5 = parseFloat(prestamo1 + refre5);


        $("#interes2").val((interes2.toFixed(2)))
        $("#interes3").val((interes3.toFixed(2)))
        $("#interes4").val((interes4.toFixed(2)))
        $("#interes5").val((interes5.toFixed(2)))

        $("#alma2").val((almacenaje2.toFixed(2)))
        $("#alma3").val((almacenaje3.toFixed(2)))
        $("#alma4").val((almacenaje4.toFixed(2)))
        $("#alma5").val((almacenaje5.toFixed(2)))

        $("#iva2").val((iva2.toFixed(2)))
        $("#iva3").val((iva3.toFixed(2)))
        $("#iva4").val((iva4.toFixed(2)))
        $("#iva5").val((iva5.toFixed(2)))

        $("#refre2").val((refre2.toFixed(2)))
        $("#refre3").val((refre3.toFixed(2)))
        $("#refre4").val((refre4.toFixed(2)))
        $("#refre5").val((refre5.toFixed(2)))

        $("#desemp2").val((desem2.toFixed(2)))
        $("#desemp3").val((desem3.toFixed(2)))
        $("#desemp4").val((desem4.toFixed(2)))
        $("#desemp5").val((desem5.toFixed(2)))

        $("#desempcopia").val((desem5.toFixed(2)))


    }
    calcular();
</script>

</html>