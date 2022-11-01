<DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">

        <title>Casa de Empeño Asociados Nueva Mutua.</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet"
            type="text/css">
        <link rel="stylesheet" href="{{ asset('dist/css/estilosBoleta3.css') }}">
        <script type="text/javascript" src="/JavaScript.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
        <!--Boostrap-->
        <link href="{{ asset('dist/fontawesome/css/all.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
            integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
        </script>
    </head>
    <style>
        .textderecha {
            text-align: right;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        .textaling {
            text-align: center;
        }

        .letrai {
            font-size: 6px;
        }

        .letraii {
            font-size: 5px;
        }

        div img {
            height: 25px;
            width: 25px;
        }

        table {
            padding: 0;
            margin: 0;
        }
    </style>





    <body>

        @can('impresion-cotizacion')

            @if ($dato_tickecoti->nombre_prenda_2 == null)
                <table>{{-- /1/ --}}
                    <tr>
                        <td colspan="4">
                            <header>
                                <div class="letraii">
                                    &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                </div>
                                <div class="letrai">
                                    Asociados Nueva Mutua S.A. DE C.V. <br>
                                    RFC: ANM-180517PD6 <br>
                                    Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                    Col. Centro, Umán, Yucatán, C.P. 97390

                                </div>
                                <div>
                                    <img src="{{ asset('img/FONDO.png') }}" alt="">
                                </div>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda }}</td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                    </tr>
                    <tr class="text-center">
                        <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1 }}</td>
                        <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2 }}</td>
                        <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3 }}</td>
                        <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4 }}</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->promedio_prenda }}</td>
                        <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->kilataje_prenda }} k</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}: &nbsp;&nbsp;
                        </td>
                        <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata) }}</td>
                        <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->gramaje_prenda }} gr</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                        <td class="text-center"> N/A</td>
                        <td rowspan="3" colspan="2" class="textaling fw-bold">
                            <br><br> ____________________________________ <br>
                            FIRMA DE PERITO VALUADOR
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            @if ($dato_tickecoti->lote == 1)
                                {{ toMoney($dato_tickecoti->prestamo_ava) }}
                            @else
                                {{ toMoney($dato_tickecoti->avaluo_prenda) }}
                            @endif

                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            @if ($dato_tickecoti->lote == 1)
                                {{ toMoney($dato_tickecoti->prestamo_lote) }}
                            @else
                                {{ toMoney($dato_tickecoti->prestamo_prenda) }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">
                            USUARIO: {{ Auth::user()->name }}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">

                            Fecha de impresión: Umán, Yuc a
                            <script type="text/javascript">
                                var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                    "Octubre", "Noviembre", "Diciembre");
                                var f = new Date();
                                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                            </script>
                        </th>
                    </tr>
                </table>
            @elseif($dato_tickecoti->nombre_prenda_3 == null)
                <table>{{-- /2/ --}}
                    <tr>
                        <td colspan="4">
                            <header>
                                <div class="letraii">
                                    &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                </div>
                             
                                <div class="letrai">
                                    Asociados Nueva Mutua S.A. DE C.V. <br>
                                    RFC: ANM-180517PD6 <br>
                                    Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                    Col. Centro, Umán, Yucatán, C.P. 97390

                                </div>
                                <div>
                                    <img src="{{ asset('img/FONDO.png') }}" alt="">
                                </div>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda }}</td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                    </tr>
                    <tr class="text-center">
                        <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1 }}</td>
                        <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2 }}</td>
                        <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3 }}</td>
                        <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4 }}</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->promedio_prenda }}</td>
                        <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->kilataje_prenda }} k</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}: &nbsp;&nbsp;
                        </td>
                        <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata) }}</td>
                        <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->gramaje_prenda }} gr</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                        <td class="text-center"> N/A</td>
                        <td rowspan="3" colspan="2" class="textaling fw-bold">
                            <br><br> ____________________________________ <br>
                            FIRMA DE PERITO VALUADOR
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            @if ($dato_tickecoti->lote == 1)
                                {{ toMoney($dato_tickecoti->prestamo_ava) }}
                            @else
                                {{ toMoney($dato_tickecoti->avaluo_prenda) }}
                            @endif

                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            @if ($dato_tickecoti->lote == 1)
                                {{ toMoney($dato_tickecoti->prestamo_lote) }}
                            @else
                                {{ toMoney($dato_tickecoti->prestamo_prenda) }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">
                            USUARIO: {{ Auth::user()->name }}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">

                            Fecha de impresión: Umán, Yuc a
                            <script type="text/javascript">
                                var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                    "Octubre", "Noviembre", "Diciembre");
                                var f = new Date();
                                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                            </script>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <header>
                                <div class="letraii">
                                    &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                </div>
                                <div class="letrai">
                                    Asociados Nueva Mutua S.A. DE C.V. <br>
                                    RFC: ANM-180517PD6 <br>
                                    Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                    Col. Centro, Umán, Yucatán, C.P. 97390

                                </div>
                                <div>
                                    <img src="{{ asset('img/FONDO.png') }}" alt="">
                                </div>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda_2 }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda_2 }}</td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                    </tr>
                    <tr class="text-center">
                        <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1_2 }}</td>
                        <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2_2 }}</td>
                        <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3_2 }}</td>
                        <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4_2 }}</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->promedio_prenda_2 }}</td>
                        <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->kilataje_prenda_2 }} k</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}: &nbsp;&nbsp;
                        </td>
                        <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata_2) }}</td>
                        <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->gramaje_prenda_2 }} gr</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                        <td class="text-center"> N/A</td>
                        <td rowspan="3" colspan="2" class="textaling fw-bold">
                            <br><br> ____________________________________ <br>
                            FIRMA DE PERITO VALUADOR
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->avaluo_prenda_2) }}
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->prestamo_prenda_2) }}
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">
                            USUARIO: {{ Auth::user()->name }}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">

                            Fecha de impresión: Umán, Yuc a
                            <script type="text/javascript">
                                var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                    "Octubre", "Noviembre", "Diciembre");
                                var f = new Date();
                                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                            </script>
                        </th>
                    </tr>
                </table>
            @elseif($dato_tickecoti->nombre_prenda_4 == null)
                <table>{{-- /3/ --}}
                    <tr>
                        <td colspan="4">
                            <header>
                                <div class="letraii">
                                    &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                </div>
                                <div class="letrai">
                                    Asociados Nueva Mutua S.A. DE C.V. <br>
                                    RFC: ANM-180517PD6 <br>
                                    Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                    Col. Centro, Umán, Yucatán, C.P. 97390

                                </div>
                                <div>
                                    <img src="{{ asset('img/FONDO.png') }}" alt="">
                                </div>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda }}</td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                    </tr>
                    <tr class="text-center">
                        <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1 }}</td>
                        <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2 }}</td>
                        <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3 }}</td>
                        <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4 }}</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->promedio_prenda }}</td>
                        <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->kilataje_prenda }} k</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}: &nbsp;&nbsp;
                        </td>
                        <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata) }}</td>
                        <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->gramaje_prenda }} gr</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                        <td class="text-center"> N/A</td>
                        <td rowspan="3" colspan="2" class="textaling fw-bold">
                            <br><br> ____________________________________ <br>
                            FIRMA DE PERITO VALUADOR
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            @if ($dato_tickecoti->lote == 1)
                                {{ toMoney($dato_tickecoti->prestamo_ava) }}
                            @else
                                {{ toMoney($dato_tickecoti->avaluo_prenda) }}
                            @endif

                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            @if ($dato_tickecoti->lote == 1)
                                {{ toMoney($dato_tickecoti->prestamo_lote) }}
                            @else
                                {{ toMoney($dato_tickecoti->prestamo_prenda) }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">
                            USUARIO: {{ Auth::user()->name }}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">

                            Fecha de impresión: Umán, Yuc a
                            <script type="text/javascript">
                                var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                    "Octubre", "Noviembre", "Diciembre");
                                var f = new Date();
                                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                            </script>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <header>
                                <div class="letraii">
                                    &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                </div>
                                <div class="letrai">
                                    Asociados Nueva Mutua S.A. DE C.V. <br>
                                    RFC: ANM-180517PD6 <br>
                                    Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                    Col. Centro, Umán, Yucatán, C.P. 97390

                                </div>
                                <div>
                                    <img src="{{ asset('img/FONDO.png') }}" alt="">
                                </div>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda_2 }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda_2 }}</td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                    </tr>
                    <tr class="text-center">
                        <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1_2 }}</td>
                        <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2_2 }}</td>
                        <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3_2 }}</td>
                        <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4_2 }}</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->promedio_prenda_2 }}</td>
                        <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->kilataje_prenda_2 }} k</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}: &nbsp;&nbsp;
                        </td>
                        <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata_2) }}</td>
                        <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->gramaje_prenda_2 }} gr</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                        <td class="text-center"> N/A</td>
                        <td rowspan="3" colspan="2" class="textaling fw-bold">
                            <br><br> ____________________________________ <br>
                            FIRMA DE PERITO VALUADOR
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->avaluo_prenda_2) }}
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->prestamo_prenda_2) }}
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">
                            USUARIO: {{ Auth::user()->name }}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">

                            Fecha de impresión: Umán, Yuc a
                            <script type="text/javascript">
                                var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                    "Octubre", "Noviembre", "Diciembre");
                                var f = new Date();
                                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                            </script>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <header>
                                <div>
                                    &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                </div>
                                <div class="letrai">
                                    Asociados Nueva Mutua S.A. DE C.V. <br>
                                    RFC: ANM-180517PD6 <br>
                                    Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                    Col. Centro, Umán, Yucatán, C.P. 97390

                                </div>
                                <div>
                                    <img src="{{ asset('img/FONDO.png') }}" alt="">
                                </div>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda_3 }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda_3 }}</td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                    </tr>
                    <tr class="text-center">
                        <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1_3 }}</td>
                        <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2_3 }}</td>
                        <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3_3 }}</td>
                        <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4_3 }}</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->promedio_prenda_3 }}</td>
                        <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->kilataje_prenda_3 }} k</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}: &nbsp;&nbsp;
                        </td>
                        <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata_3) }}</td>
                        <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->gramaje_prenda_3 }} gr</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                        <td class="text-center"> N/A</td>
                        <td rowspan="3" colspan="2" class="textaling fw-bold">
                            <br><br> ____________________________________ <br>
                            FIRMA DE PERITO VALUADOR
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->avaluo_prenda_3) }}
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->prestamo_prenda_3) }}
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">
                            USUARIO: {{ Auth::user()->name }}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">

                            Fecha de impresión: Umán, Yuc a
                            <script type="text/javascript">
                                var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                    "Octubre", "Noviembre", "Diciembre");
                                var f = new Date();
                                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                            </script>
                        </th>
                    </tr>
                </table>
            @elseif($dato_tickecoti->nombre_prenda_5 == null)
                <div class="d-flex">
                    <table>{{-- /4/ --}}
                        <tr>
                            <td colspan="4">
                                <header>
                                    <div class="letraii">
                                        &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                    </div>
                                    <div class="letrai">
                                        Asociados Nueva Mutua S.A. DE C.V. <br>
                                        RFC: ANM-180517PD6 <br>
                                        Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                        Col. Centro, Umán, Yucatán, C.P. 97390

                                    </div>
                                    <div>
                                        <img src="{{ asset('img/FONDO.png') }}" alt="">
                                    </div>
                                </header>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda }}</td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                        </tr>
                        <tr class="text-center">
                            <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1 }}</td>
                            <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2 }}</td>
                            <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3 }}</td>
                            <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4 }}</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->promedio_prenda }}</td>
                            <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->kilataje_prenda }} k</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}:
                                &nbsp;&nbsp;
                            </td>
                            <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata) }}</td>
                            <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->gramaje_prenda }} gr</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                            <td class="text-center"> N/A</td>
                            <td rowspan="3" colspan="2" class="textaling fw-bold">
                                <br><br> ____________________________________ <br>
                                FIRMA DE PERITO VALUADOR
                            </td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                            <td class="text-center">
                                @if ($dato_tickecoti->lote == 1)
                                    {{ toMoney($dato_tickecoti->prestamo_ava) }}
                                @else
                                    {{ toMoney($dato_tickecoti->avaluo_prenda) }}
                                @endif

                            </td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                            <td class="text-center">
                                @if ($dato_tickecoti->lote == 1)
                                    {{ toMoney($dato_tickecoti->prestamo_lote) }}
                                @else
                                    {{ toMoney($dato_tickecoti->prestamo_prenda) }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center">
                                USUARIO: {{ Auth::user()->name }}
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center">

                                Fecha de impresión: Umán, Yuc a
                                <script type="text/javascript">
                                    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                        "Octubre", "Noviembre", "Diciembre");
                                    var f = new Date();
                                    document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                                </script>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <header>
                                    <div class="letraii">
                                        &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                    </div>
                                    <div class="letrai">
                                        Asociados Nueva Mutua S.A. DE C.V. <br>
                                        RFC: ANM-180517PD6 <br>
                                        Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                        Col. Centro, Umán, Yucatán, C.P. 97390

                                    </div>
                                    <div>
                                        <img src="{{ asset('img/FONDO.png') }}" alt="">
                                    </div>
                                </header>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda_2 }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda_2 }}</td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                        </tr>
                        <tr class="text-center">
                            <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1_2 }}</td>
                            <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2_2 }}</td>
                            <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3_2 }}</td>
                            <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4_2 }}</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->promedio_prenda_2 }}</td>
                            <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->kilataje_prenda_2 }} k</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}:
                                &nbsp;&nbsp;
                            </td>
                            <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata_2) }}</td>
                            <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->gramaje_prenda_2 }} gr</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                            <td class="text-center"> N/A</td>
                            <td rowspan="3" colspan="2" class="textaling fw-bold">
                                <br><br> ____________________________________ <br>
                                FIRMA DE PERITO VALUADOR
                            </td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                            <td class="text-center">
                                {{ toMoney($dato_tickecoti->avaluo_prenda_2) }}
                            </td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                            <td class="text-center">
                                {{ toMoney($dato_tickecoti->prestamo_prenda_2) }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center">
                                USUARIO: {{ Auth::user()->name }}
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center">

                                Fecha de impresión: Umán, Yuc a
                                <script type="text/javascript">
                                    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                        "Octubre", "Noviembre", "Diciembre");
                                    var f = new Date();
                                    document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                                </script>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <header>
                                    <div>
                                        &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                    </div>
                                    <div class="letrai">
                                        Asociados Nueva Mutua S.A. DE C.V. <br>
                                        RFC: ANM-180517PD6 <br>
                                        Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                        Col. Centro, Umán, Yucatán, C.P. 97390

                                    </div>
                                    <div>
                                        <img src="{{ asset('img/FONDO.png') }}" alt="">
                                    </div>
                                </header>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda_3 }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda_3 }}</td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                        </tr>
                        <tr class="text-center">
                            <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1_3 }}</td>
                            <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2_3 }}</td>
                            <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3_3 }}</td>
                            <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4_3 }}</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->promedio_prenda_3 }}</td>
                            <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->kilataje_prenda_3 }} k</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}:
                                &nbsp;&nbsp;
                            </td>
                            <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata_3) }}</td>
                            <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->gramaje_prenda_3 }} gr</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                            <td class="text-center"> N/A</td>
                            <td rowspan="3" colspan="2" class="textaling fw-bold">
                                <br><br> ____________________________________ <br>
                                FIRMA DE PERITO VALUADOR
                            </td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                            <td class="text-center">
                                {{ toMoney($dato_tickecoti->avaluo_prenda_3) }}
                            </td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                            <td class="text-center">
                                {{ toMoney($dato_tickecoti->prestamo_prenda_3) }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center">
                                USUARIO: {{ Auth::user()->name }}
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center">

                                Fecha de impresión: Umán, Yuc a
                                <script type="text/javascript">
                                    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                        "Octubre", "Noviembre", "Diciembre");
                                    var f = new Date();
                                    document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                                </script>
                            </th>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td colspan="4">
                                <header>
                                    <div>
                                        &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                    </div>
                                    <div class="letrai">
                                        Asociados Nueva Mutua S.A. DE C.V. <br>
                                        RFC: ANM-180517PD6 <br>
                                        Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                        Col. Centro, Umán, Yucatán, C.P. 97390

                                    </div>
                                    <div>
                                        <img src="{{ asset('img/FONDO.png') }}" alt="">
                                    </div>
                                </header>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda_4 }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda_4 }}</td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                        </tr>
                        <tr class="text-center">
                            <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1_4 }}</td>
                            <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2_4 }}</td>
                            <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3_4 }}</td>
                            <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4_4 }}</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->promedio_prenda_4 }}</td>
                            <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->kilataje_prenda_4 }} k</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}:
                                &nbsp;&nbsp;
                            </td>
                            <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata_4) }}</td>
                            <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->gramaje_prenda_4 }} gr</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                            <td class="text-center"> N/A</td>
                            <td rowspan="3" colspan="2" class="textaling fw-bold">
                                <br><br> ____________________________________ <br>
                                FIRMA DE PERITO VALUADOR
                            </td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                            <td class="text-center">
                                {{ toMoney($dato_tickecoti->avaluo_prenda_4) }}
                            </td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                            <td class="text-center">
                                {{ toMoney($dato_tickecoti->prestamo_prenda_4) }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center">
                                USUARIO: {{ Auth::user()->name }}
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center">

                                Fecha de impresión: Umán, Yuc a
                                <script type="text/javascript">
                                    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                        "Octubre", "Noviembre", "Diciembre");
                                    var f = new Date();
                                    document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                                </script>
                            </th>
                        </tr>
                    </table>
                </div>
                </table>
            @elseif($dato_tickecoti->nombre_prenda_6 == null)
            <div class="d-flex">  
            <table>{{-- /5/ --}}
                    <tr>
                        <td colspan="4">
                            <header>
                                <div class="letraii">
                                    &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                </div>
                                <div class="letrai">
                                    Asociados Nueva Mutua S.A. DE C.V. <br>
                                    RFC: ANM-180517PD6 <br>
                                    Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                    Col. Centro, Umán, Yucatán, C.P. 97390

                                </div>
                                <div>
                                    <img src="{{ asset('img/FONDO.png') }}" alt="">
                                </div>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda }}</td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                    </tr>
                    <tr class="text-center">
                        <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1 }}</td>
                        <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2 }}</td>
                        <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3 }}</td>
                        <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4 }}</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->promedio_prenda }}</td>
                        <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->kilataje_prenda }} k</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}: &nbsp;&nbsp;
                        </td>
                        <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata) }}</td>
                        <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->gramaje_prenda }} gr</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                        <td class="text-center"> N/A</td>
                        <td rowspan="3" colspan="2" class="textaling fw-bold">
                            <br><br> ____________________________________ <br>
                            FIRMA DE PERITO VALUADOR
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            @if ($dato_tickecoti->lote == 1)
                                {{ toMoney($dato_tickecoti->prestamo_ava) }}
                            @else
                                {{ toMoney($dato_tickecoti->avaluo_prenda) }}
                            @endif

                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            @if ($dato_tickecoti->lote == 1)
                                {{ toMoney($dato_tickecoti->prestamo_lote) }}
                            @else
                                {{ toMoney($dato_tickecoti->prestamo_prenda) }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">
                            USUARIO: {{ Auth::user()->name }}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">

                            Fecha de impresión: Umán, Yuc a
                            <script type="text/javascript">
                                var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                    "Octubre", "Noviembre", "Diciembre");
                                var f = new Date();
                                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                            </script>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <header>
                                <div class="letraii">
                                    &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                </div>
                                <div class="letrai">
                                    Asociados Nueva Mutua S.A. DE C.V. <br>
                                    RFC: ANM-180517PD6 <br>
                                    Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                    Col. Centro, Umán, Yucatán, C.P. 97390

                                </div>
                                <div>
                                    <img src="{{ asset('img/FONDO.png') }}" alt="">
                                </div>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda_2 }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda_2 }}</td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                    </tr>
                    <tr class="text-center">
                        <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1_2 }}</td>
                        <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2_2 }}</td>
                        <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3_2 }}</td>
                        <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4_2 }}</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->promedio_prenda_2 }}</td>
                        <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->kilataje_prenda_2 }} k</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}: &nbsp;&nbsp;
                        </td>
                        <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata_2) }}</td>
                        <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->gramaje_prenda_2 }} gr</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                        <td class="text-center"> N/A</td>
                        <td rowspan="3" colspan="2" class="textaling fw-bold">
                            <br><br> ____________________________________ <br>
                            FIRMA DE PERITO VALUADOR
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->avaluo_prenda_2) }}
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->prestamo_prenda_2) }}
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">
                            USUARIO: {{ Auth::user()->name }}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">

                            Fecha de impresión: Umán, Yuc a
                            <script type="text/javascript">
                                var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                    "Octubre", "Noviembre", "Diciembre");
                                var f = new Date();
                                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                            </script>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <header>
                                <div>
                                    &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                </div>
                                <div class="letrai">
                                    Asociados Nueva Mutua S.A. DE C.V. <br>
                                    RFC: ANM-180517PD6 <br>
                                    Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                    Col. Centro, Umán, Yucatán, C.P. 97390

                                </div>
                                <div>
                                    <img src="{{ asset('img/FONDO.png') }}" alt="">
                                </div>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda_3 }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda_3 }}</td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                    </tr>
                    <tr class="text-center">
                        <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1_3 }}</td>
                        <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2_3 }}</td>
                        <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3_3 }}</td>
                        <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4_3 }}</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->promedio_prenda_3 }}</td>
                        <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->kilataje_prenda_3 }} k</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}: &nbsp;&nbsp;
                        </td>
                        <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata_3) }}</td>
                        <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->gramaje_prenda_3 }} gr</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                        <td class="text-center"> N/A</td>
                        <td rowspan="3" colspan="2" class="textaling fw-bold">
                            <br><br> ____________________________________ <br>
                            FIRMA DE PERITO VALUADOR
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->avaluo_prenda_3) }}
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->prestamo_prenda_3) }}
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">
                            USUARIO: {{ Auth::user()->name }}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">

                            Fecha de impresión: Umán, Yuc a
                            <script type="text/javascript">
                                var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                    "Octubre", "Noviembre", "Diciembre");
                                var f = new Date();
                                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                            </script>
                        </th>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td colspan="4">
                            <header>
                                <div>
                                    &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                </div>
                                <div class="letrai">
                                    Asociados Nueva Mutua S.A. DE C.V. <br>
                                    RFC: ANM-180517PD6 <br>
                                    Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                    Col. Centro, Umán, Yucatán, C.P. 97390

                                </div>
                                <div>
                                    <img src="{{ asset('img/FONDO.png') }}" alt="">
                                </div>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda_4 }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda_4 }}</td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                    </tr>
                    <tr class="text-center">
                        <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1_4 }}</td>
                        <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2_4 }}</td>
                        <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3_4 }}</td>
                        <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4_4 }}</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->promedio_prenda_4 }}</td>
                        <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->kilataje_prenda_4 }} k</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}: &nbsp;&nbsp;
                        </td>
                        <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata_4) }}</td>
                        <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->gramaje_prenda_4 }} gr</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                        <td class="text-center"> N/A</td>
                        <td rowspan="3" colspan="2" class="textaling fw-bold">
                            <br><br> ____________________________________ <br>
                            FIRMA DE PERITO VALUADOR
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->avaluo_prenda_4) }}
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->prestamo_prenda_4) }}
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">
                            USUARIO: {{ Auth::user()->name }}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">

                            Fecha de impresión: Umán, Yuc a
                            <script type="text/javascript">
                                var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                    "Octubre", "Noviembre", "Diciembre");
                                var f = new Date();
                                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                            </script>
                        </th>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <header>
                                <div>
                                    &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                </div>
                                <div class="letrai">
                                    Asociados Nueva Mutua S.A. DE C.V. <br>
                                    RFC: ANM-180517PD6 <br>
                                    Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                    Col. Centro, Umán, Yucatán, C.P. 97390

                                </div>
                                <div>
                                    <img src="{{ asset('img/FONDO.png') }}" alt="">
                                </div>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda_5 }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda_5 }}</td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                    </tr>
                    <tr class="text-center">
                        <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1_5 }}</td>
                        <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2_5 }}</td>
                        <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3_5 }}</td>
                        <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4_5 }}</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->promedio_prenda_5 }}</td>
                        <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->kilataje_prenda_5 }} k</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}: &nbsp;&nbsp;
                        </td>
                        <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata_5) }}</td>
                        <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->gramaje_prenda_5 }} gr</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                        <td class="text-center"> N/A</td>
                        <td rowspan="3" colspan="2" class="textaling fw-bold">
                            <br><br> ____________________________________ <br>
                            FIRMA DE PERITO VALUADOR
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->avaluo_prenda_5) }}
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->prestamo_prenda_5) }}
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">
                            USUARIO: {{ Auth::user()->name }}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">

                            Fecha de impresión: Umán, Yuc a
                            <script type="text/javascript">
                                var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                    "Octubre", "Noviembre", "Diciembre");
                                var f = new Date();
                                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                            </script>
                        </th>
                    </tr>

                </table>
            </div>
            @else
                <div class="d-flex">

                    <table>
                        <tr>
                            <td colspan="4">
                                <header>
                                    <div class="letraii">
                                        &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                    </div>
                                    <div class="letrai">
                                        Asociados Nueva Mutua S.A. DE C.V. <br>
                                        RFC: ANM-180517PD6 <br>
                                        Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                        Col. Centro, Umán, Yucatán, C.P. 97390

                                    </div>
                                    <div>
                                        <img src="{{ asset('img/FONDO.png') }}" alt="">
                                    </div>
                                </header>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda }}</td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                        </tr>
                        <tr class="text-center">
                            <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1 }}</td>
                            <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2 }}</td>
                            <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3 }}</td>
                            <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4 }}</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->promedio_prenda }}</td>
                            <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->kilataje_prenda }} k</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}:
                                &nbsp;&nbsp;
                            </td>
                            <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata) }}</td>
                            <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->gramaje_prenda }} gr</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                            <td class="text-center"> N/A</td>
                            <td rowspan="3" colspan="2" class="textaling fw-bold">
                                <br><br> ____________________________________ <br>
                                FIRMA DE PERITO VALUADOR
                            </td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                            <td class="text-center">
                                @if ($dato_tickecoti->lote == 1)
                                    {{ toMoney($dato_tickecoti->prestamo_ava) }}
                                @else
                                    {{ toMoney($dato_tickecoti->avaluo_prenda) }}
                                @endif

                            </td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                            <td class="text-center">
                                @if ($dato_tickecoti->lote == 1)
                                    {{ toMoney($dato_tickecoti->prestamo_lote) }}
                                @else
                                    {{ toMoney($dato_tickecoti->prestamo_prenda) }}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center">
                                USUARIO: {{ Auth::user()->name }}
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center">

                                Fecha de impresión: Umán, Yuc a
                                <script type="text/javascript">
                                    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                        "Octubre", "Noviembre", "Diciembre");
                                    var f = new Date();
                                    document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                                </script>
                            </th>
                        </tr>

                        {{-- /00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000/ --}}

                        <tr>
                            <td colspan="4">
                                <header>
                                    <div class="letraii">
                                        &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                    </div>
                                    <div class="letrai">
                                        Asociados Nueva Mutua S.A. DE C.V. <br>
                                        RFC: ANM-180517PD6 <br>
                                        Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                        Col. Centro, Umán, Yucatán, C.P. 97390

                                    </div>
                                    <div>
                                        <img src="{{ asset('img/FONDO.png') }}" alt="">
                                    </div>
                                </header>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda_2 }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                            <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda_2 }}</td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                        </tr>
                        <tr class="text-center">
                            <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1_2 }}</td>
                            <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2_2 }}</td>
                            <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3_2 }}</td>
                            <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4_2 }}</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->promedio_prenda_2 }}</td>
                            <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->kilataje_prenda_2 }} k</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}:
                                &nbsp;&nbsp;
                            </td>
                            <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata_2) }}</td>
                            <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                            <td class="text-center">{{ $dato_tickecoti->gramaje_prenda_2 }} gr</td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                            <td class="text-center"> N/A</td>
                            <td rowspan="3" colspan="2" class="textaling fw-bold">
                                <br><br> ____________________________________ <br>
                                FIRMA DE PERITO VALUADOR
                            </td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                            <td class="text-center">
                                {{ toMoney($dato_tickecoti->avaluo_prenda_2) }}
                            </td>
                        </tr>
                        <tr>
                            <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                            <td class="text-center">
                                {{ toMoney($dato_tickecoti->prestamo_prenda_2) }}
                            </td>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center">
                                USUARIO: {{ Auth::user()->name }}
                            </th>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-center">

                                Fecha de impresión: Umán, Yuc a
                                <script type="text/javascript">
                                    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                        "Octubre", "Noviembre", "Diciembre");
                                    var f = new Date();
                                    document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                                </script>
                            </th>
                        </tr>

                </div>
                {{-- /00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000/ --}}


                <tr>
                    <td colspan="4">
                        <header>
                            <div>
                                &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                            </div>
                            <div class="letrai">
                                Asociados Nueva Mutua S.A. DE C.V. <br>
                                RFC: ANM-180517PD6 <br>
                                Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                Col. Centro, Umán, Yucatán, C.P. 97390

                            </div>
                            <div>
                                <img src="{{ asset('img/FONDO.png') }}" alt="">
                            </div>
                        </header>
                    </td>
                </tr>
                <tr>
                    <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                </tr>
                <tr>
                    <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                    <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                    <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda_3 }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                    <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda_3 }}</td>
                </tr>
                <tr>
                    <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                </tr>
                <tr class="text-center">
                    <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1_3 }}</td>
                    <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2_3 }}</td>
                    <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3_3 }}</td>
                    <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4_3 }}</td>
                </tr>
                <tr>
                    <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                    <td class="text-center">{{ $dato_tickecoti->promedio_prenda_3 }}</td>
                    <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                    <td class="text-center">{{ $dato_tickecoti->kilataje_prenda_3 }} k</td>
                </tr>
                <tr>
                    <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}: &nbsp;&nbsp;
                    </td>
                    <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata_3) }}</td>
                    <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                    <td class="text-center">{{ $dato_tickecoti->gramaje_prenda_3 }} gr</td>
                </tr>
                <tr>
                    <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                    <td class="text-center"> N/A</td>
                    <td rowspan="3" colspan="2" class="textaling fw-bold">
                        <br><br> ____________________________________ <br>
                        FIRMA DE PERITO VALUADOR
                    </td>
                </tr>
                <tr>
                    <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                    <td class="text-center">
                        {{ toMoney($dato_tickecoti->avaluo_prenda_3) }}
                    </td>
                </tr>
                <tr>
                    <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                    <td class="text-center">
                        {{ toMoney($dato_tickecoti->prestamo_prenda_3) }}
                    </td>
                </tr>
                <tr>
                    <th colspan="4" class="text-center">
                        USUARIO: {{ Auth::user()->name }}
                    </th>
                </tr>
                <tr>
                    <th colspan="4" class="text-center">

                        Fecha de impresión: Umán, Yuc a
                        <script type="text/javascript">
                            var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                "Octubre", "Noviembre", "Diciembre");
                            var f = new Date();
                            document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                        </script>
                    </th>
                </tr>
                </table>
                <div>&nbsp;</div>
                {{-- /00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000/ --}}
                <table>
                    <tr>
                        <td colspan="4">
                            <header>
                                <div>
                                    &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                </div>
                                <div class="letrai">
                                    Asociados Nueva Mutua S.A. DE C.V. <br>
                                    RFC: ANM-180517PD6 <br>
                                    Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                    Col. Centro, Umán, Yucatán, C.P. 97390

                                </div>
                                <div>
                                    <img src="{{ asset('img/FONDO.png') }}" alt="">
                                </div>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda_4 }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda_4 }}</td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                    </tr>
                    <tr class="text-center">
                        <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1_4 }}</td>
                        <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2_4 }}</td>
                        <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3_4 }}</td>
                        <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4_4 }}</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->promedio_prenda_4 }}</td>
                        <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->kilataje_prenda_4 }} k</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}: &nbsp;&nbsp;
                        </td>
                        <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata_4) }}</td>
                        <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->gramaje_prenda_4 }} gr</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                        <td class="text-center"> N/A</td>
                        <td rowspan="3" colspan="2" class="textaling fw-bold">
                            <br><br> ____________________________________ <br>
                            FIRMA DE PERITO VALUADOR
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->avaluo_prenda_4) }}
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->prestamo_prenda_4) }}
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">
                            USUARIO: {{ Auth::user()->name }}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">

                            Fecha de impresión: Umán, Yuc a
                            <script type="text/javascript">
                                var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                    "Octubre", "Noviembre", "Diciembre");
                                var f = new Date();
                                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                            </script>
                        </th>
                    </tr>

                    </div>
                    {{-- /00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000/ --}}

                    <tr>
                        <td colspan="4">
                            <header>
                                <div>
                                    &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                </div>
                                <div class="letrai">
                                    Asociados Nueva Mutua S.A. DE C.V. <br>
                                    RFC: ANM-180517PD6 <br>
                                    Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                    Col. Centro, Umán, Yucatán, C.P. 97390

                                </div>
                                <div>
                                    <img src="{{ asset('img/FONDO.png') }}" alt="">
                                </div>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda_5 }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda_5 }}</td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                    </tr>
                    <tr class="text-center">
                        <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1_5 }}</td>
                        <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2_5 }}</td>
                        <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3_5 }}</td>
                        <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4_5 }}</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->promedio_prenda_5 }}</td>
                        <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->kilataje_prenda_5 }} k</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}: &nbsp;&nbsp;
                        </td>
                        <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata_5) }}</td>
                        <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->gramaje_prenda_5 }} gr</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                        <td class="text-center"> N/A</td>
                        <td rowspan="3" colspan="2" class="textaling fw-bold">
                            <br><br> ____________________________________ <br>
                            FIRMA DE PERITO VALUADOR
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->avaluo_prenda_5) }}
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->prestamo_prenda_5) }}
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">
                            USUARIO: {{ Auth::user()->name }}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">

                            Fecha de impresión: Umán, Yuc a
                            <script type="text/javascript">
                                var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                    "Octubre", "Noviembre", "Diciembre");
                                var f = new Date();
                                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                            </script>
                        </th>
                    </tr>

                    {{-- /00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000/ --}}

                    <tr>
                        <td colspan="4">
                            <header>
                                <div>
                                    &nbsp;<h6>&nbsp;Folio:&nbsp;{{ $dato_tickecoti->id_cotizacionprenda }}</h6>

                                </div>
                                <div class="letrai">
                                    Asociados Nueva Mutua S.A. DE C.V. <br>
                                    RFC: ANM-180517PD6 <br>
                                    Matriz: Calle 23 Nº 100-B x 18 y20<br>
                                    Col. Centro, Umán, Yucatán, C.P. 97390

                                </div>
                                <div>
                                    <img src="{{ asset('img/FONDO.png') }}" alt="">
                                </div>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA PRENDA</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">FECHA DEL MOVIMIENTO: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->created_at->format('d-m-Y') }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">NOMBRE DE LA PRENDA: &nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->nombre_prenda_6 }}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="textderecha fw-bold">CARACTERISTICAS DE LA PRENDA:&nbsp;&nbsp;</td>
                        <td colspan="2" class="text-center">{{ $dato_tickecoti->caracteristicas_prenda_6 }}</td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center letraii">DATOS DE LA MAQUINA</th>
                    </tr>
                    <tr class="text-center">
                        <td> <strong>1)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_1_6 }}</td>
                        <td><strong>2)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_2_6 }}</td>
                        <td><strong>3)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_3_6 }}</td>
                        <td><strong>4)</strong>&nbsp;&nbsp;{{ $dato_tickecoti->dato_4_6 }}</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PROMEDIO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->promedio_prenda_6 }}</td>
                        <td class="textderecha fw-bold">QUILATAJE:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->kilataje_prenda_6 }} k</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO {{ $dato_tickecoti->descripcion_generica }}: &nbsp;&nbsp;
                        </td>
                        <td class="text-center">{{ toMoney($dato_tickecoti->valor_oro_plata_6) }}</td>
                        <td class="textderecha fw-bold">PESO:&nbsp;&nbsp;</td>
                        <td class="text-center">{{ $dato_tickecoti->gramaje_prenda_6 }} gr</td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">DISEÑO Y&nbsp;&nbsp; <br> TRABAJO:&nbsp;&nbsp;</td>
                        <td class="text-center"> N/A</td>
                        <td rowspan="3" colspan="2" class="textaling fw-bold">
                            <br><br> ____________________________________ <br>
                            FIRMA DE PERITO VALUADOR
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRECIO DE&nbsp;&nbsp; <br>AVALUO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->avaluo_prenda_6) }}
                        </td>
                    </tr>
                    <tr>
                        <td class="textderecha fw-bold">PRESTAMO:&nbsp;&nbsp;</td>
                        <td class="text-center">
                            {{ toMoney($dato_tickecoti->prestamo_prenda_6) }}
                        </td>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">
                            USUARIO: {{ Auth::user()->name }}
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center">

                            Fecha de impresión: Umán, Yuc a
                            <script type="text/javascript">
                                var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
                                    "Octubre", "Noviembre", "Diciembre");
                                var f = new Date();
                                document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                            </script>
                        </th>
                    </tr>
                </table>
                </div>
            @endif
        @else
            <div class="h3 text-center fw-bold mt-8">No tienes los permisos para ver este modulo <br> Comunicate con tu
                superior...</div>
        @endcan

    </body>
    </div>

    </html>
