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

</head>

<body class="antialiased ">
    <div class="sinborde relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


        <!-- encabezado -->
        <div class="size">
            <div class="navbar1 flex size">
                <div class="max-w-6xl mx-auto mr-2">
                    <a href="{{ route('inicio_admin') }}"><img class="icono" src="{{ asset('img/logo.png') }}"></a>
                </div>
                <div class="mx-auto ml-2 titulo texto-grande size"> CASA DE EMPEÑOS <br> ASOCIADOS NUEVA MUTUA DE UMÁN S.A. DE C.V.</a></div>

            </div>


            @include('layout.nav')

            @can('ver-cotizacion')
        </div>
        @include('pdf.flash-message')
        <br>
        <div class="row g-3 mx-auto items-center justify-center needs-validation size100">
            <label for="validationCustom03" class="form-label  text-center h3 fw-bold">COTIZACIÓN PRENDA</label>
        </div>

        <!-- ----------------------------------------------------------------------------->

        <div class="mt-8 size95 mx-auto items-center justify-center flex negritas">
            <div class="max-w-6x2 size  flex items-center justify-center ">
                <div class="col-md-12 table-responsive">
                    <!-- OPCION BUSCAR -->
                    <label class="mt-2 fw-bold">BUSCAR FOLIO DE COTIZACIÓN:</label>
                    <div class="searchSep mt-1 ">
                        <div>
                            <form action="{{ route('cotizacionprenda.listado') }}" method="GET">
                                @csrf
                                <div class="col-md-12 d-flex  mt-2 ">
                                    <input class="col-md-4 form-control text-center  me-2" type="search" placeholder="ingrese folio o nombre de la prenda" name="search" aria-label="Search" value="{{ request('search') }}">
                                    <button class="btn bbtn mt-5 btn-primary my-2 my-sm-0 fw-bold" type="submit">Buscar</button>
                                </div>
                            </form>
                        </div>
                        @can('crear-cotizacion')
                        <div class="hover">

                            <a class="btn btn-success me-2 fw-bold" style="display:flex" href="{{ route('cotizacion.agregar_prenda') }}" type="button"><i class="fa fa-plus-circle" style="font-size:20px"></i> &nbsp;AGREGAR
                                COTIZACIÓN</a>
                            <a class="btn btn-success me-2 mt-2 fw-bold" href="{{ route('lotes_cotizacion') }}" type="button"><i class="fa fa-plus-circle" style="font-size:20px"></i> &nbsp;AGREGAR
                                COTIZACIÓN POR LOTE</a>
                        </div>
                        @endcan
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
                                    <th scope="col">&nbsp;&nbsp;&nbsp;AVALUO&nbsp;&nbsp;&nbsp;</th>
                                    <th scope="col">PORCENTAJE DE EVALUO</th>
                                    <th scope="col">&nbsp;PRESTAMO&nbsp;</th>
                                    <th scope="col">FECHA DE ALTA PRENDA</th>
                                    <th scope="col">STATUS</th>
                                    @can('impresion-cotizacion')
                                    <th scope="col">IMPRIMIR</th>
                                    @endcan
                                    @can('alta-cotizacion')
                                    <th scope="col">ALTA BOLETA</th>
                                    @endcan
                                    @can('borrar-cotizacion')
                                    <th scope="col">BORRAR <br>COTIZACIÓN</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($lista_cotizacionprendas as $prenda)
                                <tr>
                                    <th scope="row">{{ $prenda->id_cotizacionprenda }}</th>
                                    <td>
                                        @if($prenda->nombre_prenda_2 == null)
                                        {{ $prenda->nombre_prenda }}
                                        @elseif($prenda->nombre_prenda_3 == null)
                                        {{ $prenda->nombre_prenda }}{{', '. $prenda->nombre_prenda_2 }}
                                        @elseif($prenda->nombre_prenda_4 == null)
                                        {{ $prenda->nombre_prenda }}{{', '. $prenda->nombre_prenda_2 }}{{', '. $prenda->nombre_prenda_3 }}
                                        @elseif($prenda->nombre_prenda_5 == null)
                                        {{ $prenda->nombre_prenda }}{{', '. $prenda->nombre_prenda_2 }}{{', '. $prenda->nombre_prenda_3 }}{{', '. $prenda->nombre_prenda_4 }}
                                        @elseif($prenda->nombre_prenda_6 == null)
                                        {{ $prenda->nombre_prenda }}{{', '. $prenda->nombre_prenda_2 }}{{', '. $prenda->nombre_prenda_3 }}{{', '. $prenda->nombre_prenda_4 }}{{', '. $prenda->nombre_prenda_5 }}
                                        @else
                                        {{$prenda->nombre_prenda }}{{', '. $prenda->nombre_prenda_2 }}{{', '. $prenda->nombre_prenda_3 }}{{', '. $prenda->nombre_prenda_4 }}{{', '. $prenda->nombre_prenda_5 }}{{', '. $prenda->nombre_prenda_6 }}
                                        @endif
                                    </td>
                                    <td>
                                        {{$prenda->descripcion_generica}}
                                    </td>
                                    <td>
                                        @if($prenda->caracteristicas_prenda_2 == null)
                                        {{'Cantidad: '.$prenda->cantidad_prenda.', '}}{{ $prenda->caracteristicas_prenda }} {{ $prenda->kilataje_prenda}}k {{ $prenda->gramaje_prenda }}gr
                                        @elseif($prenda->caracteristicas_prenda_3 == null)
                                        {{'Cantidad: '.$prenda->cantidad_prenda.', '}}{{ $prenda->caracteristicas_prenda }} {{ $prenda->kilataje_prenda}}k {{ $prenda->gramaje_prenda }}gr {{', '. $prenda->caracteristicas_prenda_2 }} {{ $prenda->kilataje_prenda_2}}k {{ $prenda->gramaje_prenda_2 }}gr 
                                        @elseif($prenda->caracteristicas_prenda_4 == null)
                                        {{'Cantidad: '.$prenda->cantidad_prenda.', '}}{{ $prenda->caracteristicas_prenda }} {{ $prenda->kilataje_prenda}}k {{ $prenda->gramaje_prenda }}gr {{', '. $prenda->caracteristicas_prenda_2 }} {{ $prenda->kilataje_prenda_2}}k {{ $prenda->gramaje_prenda_2 }}gr {{', '. $prenda->caracteristicas_prenda_3 }} {{ $prenda->kilataje_prenda_3.'k'}} {{ $prenda->gramaje_prenda_3.'gr'}}
                                        @elseif($prenda->caracteristicas_prenda_5 == null)
                                        {{'Cantidad: '.$prenda->cantidad_prenda.', '}}{{ $prenda->caracteristicas_prenda }} {{ $prenda->kilataje_prenda}}k {{ $prenda->gramaje_prenda }}gr {{', '. $prenda->caracteristicas_prenda_2 }} {{ $prenda->kilataje_prenda_2}}k {{ $prenda->gramaje_prenda_2 }}gr {{', '. $prenda->caracteristicas_prenda_3 }} {{ $prenda->kilataje_prenda_3.'k'}} {{ $prenda->gramaje_prenda_3.'gr'}}{{', '. $prenda->caracteristicas_prenda_4 }} {{ $prenda->kilataje_prenda_4.'k'}} {{ $prenda->gramaje_prenda_4.'gr'}}
                                        @elseif($prenda->caracteristicas_prenda_6 == null)
                                        {{'Cantidad: '.$prenda->cantidad_prenda.', '}}{{ $prenda->caracteristicas_prenda }} {{ $prenda->kilataje_prenda}}k {{ $prenda->gramaje_prenda }}gr {{', '. $prenda->caracteristicas_prenda_2 }} {{ $prenda->kilataje_prenda_2}}k {{ $prenda->gramaje_prenda_2 }}gr {{', '. $prenda->caracteristicas_prenda_3 }} {{ $prenda->kilataje_prenda_3.'k'}} {{ $prenda->gramaje_prenda_3.'gr'}}{{', '. $prenda->caracteristicas_prenda_4 }} {{ $prenda->kilataje_prenda_4.'k'}} {{ $prenda->gramaje_prenda_4.'gr'}}{{', '. $prenda->caracteristicas_prenda_5 }} {{ $prenda->kilataje_prenda_5.'k'}} {{ $prenda->gramaje_prenda_5.'gr'}}
                                        @else
                                        {{'Cantidad: '.$prenda->cantidad_prenda.', '}}{{$prenda->caracteristicas_prenda }} {{ $prenda->kilataje_prenda}}k {{ $prenda->gramaje_prenda }}gr {{', '. $prenda->caracteristicas_prenda_2 }} {{ $prenda->kilataje_prenda_2}}k {{ $prenda->gramaje_prenda_2 }}gr {{', '. $prenda->caracteristicas_prenda_3 }} {{ $prenda->kilataje_prenda_3.'k'}} {{ $prenda->gramaje_prenda_3.'gr'}}{{', '. $prenda->caracteristicas_prenda_4 }} {{ $prenda->kilataje_prenda_4.'k'}} {{ $prenda->gramaje_prenda_4.'gr'}}{{', '. $prenda->caracteristicas_prenda_5 }} {{ $prenda->kilataje_prenda_5.'k'}} {{ $prenda->gramaje_prenda_5.'gr'}}{{', '. $prenda->caracteristicas_prenda_6 }} {{ $prenda->kilataje_prenda_6.'k'}} {{ $prenda->gramaje_prenda_6.'gr'}}@endif

                                    </td>
                                    <td>
    
                                        {{toMoney($prenda->avaluo_prenda)}}
                                   
                                        </td>

                                    <td>
                                    {{$prenda->porcentaje_prestamo_sobre_avaluo.'%'}}
                                    </td>
                                    <td>
                        
                                        {{toMoney($prenda->prestamo_prenda)}}
                                        
                                    </td>
                                    <td>{{ $prenda->created_at->format('d/m/Y') }}</td>
                                    <td>
                                        @if ($prenda->lote ==1)
                                        <div style="color:blueviolet">LOTE</div>
                                        @else
                                        <div style="color:sandybrown">INDIVIDUAL</div>
                                        @endif
                                    </td>
                                    @can('impresion-cotizacion')
                                    <td>
                                        <br>
                                        <a class="nav-link text-center" href="{{ route('ticket.vistaTicketCotiza', [$prenda->id_cotizacionprenda]) }}" id="navbarDarkDropdownMenuLink" aria-expanded="false"><i class="fa fa-print icons" style="font-size:30px;   "></i></a>
                                    </td>
                                    @endcan
                                    @can('alta-cotizacion')
                                    <td>
                                        <br>
                                        <a class="nav-link text-center" href="{{ route('coti.altacotizacion', [$prenda->id_cotizacionprenda]) }}" id="navbarDarkDropdownMenuLink" aria-expanded="false"><i class="fa fa-check-square icons" style="font-size:32px;"></i></a>
                                    </td>
                                    @endcan
                                    @can('borrar-cotizacion')
                                    <td>
                                        <br>
                                        {!! Form::open(['method' => 'DELETE','route' => ['cotizacionprenda.destroy', $prenda->id_cotizacionprenda],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                    @endcan
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
        @else
        <div class="h3 text-center fw-bold mt-8">No tienes los permisos para ver este modulo <br> Comunicate con tu superior...</div>
        @endcan

</body>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('dist/js/bootstrap.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
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