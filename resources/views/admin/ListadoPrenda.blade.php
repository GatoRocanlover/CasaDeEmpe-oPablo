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
    <link href="{{asset('dist/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('dist/fontawesome/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('dist/css/estilos.css')}}" rel="stylesheet">
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    </style>

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

            @can('ver-listado-boletas')
        </div>

        <br>
        <div class="row g-3 mx-auto items-center justify-center needs-validation size100">
            <label for="validationCustom03" class="form-label  text-center h3 fw-bold"> BOLETAS GENERADAS:</label>
        </div>
        <div class="mt-8 size95 mx-auto items-center justify-center flex negritas">
            <div class="max-w-6xl size  flex items-center justify-center ">
                <div class="col-md-12 table-responsive">

                    <!-- OPCION BUSCAR -->
                    <label class="mt-2 fw-bold">BUSCAR FOLIO DE COTIZACIÓN:</label>
                    <div class="searchSep mt-1 ">
                        <div>
                            <form action="{{ route('listado_prenda') }}" method="GET">
                                <div class="col-md-12 d-flex  mt-2 ">
                                    <input class="col-md-4 form-control text-center  me-2" type="search" placeholder="ingrese folio o nombre de la prenda" name="search" aria-label="Search" value="{{request('search') }}">
                                    <button class="btn bbtn mt-5 btn-primary my-2 my-sm-0 fw-bold" type="submit">Buscar</button>
                                </div>
                            </form>
                        </div>
                    </div>


                    <table class="table table-sm mt-4 table-striped ">
                        <thead class="letra-blanca bg-dark">
                            <tr>
                                <th scope="col">FOLIO BOLETA</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">CLIENTE</th>
                                <th scope="col">PRENDA</th>
                                <th scope="col">CARACTERÍSTICAS</th>
                                <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;AVALUO&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th scope="col">PORCENTAJE <br> DE <br> PRÉSTAMO</th>
                                <th scope="col">&nbsp;&nbsp;PRÉSTAMO&nbsp;&nbsp;</th>
                                <th scope="col">&nbsp;&nbsp;FECHA DE CREACION&nbsp;&nbsp;</th>
                                @can('imprimir-boleta')
                                <th scope="col">IMPRIMIR BOLETA</th>
                                @endcan
                            </tr>
                        </thead>
                      
                            @foreach($lista_prendas as $prenda )

                            <tr>
                                <td scope="row">{{$prenda->id_prendas}}</td>
                                <td>
                                        @if ($prenda->status ==1)
                                        <div style="color:blueviolet">LOTE</div>
                                        @if ($prenda->cliente->socio == 0.02)
                                        <div>SOCIO</div>
                                        @elseif($prenda->cliente->socio == 0.025)
                                        <div> NO SOCIO</div>
                                        @ENDIF
                                        @else
                                        <div style="color:sandybrown">INDIVIDUAL</div>
                                        @if ($prenda->cliente->socio == 0.02)
                                        <div>SOCIO</div>
                                        @elseif($prenda->cliente->socio == 0.025)
                                        <div>NO SOCIO</div>
                                        @ENDIF
                                        @endif
                                    </td> 
                                <td>{{$prenda->cliente->nombre_cliente}} {{$prenda->cliente->apellido_cliente}}</td>
                                <td>{{$prenda->nombre_prenda}}</td>
                                <td>
                                @if ($prenda->status ==1)
                                {{'Cantidad: '.$prenda->cantidad_prenda.', '}}{{$prenda->caracteristicas_prenda}}
                                @else
                                {{'Cantidad: '.$prenda->cantidad_prenda.', '}}{{$prenda->caracteristicas_prenda.' '.$prenda->kilataje_prenda.'k '.', '.$prenda->gramaje_prenda.'gr '}}
                                @endif
                                </td>
                                <td> {{toMoney($prenda->avaluo_prenda)}}</td>

                                <td>
                                    {{$prenda->porcentaje_prestamo_sobre_avaluo.'%'}}
                                 
                                </td>
                                <td>{{toMoney($prenda->prestamo_prenda)}}
                                </td>
                                <td>{{($prenda->created_at)}}
                                </td>
                                @can('imprimir-boleta')
                                <td>
                                    <a class="nav-link text-center" href="{{route('boleta.vistaboleta', [$prenda->id_prendas])}}"  id="navbarDarkDropdownMenuLink" aria-expanded="false"  target="_blank"><i class="fa fa-print" style="font-size:30px"></i></a>
                                </td>
                                @endcan
                            </tr>             
                        @endforeach
                    </table>
                    
                    {!! $lista_prendas->links() !!}
                    
                </div>
                @else
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
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="{{ asset('dist/js/bootstrap.js') }}"></script>
<script src="{{ asset('dist/js/jquery.min.js') }}"></script>

@if (session('registro') == 'Se genero la boleta')
<script>
    Swal.fire(
        'SE GENERO LA BOLETA CON EXITO!',
        'PUEDE VALIDAR EN LA PRIMERA FILA DE LA TABLA!!',
        'success')
</script>
@endif

</html>