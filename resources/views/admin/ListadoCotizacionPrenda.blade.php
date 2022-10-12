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
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/fontawesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/estilos.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .searchSep {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        th {
            text-align: center;
        }

        .hover :hover {
            background-color: #8E6E06;
            border-color: #8E6E06;
        }

        td {
            text-align: center;
        }

        .icons {
            color: green;
        }

        .icons:hover {
            color: #8E6E06;

        }

        a:hover i {
            transform: scale(1.3);

        }
    </style>
</head>

<body class="antialiased ">
    <div
        class="sinborde relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


        <!-- encabezado -->
        <div class="size">
            <div class="navbar1 flex size">
                <div class="max-w-6xl mx-auto mr-2">
                    <a href="{{ route('inicio_admin') }}"><img class="icono" src="{{ asset('img/logo.png') }}"></a>
                </div>
                <div class="mx-auto ml-2 titulo texto-grande size"> CASA DE EMPEÑOS <br> ASOCIADOS NUEVA MUTUA DE UMÁN S.A. DE
                    C.V.</a></div>

            </div>


            @include('layout.nav')
        </div>
        @include('pdf.flash-message')
        <br>
        <div class="row g-3 mx-auto items-center justify-center needs-validation size100">
            <label for="validationCustom03" class="form-label  text-center h3 fw-bold"> MODULO COTIZACIÓN</label>
        </div>

        <!-- ----------------------------------------------------------------------------->

        <div class="mt-8 size95 mx-auto items-center justify-center flex negritas">
            <div class="max-w-6x2 size  flex items-center justify-center ">
                <div class="col-md-12 table-responsive">
                    <!-- OPCION BUSCAR -->
                    <label class="mt-2 fw-bold">BUSCAR FOLIO DE COTIZACION:</label>
                    <div class="searchSep mt-1 ">
                        <div>
                            <form action="{{ route('cotizacionprenda.listado') }}" method="GET">
                                <div class="col-md-12 d-flex  mt-2 ">
                                    <input class="col-md-4 form-control text-center  me-2" type="search"
                                        placeholder="ingrese folio o nombre de la prenda" name="search"
                                        aria-label="Search" value="{{ request('search') }}">
                                    <button class="btn bbtn mt-5 btn-primary my-2 my-sm-0 fw-bold"
                                        type="submit">Buscar</button>
                                </div>
                            </form>
                        </div>
                        <div class="hover">
                            <a class="btn btn-success me-2 fw-bold" href="{{ route('cotizacion.agregar_prenda') }}"
                                type="button"><i class="fa fa-plus-circle" style="font-size:20px"></i> &nbsp;AGREGAR
                                COTIZACIÓN</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm table-striped mt-8  ">
                            <div class="mt-4"></div>
                            <thead class="letra-blanca bg-dark">
                                <tr>
                                    <th scope="col">FOLIO</th>
                                    <th scope="col">PRENDA</th>
                                    <th scope="col">DESCIPCIÓN GENERICA</th>
                                    <th scope="col">CARACTERISTICAS</th>
                                    <th scope="col">AVALUO</th>
                                    <th scope="col">PORCENTAJE DE EVALUO</th>
                                    <th scope="col">PRESTAMO</th>
                                    <th scope="col">FECHA DE ALTA PRENDA</th>
                                    <th scope="col">IMPRIMIR</th>
                                    <th scope="col">ALTA BOLETA</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lista_cotizacionprendas as $prenda)
                                    <tr>
                                        <th scope="row">{{ $prenda->id_cotizacionprenda }}</th>
                                        <td>{{ $prenda->nombre_prenda }}</td>
                                        <td> 
                                            {{$prenda->descripcion_generica}}
                                        </td>
                                        <td>{{ $prenda->caracteristicas_prenda . '.' . ' ' . ' / ' . 'DETALLES ESPECIFICOS:' . ' KILATAJE:' . '' . ' ' . $prenda->kilataje_prenda . 'k' . ',' . ' ' . 'GRAMAJE:' . '' . ' ' . $prenda->gramaje_prenda . 'gr' }}
                                        </td>
                                        <td> {{ '$ ' . $prenda->avaluo_prenda }}</td>

                                        <td>
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
                                        <td>{{ '$' . $prenda->prestamo_prenda }}</td>
                                        <td>{{ $prenda->created_at->format('d/m/Y') }}</td>
                                        <td>
                                            <br>
                                            <a class="nav-link text-center"
                                                href="{{ route('ticket.vistaTicketCotiza', [$prenda->id_cotizacionprenda]) }}"
                                                id="navbarDarkDropdownMenuLink" aria-expanded="false"><i
                                                    class="fa fa-print icons" style="font-size:30px;   "></i></a>
                                        </td>

                                        <td>
                                            <br>
                                            <a class="nav-link text-center"
                                                href="{{ route('coti.altacotizacion', [$prenda->id_cotizacionprenda]) }}"
                                                id="navbarDarkDropdownMenuLink" aria-expanded="false"><i
                                                    class="fa fa-check-square icons" style="font-size:32px;"></i></a>
                                        </td>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex  justify-content-end">
                            {!! $lista_cotizacionprendas->links() !!}
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>

</body>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('dist/js/bootstrap.js') }}"></script>
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
@if (session('registro') == 'cotizacion')
    <script>
        Swal.fire(
            'SE GENERO LA COTIZACIÓN CON EXITO!',
            'PUEDE VALIDAR EN LA PRIMERA FILA DE LA TABLA!!',
            'success')
    </script>
@endif

</html>
