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
    <link href="{{ asset('dist/css/estilos.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    </style>


</head>

<body class="antialiased ">


    @can('ver-listado-tickets-desempeño')
    <div class="relative sinborde items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <!-- encabezado -->
        <div class="size">
            <div class="navbar1 flex size">
                <div class="max-w-6xl mx-auto mr-2">
                    <a href="{{ route('inicio_admin') }}"><img class="icono" src="{{ asset('img/logo.png') }}"></a>
                </div>
                <div class="mx-auto ml-2 titulo texto-grande size"> CASA DE EMPEÑOS <br> ASOCIADOS NUEVA MUTUA DE UMÁN S.A. DE
                    C.V.</a></div>

            </div>
            <!-- MENU -->
            @include('layout.nav')

        </div>
        @include('pdf.flash-message')

        <div class="row g-3 mt-8 mx-auto items-center justify-center needs-validation size100">
            <label for="validationCustom03" class="form-label  text-center h3">BOLETAS LIQUIDADAS:</label>
        </div>

        <!-- ----------------------------------------------------------------------------->

        <div class="mt-8 size95 mx-auto items-center justify-center flex negritas ">
            <div class="tabla size  flex items-center justify-center ">



                <div class="col-md-12 ">
                    <!-- OPCION BUSCAR -->
                    <label class="mt-2">BUSCAR FOLIO O NOMBRE DEL CLIENTE:</label>
                    <div class="searchSep  mt-1">
                        <form action="{{ route('Ticket_Desempeño') }}" method="GET">
                            <div class="col-md-12 d-flex  mt-2 ">
                                <input class="col-md-4 form-control text-center  me-2" type="search" placeholder="ingrese folio o número del cliente" name="search_ticket" aria-label="Search" value="{{ request('search_ticket') }}">
                                <button class="btn bbtn mt-5 btn-primary my-2 my-sm-0" type="submit">Buscar</button>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table  table-sm table-striped " style="max-width: 95rem;">

                            <div class="mt-4"></div>
                            <thead class="letra-blanca bg-dark">
                                <tr>
                                    <th class="text-center" scope="col">FOLIO TICKET</th>
                                    <th class="text-center" scope="col">FOLIO BOLETA</th>
                                    <th class="text-center" scope="col">SOCIO</th>
                                    <th class="text-center" scope="col">CLIENTE</th>
                                    <th class="text-center" scope="col">PRENDA</th>
                                    <th class="text-center" scope="col">NO. PRENDA</th>
                                    <th class="text-center" scope="col">PRÉSTAMO</th>
                                    <th class="text-center" scope="col">MONTO RECIBIDO</th>
                                    <th class="text-center" scope="col">&nbsp;&nbsp;&nbsp;CAMBIO&nbsp;&nbsp;&nbsp;</th>
                                    @can('imprimir-ticket-desempeño')
                                    <th class="text-center" scope="col">DESCARGAR TICKET:</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ticket as $tickets)
                                <tr>
                                    <th class="text-center" scope="row">{{ $tickets->id_folio }}</th>
                                    <td class="text-center" scope="row">{{ $tickets->id_prendas }}</td>
                                    <td class="text-center">
                                        @if ($tickets->promedio_socio == 0.02)
                                        SOCIO
                                        @elseif($tickets->promedio_socio = 0.025)
                                        NO SOCIO
                                        @ENDIF
                                    </td>
                                    <td class="text-center">{{ $tickets->nombre_cliente }}</td>
                                    <td class="text-center">{{ $tickets->nombre_prenda }}</td>
                                    <td class="text-center">{{ $tickets->cantidad_prenda }}</td>
                                    <td class="text-center">{{toMoney($tickets->prestamo_prenda_ticket)}}</td>
                                    <td class="text-center">{{toMoney($tickets->cantidad_pago)}}</td>
                                    <td class="text-center">{{toMoney($tickets->cambio_boleta)}}</td>
                                    @can('imprimir-ticket-desempeño')
                                    <td class="text-center">
                                        <div>

                                            <a class="nav-link" href="{{ route('ticket.vistaTicket', [$tickets->id_folio]) }}" id="navbarDarkDropdownMenuLink" aria-expanded="false"><i class="fa fa-print icons" style="font-size:32px"></i></a>
                                        </div>
                                    </td>
                                    @endcan
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex  justify-content-end">
                        {!! $ticket->links() !!}
                    </div>
                    <div class="mt-8">
                    </div>
                </div>
                @else


            </div>
        </div>
        <div class="h3 text-center fw-bold mt-8">No tienes los permisos para ver este modulo <br> Comunicate con tu superior...</div>
        @endcan
</body>
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
@if (session('registro') == 'pago')
<script>
    Swal.fire(
        'SE REALIZO EL PAGO CON EXITO!',
        'PUEDE DESCARGAR EL TICKET EN LA PRIMERA FILA DE LA TABLA!!',
        'success')
</script>
@endif

</html>