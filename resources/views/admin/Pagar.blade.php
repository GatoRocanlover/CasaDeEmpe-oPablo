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
    <link href="{{ asset('dist/css/ListadoDesempeño.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/fontawesome/css/all.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    </style>

</head>

<body class="antialiased ">



    <div
        class="relative sinborde items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <!-- encabezado -->
        <div class="size">
            <div class="navbar1 flex size">
                <div class="max-w-6xl mx-auto mr-2">
                    <a href="{{ route('inicio_admin') }}"><img class="icono" src="{{ asset('img/logo.png') }}"></a>
                </div>
                <div class="mx-auto ml-2 titulo texto-grande size"> CASA DE EMPEÑOS <br> ASOCIADOS NUEVA MUTUA DE UMÁN S.A. DE
                    C.V.</a></div>

            </div>
        </div>
        <!-- MENU -->
        @include('layout.nav')
        @can('ver-desempeño')


        <br>
        <div class="row g-3 mx-auto items-center justify-center needs-validation size100">
            <label for="validationCustom03" class="form-label  text-center h3"> MODULO DE DESEMPEÑO</label>
        </div>

        <!-- ----------------------------------------------------------------------------->

        <div class="mt-8 size95 mx-auto items-center justify-center flex negritas">
            <div class="tabla size  flex items-center justify-center ">
                <div class="table-responsive ">
                    <!-- OPCION BUSCAR -->
                    <label class="mt-2">BUSCAR FOLIO O NOMBRE DEL CLIENTE:</label>
                    <div class="searchSep mt-1">
                        <div>
                            <form action="{{ route('Pagar') }}" method="GET">
                                <div class="col-md-12 d-flex  mt-2 ">
                                    <input class="col-md-4 form-control text-center  me-2" type="search"
                                        placeholder="ingrese folio o número del cliente" name="search"
                                        aria-label="Search" value="{{ request('search') }}">
                                    <button class="btn bbtn mt-5 btn-primary my-2 my-sm-0"
                                        type="submit">Buscar</button>
                                </div>
                            </form>
                        </div>
                        @can('ver-listado-tickets-desempeño')
                        <div class="hover">
                            <a class="btn btn-success me-2" href="{{ route('Ticket_Desempeño') }}" type="button"><i
                                    class="fas fa-cash-register"></i> &nbsp;BOLETAS LIQUIDADAS</a>
                        </div>
                        @endcan
                    </div>
                    <div class="table-responsive">
                        <table class=" table table-sm table-striped">
                            <div class="mt-4"></div>
                            <thead class="letra-blanca bg-dark">
                                <tr>
                                    <th class="text-center" scope="col">FOLIO BOLETA</th>
                                    <th class="text-center" scope="col">SOCIO</th>
                                    <th class="text-center" scope="col">CLIENTE</th>
                                    <th class="text-center" scope="col">PRENDA</th>
                                    <th class="text-center" scope="col">NO. PRENDAS</th>
                                    <th class="text-center" scope="col">DESCRIPCION DE LA PRENDA</th>
                                    <th class="text-center" scope="col">&nbsp;&nbsp;&nbsp;AVALUO&nbsp;&nbsp;&nbsp;</th>
                                    <th class="text-center" scope="col">PORCENTAJE DE PRESTAMO</th>
                                    <th class="text-center" scope="col">PRESTAMO</th>
                                    @can('pago-desempeño')
                                    <th class="text-center" scope="col">DESEMPEÑAR</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prendaPagarr as $prenda)
                                    <tr>
                                        <th class="text-center" scope="row">{{ $prenda->id_prendas }}</th>
                                        <td class="text-center">
                                            @if ($prenda->cliente->socio == 0.02)
                                                SOCIO
                                            @elseif($prenda->cliente->socio == 0.025)
                                                NO SOCIO
                                            @ENDIF
                                        </td>

                                        <td class="text-center">
                                            {{ $prenda->cliente->nombre_cliente . ' ' . $prenda->cliente->apellido_cliente }}
                                        </td>

                                        <td>{{ $prenda->nombre_prenda }}</td>
                                        <td class="text-center">{{ $prenda->cantidad_prenda }}</td>
                                        <td>{{ $prenda->caracteristicas_prenda . '.' . ' ' . ' / ' . 'DETALLES ESPECIFICOS:' . ' KILATAJE:' . '' . ' ' . $prenda->kilataje_prenda . 'k' . ',' . ' ' . 'GRAMAJE:' . '' . ' ' . $prenda->gramaje_prenda . 'gr' }}
                                        </td>
                                        <td class="text-center"> {{toMoney($prenda->avaluo_prenda)}}</td>

                                        <td class="text-center">
                                            @if ($prenda->porcentaje_prestamo_sobre_avaluo == 45)
                                                45 %
                                            @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 50)
                                                50 %
                                            @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 55)
                                                55 %
                                            @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 60)
                                                60 %
                                            @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 65)
                                                65 %
                                            @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 70)
                                                70 %
                                            @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 75)
                                                75 %
                                            @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 80)
                                                80 %
                                            @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 85)
                                                85 %
                                            @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 90)
                                                90 %
                                            @elseif($prenda->porcentaje_prestamo_sobre_avaluo == 95)
                                                95 %
                                            @else
                                                100 %
                                            @endif
                                        </td>
                                        <td class="text-center">{{toMoney($prenda->prestamo_prenda)}}</td>
                                        @can('pago-desempeño')
                                        <td class="text-center">
                                            <br>
                                            <a class="nav-link"
                                                href="{{ route('prenda1.edit', [$prenda->id_prendas]) }}"
                                                id="navbarDarkDropdownMenuLink" aria-expanded="false"><button><i
                                                        class="fas fa-cash-register icons"
                                                        style="font-size:30px;"></i></button></a>
                                        </td>
                                        @endcan
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex  justify-content-end">
                        {!! $prendaPagarr->links() !!}
                    </div>

                </div>

            </div>
        </div>

    </div>

    <div class="mt-8">

    </div>
    </div>
    @else
        <div class="h3 text-center fw-bold mt-8">No tienes los permisos para ver este modulo <br> Comunicate con tu superior...</div> 
    @endcan
</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="{{ asset('dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('dist/js/jquery.min.js') }}"></script>
</html>
