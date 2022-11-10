<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>Casa de Empeño Asociados Nueva Mutua / Boletas #.</title>
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

        .container {
            padding: 0;
            margin: 0;
        }

        .letrapequeña2 {
            font-size: 9px;
        }

        .folio {
            font-size: 12px;
        }

        .title {
            font-size: 13px;
        }

        .title2 {
            font-size: 11px;
        }
        .title3 {
            font-size: 9px;
        }
        .title4 {
            font-size: 8px;
            text-align: center;
        }

        .img1 {
            width: 75px;
            height: 75px;
        }
    </style>
</head>

<div class="container">

    <body>

        <table>
            <tr>
                <th colspan="9">
                    <header>
                        <div class="folio">

                            <p class="mt-2">
                                &nbsp;Folio:&nbsp;{{ $dato_prenda->id_prendas }}
                                @if($dato_prenda->numeros_refrendos > 0)
                                &nbsp;/&nbsp;{{$dato_prenda->folio_refrendo}}-{{$dato_prenda->numeros_refrendos}}
                                @else

                                @endif
                                @if($dato_prenda->numeros_capital > 0)
                                &nbsp;/&nbsp;{{$dato_prenda->folio_capi}}-{{$dato_prenda->numeros_capital}}
                                @else

                                @endif
                            </p>


                        </div>
                        <div>
                            <h5>Asociados Nueva Mutua S.A. DE C.V.</h5>
                            <h6>RFC: ANM-180517PD6 <br>
                                Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                Col. Centro, Umán, Yucatán, C.P. 97390<br>
                                Boleta de Empeño</div>

                        </div>
                        <div>
                            <img class="img1" src="{{ asset('img/FONDO.png') }}" alt="">
                        </div>
                    </header>
                    <div class="iempresa">
                        <div class="lineal">
                            Fecha de celebración del contrato Umán, Yuc a
                            {{ $dato_prenda->fecha_prestamo}}
                            <!-- <script type="text/javascript">
                                    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                                    var f = new Date();
                                    document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                                </script> -->

                        </div>
                        CONTRATO DE MUTUO CON INTERES Y GARANTIA PRENDARIA (PRÉSTAMO), que celebra: ASOCIADOS NUEVA
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
                            {{ $dato_prenda->cliente->numero_cliente }} X
                            {{$dato_prenda->cliente->cruzamientos_cliente}}, COL.
                            {{ $dato_prenda->cliente->colonia_cliente }},
                            {{ $dato_prenda->cliente->ciudad_cliente }},</b> Tel:
                        <b>{{ $dato_prenda->cliente->telefono_cliente }}</b>, correo electrónico:
                        <b>{{ $dato_prenda->cliente->correo_electronico_cliente }}</b>, quien designa como
                        cotitular a
                        <b>{{ $dato_prenda->cliente->nombre_cotitular }}
                            {{ $dato_prenda->cliente->apellido_cotitular }}</b>, con domicilio en <b>CALLE
                            {{ $dato_prenda->cliente->calle_cotitular }} N°
                            {{ $dato_prenda->cliente->numero_cotitular }} X
                            {{ $dato_prenda->cliente->cruzamientos_cotitular}} COL.
                            {{ $dato_prenda->cliente->colonia_cotitular }},
                            {{ $dato_prenda->cliente->ciudad_cotitular }}.</b>, solo para efectos de este.

                        <br>
                        @if ($dato_prenda->cliente->socio == 0.02)
                        SOCIO: SI (<strong>X</strong>) NO ( ) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N° SOCIO:
                        <strong>{{ $dato_prenda->cliente->numero_socio }}</strong>
                        @else
                        @endif
                        @if ($dato_prenda->cliente->socio == 0.025)
                        SOCIO: SI ( ) NO (<strong>X</strong>) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; N° SOCIO: N/A
                        @else
                        @endif

                    </div>
                </th>
            </tr>


            <tr>

                <th rowspan="2">CAT <br> Costo Anual Total</th>

                <th rowspan="2">TASA DE<br> INTERÉS ANUAL</th>

                <th rowspan="2">MONTO DEL<br> PRÉSTAMO</th>

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
                    {{toMoney($dato_prenda->prestamo_prenda)}}
                </td>

                <td>
                    {{toMoney($dato_prenda->desempeño5)}}
                    <br>
                    (CON IVA)
                </td>

                <td colspan="5" class="title3">
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
                    <div class="iempresa title4">
                        <strong>Metodología de calculo de interés: tasa de interés anual fija dividida entre
                            360 días por el importe del saldo insoluto del préstamo por el número de
                            días efectivamente transcurridos.</strong>
                    </div>
                </td>
            </tr>
            <tr>

                <td colspan="9">
                    <div class="iempresa title4">
                        Plazo del préstamo (Fecha limite para el refrendo o desempeño) : <b><u>{{ \Carbon\Carbon::parse($dato_prenda->mes5)->formatLocalized('%d-%B-%Y')}}</u></b>.
                        Total de refrendos aplicables: <b><u>5</u></b>. Su pago será: <b><u>EFECTIVO</u></b>. En caso de que sea
                        día inhábil, se considera el día siguiente.
                    </div>
                </td>
            </tr>

            <tr>

                <th rowspan="7">OPCIONES DE PAGO PARA REFRENDO O DESEMPEÑO</th>

                <th rowspan="2">NÚMERO</th>

                <th colspan="4">MONTO</th>

                <th colspan="2">TOTAL A PAGAR</th>

                <th rowspan="2">CUANDO SE REALIZAN LOS PAGOS</th>

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

                <td>{{toMoney($dato_prenda->prestamo_prenda)}}</td>

                <td>{{toMoney($dato_prenda->interes)}}</td>

                <td>{{toMoney($dato_prenda->almacenaje)}}</td>

                <td>{{toMoney($dato_prenda->iva)}}</td>

                <td>{{toMoney($dato_prenda->refrendo)}}</td>

                <td>{{toMoney($dato_prenda->desempeño)}}</td>

                <td class="title3">{{ \Carbon\Carbon::parse($dato_prenda->mes1)->formatLocalized('%d-%B-%Y')}}</td>

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
                <td>
                    {{toMoney($dato_prenda->refrendo2)}}
                </td>
                <td>
                    {{toMoney($dato_prenda->desempeño2)}}
                </td>
                <td class="title3">{{ \Carbon\Carbon::parse($dato_prenda->mes2)->formatLocalized('%d-%B-%Y')}}</td>
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
                <td>
                    {{toMoney($dato_prenda->refrendo3)}}
                </td>
                <td>
                    {{toMoney($dato_prenda->desempeño3)}}
                </td>
                <td class="title3">{{ \Carbon\Carbon::parse($dato_prenda->mes3)->formatLocalized('%d-%B-%Y')}}</td>
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
                <td>
                    {{toMoney($dato_prenda->refrendo4)}}
                </td>
                <td>
                    {{toMoney($dato_prenda->desempeño4)}}
                </td>
                <td class="title3">{{ \Carbon\Carbon::parse($dato_prenda->mes4)->formatLocalized('%d-%B-%Y')}}</td>
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
                <td>
                    {{toMoney($dato_prenda->refrendo5)}}
                </td>
                <td>
                    {{toMoney($dato_prenda->desempeño5)}}
                </td>
                <td class="title3">{{ \Carbon\Carbon::parse($dato_prenda->mes5)->formatLocalized('%d-%B-%Y')}}</td>
            </tr>

            <tr>

                <th colspan="5">COSTO MENSUAL TOTAL</th>

                <th colspan="4">COSTO DIARIO TOTAL</th>

            </tr>
            <tr>
                @if ($dato_prenda->cliente->socio == 0.02)
                <td colspan="5">Para fines informativos y de comparación: <br> <b>3.2917</b> % fijo sin IVA</td>

                <td colspan="4">Para fines informativos y de comparación: <br> <b>0.1097</b> % fijo sin IVA</td>
                @else
                @endif
                @if ($dato_prenda->cliente->socio == 0.025)
                <td colspan="5">Para fines informativos y de comparación: <br> <b>3.9083</b> % fijo sin IVA</td>

                <td colspan="4">Para fines informativos y de comparación: <br> <b>0.1303</b> % fijo sin IVA</td>
                @else
                @endif
            </tr>
            <tr>
                <td colspan="9">
                    <div class="iempresa text-center">
                        <strong>"Cuide su capacidad de pago, generalmente no debe exceder del 35% de sus ingresos". "Si usted no
                            paga en tiempo y forma corre el riesgo de perder sus prendas"</strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="9">
                    <div class="iempresa text-center">
                        <strong>GARANTÍA: Para garantizar el pago de este préstamo, el consumidor deja en garantía el bien que
                            se describe a continuación:</strong>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="9">
                    <b> DESCRIPCIÓN DE LA PRENDA</b>
                </td>
            </tr>
            <tr>
                <td><b>DESCRIPCIÓN</b></td>
                <td colspan="4"><b><b>CARACTERÍSTICAS</b></td>
                <td><b>AVALÚO</b></td>
                <td><b>PRÉSTAMO</b></td>
                <td colspan="2"><b>% PRÉSTAMO SOBRE AVALÚO</b></td>
            </tr>
            <tr class="margen">

                <th>
                    {{$dato_prenda->descripcion_generica}}
                </th>
                <td colspan="4" class="title3">
                    @if ($dato_prenda->status ==1)
                    Can. {{$dato_prenda->cantidad_prenda}}, {{$dato_prenda->caracteristicas_prenda}}
                    @else
                    Can. {{$dato_prenda->cantidad_prenda}}, {{$dato_prenda->nombre_prenda}}, {{$dato_prenda->kilataje_prenda}} k, {{$dato_prenda->gramaje_prenda}} gr, Completo.
                    @endif



                </td>
                <td>{{toMoney($dato_prenda->avaluo_prenda)}}</td>
                <td>{{toMoney($dato_prenda->prestamo_prenda)}}</td>
                <td colspan="2">{{$dato_prenda->porcentaje_prestamo_sobre_avaluo}} %</td>
            </tr>
            <tr>
                <td class="iempresa" colspan="5">Monto de avaluó: </td>
                <td colspan="4"><b>{{toMoney($dato_prenda->avaluo_prenda)}} Son: {{num2letras($dato_prenda->avaluo_prenda)}}</b></td>
            </tr>
            <tr>
                <td class="iempresa" colspan="5">Porcentaje del préstamo sobre el avaluó: </td>
                <td colspan="4"><b>{{$dato_prenda->porcentaje_prestamo_sobre_avaluo}} %</b></td>
            </tr>
            <tr>
                <td class="iempresa" colspan="5">Fecha de inicio de comercialización:</td>
                <td colspan="4">
                    <b>
                        {{ \Carbon\Carbon::parse($dato_prenda->fecha_comercializacion)->formatLocalized('%d-%B-%Y')}}
                    </b>
                </td>
            </tr>
            <tr>
                <td class="iempresa text-center" colspan="5">El monto del préstamo se realiza en:</td>
                <td class="iempresa text-center" colspan="4">Efectivo:&nbsp;<u>&nbsp;&nbsp; X &nbsp;&nbsp;</u>&nbsp;o a la cuenta bancaria del Consumidor al
                    <br>numero:
                </td>
            </tr>
            <tr>
                <td class="iempresa" colspan="5">Fecha límite de finiquito:</td>
                <td class="iempresa text-center" colspan="4">
                    <b>
                        {{ \Carbon\Carbon::parse($dato_prenda->mes5)->formatLocalized('%d-%B-%Y')}}
                    </b>
                </td>
            </tr>
            <tr>
                <td colspan="9">
                    @if ($dato_prenda->cliente->socio == 0.02)
                    Terminos y condiciones para recibir pagos anticipados: Clausula 13 (decimo tercera,
                    inciso b.) Pág. 5)
                    @else
                    @endif
                    @if ($dato_prenda->cliente->socio == 0.025)
                    Terminos y condiciones para recibir pagos anticipados: Clausula 13 (decimo tercera,
                    inciso b.)

                    @else
                    @endif

                </td>
            </tr>
        </table>
        <div class="d-flex justify-content-between">
        <p class="letrapequeña p-2">Estos conceptos causaran el pago de impuesto al valor agregado (IVA) a la tasa del
            16.00
            %
            <br>
            <?php
            $DateAndTime = date('d/m/Y h:i:s a', time());
            echo "$DateAndTime.";
            ?>
        </p>
        <p class="letrapequeña p-2">User: {{ Auth::user()->name }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pág. 1/6 </p>
        </div> 
        
        
        <!-- -------/SEGUNDO APARTADO/-------- -->
        <br>
        <br>
        <div class="letrapequeña mt-3"> *El procedimiento para desempeño, refrendo, finiquito y reclamo del remanente se encuentra descrito en el contrato</div>
        <table>
            <tr>
                <td colspan="9">
                    <div class="iempresa">
                        <b>Dudas, aclaraciones y reclamaciones:</b>
                        <br>
                        <p>*Para cualquier duda, aclaraciones o reclamación, favor de dirigirse a : <b>Calle 23 Nº 100-B x 18 y 20 Col. Centro, Umán, Yucatán, C.P. 97390;</b> teléfono: 988 933 0223, correo
                            <br> electrónico: asociadosnm2018@gmail.com;en un horario de <b>Lun a Mié 8:00 a 11:30 hras y 3:30 a 6:00 hras, Jue a Vie 8:00 a 1200 hras y Sab 3:00 a 6:00 hras.</b>
                        </p>
                        <div>*O en caso a <b>PROFECO</b> en los teléfonos: <b>55 68 87 22 o al 01-800-468-87-22</b>, pagina de internet: <b>www.gob.mx./profeco</b></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="9">
                    <div class="iempresa">
                        <b>Estado de cuenta/consulta de movimientos: Consulta en sucursal</b>
                    </div>
                </td>

            </tr>
            <tr>
                <td colspan="9">
                    <div>
                        Contrato de Adhesión registrado en el Registro Publico de Contratos de Adhesión de la Procuraduría Federal del Consumidor, EN TRAMITE El proveedor tiene la obligación de entregar al consumidor el documento en el cual se señale la descripción del préstamo, saldos, movimientos y la descripción de la Prenda en garantía.
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div class="text-center">
                        <b>DESEMPEÑO</b>
                    </div>
                </td>
                <td colspan="4">
                    <div class="text-center">
                        <b>FIRMAS</b>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    EL CONSUMIDOR recoge en el acto y su entera satisfaccíon la(s) prenda(s) arriba <br>
                    descrita(s), por lo que otorga a <b>ASOCIADOS NUEVA MUTUA S.A. DE C.V.</b>, el finiquito <br>
                    más amplio que en derecho corresponda, liberandolo de cualquier responsabilidad <br>
                    jurídica que hubiera surgido o pudiese surgir en relación al contrato y la prenda.
                </td>
                <td colspan="2" class="text-center">
                    {{$dato_prenda->fecha_prestamo}}
                    <br>
                    <br>
                    <br>
                    ____________________________________________ <br>
                    <b>EL CONSUMIDOR</b>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">
                    <br>
                    <br>
                    <br>
                    <b>EL CONSUMIDOR</b>
                </td>
                <td colspan="2" class="text-center">
                    <br>
                    <br>
                    <br>
                    <b>EL PROVEEDOR</b>
                </td>
                <td class="text-center">
                    <br>
                    <br>
                    <br>
                    <b>EL VALUADOR</b>
                </td>
            </tr>
        </table>
        <div class="letrapequeña2 mt-2">
            EL HORARIO DE SERVICIO AL publico EN ESTE ESTABLECIMIENTO ES DE: <b>LUNES A MIÉRCOLES DE 8:00 A 11:30 HRS Y 3:30 A 6:00 HRS, JUEVES A VIERNES DE 8:00 A 12:00 HRS Y SÁBADOS DE 3:00 A 6:00 HRS.</b> Para todo lo relativo
            a la interpretación, aplicación y cumplimiento del contrato, LAS PARTES acuerdan someterse en la via administrativa a la Procuraduría Federal del Consumidor, y en caso de subsistir diferencias, a la jurisdicción de los tribunales competentes del lugar donde se celebra este contrato.
        </div>
        <p class="letrapequeña mt-4">
            <?php
            $DateAndTime = date('d/m/Y h:i:s a', time());
            echo "$DateAndTime.";
            ?>
        </p>
        <p class="letrapequeña text-start">Fin de texto de Pág 2/6 </p>
        <p class="letrapequeña text-end">User: {{ Auth::user()->name }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pág. 2/6 </p>

</div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="{{ asset('dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('dist/js/jquery.min.js') }}"></script>


</html>