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

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        th {
            text-align: center;
        }

        td {
            text-align: center;
        }
        .searchSep {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
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
        </div>

        <br>
        <div class="row g-3 mx-auto items-center justify-center needs-validation size100">
            <label for="validationCustom03" class="form-label  text-center h3 fw-bold"> BOLETAS GENERADAS:</label>
        </div>
        <div class="mt-8 size95 mx-auto items-center justify-center flex negritas">
            <div class="max-w-6xl size  flex items-center justify-center ">
                <div class="col-md-12 table-responsive">

                    <!-- OPCION BUSCAR -->
                    <label class="mt-2 fw-bold">BUSCAR FOLIO DE COTIZACION:</label>
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
                                <th scope="col">CLIENTE</th>
                                <th scope="col">PRENDA</th>
                                <th scope="col">CARACTERISTICAS</th>
                                <th scope="col">AVALUO</th>
                                <th scope="col">PORCENTAJE <br> DE <br> PRESTAMO</th>
                                <th scope="col">PRESTAMO</th>
                                @can('imprimir-boleta')
                                <th scope="col">IMPRIMIR BOLETA</th>
                                @endcan
                            </tr>
                        </thead>
                      
                            @foreach($lista_prendas as $prenda )

                            <tr>
                                <td scope="row">{{$prenda->id_prendas}}</td>
                                <td>{{$prenda->cliente->nombre_cliente}} {{$prenda->cliente->apellido_cliente}}</td>
                                <td>{{$prenda->nombre_prenda}}</td>
                                <td>{{$prenda->kilataje_prenda.'k '.', '.$prenda->gramaje_prenda.'gr '.', '.$prenda->caracteristicas_prenda}}</td>
                                <td> {{'$ '.$prenda->avaluo_prenda}}</td>

                                <td> @IF($prenda->porcentaje_prestamo_sobre_avaluo == 45)
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
                                <td>$&nbsp;{{$prenda->prestamo_prenda}}</td>
                                @can('imprimir-boleta')
                                <td><a class="nav-link text-center" href="{{route('boleta.vistaboleta', [$prenda->id_prendas])}}" id="navbarDarkDropdownMenuLink" aria-expanded="false"><i class="fa fa-print" style="font-size:30px"></i></a></td>
                                @endcan
                            </tr>             
                        @endforeach
                    </table>
                    
                    {!! $lista_prendas->links() !!}
                    
                </div>
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