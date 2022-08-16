<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
<!-- Styles -->
<link href="{{asset('dist/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('dist/fontawesome/css/all.css')}}" rel="stylesheet">
<link href="{{asset('dist/css/estilos.css')}}" rel="stylesheet">

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
  <link href="{{asset('dist/css/estilos.css')}}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

  <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
  </style>

  <style>
    body {
      font-family: 'Nunito', sans-serif;

    }

    .searchSep {
      display: flex;
      justify-content: space-between;

      width: 100%;
    }
  </style>

</head>

<body class="antialiased ">



  <div class="relative sinborde items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

    <!-- encabezado -->
    <div class="size">
      <div class="navbar1 flex size">
        <div class="max-w-6xl mx-auto mr-2">
          <img class="icono" src="{{asset('img/logo.png')}}" width="450px" height="450px">
        </div>
        <div class="mx-auto ml-2 titulo texto-grande size"> CASA DE EMPEÑOS <br> ASOCIACION NUEVA MUTUA S.A. DE C.V.</a></div>

      </div>
      <!-- MENU -->
      @include('layout.nav')



      <nav class="navbar mt-3 navbar-light bg-light">
        <form class="container-fluid justify-content-start">
          <a class="btn btn-sm btn-outline-secondary me-2" href="{{route('Pagar')}}" type="button">DESEMPEÑO</a>
          <a class="btn btn-success me-2" type="button">REFRENDO</a>
          <a class="btn btn-sm btn-outline-secondary" type="button" href="{{route('abonocapital')}}">ABONO A CAPITAL</a>
        </form>
      </nav>


      <div class="row g-3 mx-auto items-center justify-center needs-validation size100">
        <label for="validationCustom03" class="form-label  text-center h3"> MODULO DE REFRENDO</label>
      </div>

      <!-- ----------------------------------------------------------------------------->

      <div class="mt-8 size95 mx-auto items-center justify-center flex negritas">
        <div class="max-w-6xl size  flex items-center justify-center ">
          <div class="col-md-12">

            <table class="table table-hover">


              <!-- OPCION BUSCAR -->
              <label class="mt-2">BUSCAR FOLIO O NOMBRE DEL CLIENTE:</label>
              <div class="searchSep mt-1">
                <div>
                  <form action="{{route('1refrendo')}}" method="GET">
                    <div class="col-md-12 d-flex  mt-2 ">
                      <input class="col-md-4 form-control text-center  me-2" type="search" placeholder="ingrese folio o número del cliente" name="search" aria-label="Search" value="{{request('search')}}">
                      <button class="btn bbtn mt-5 btn-primary my-2 my-sm-0" type="submit">Buscar</button>
                    </div>
                  </form>
                </div>
                <div>
                  <a hidden class="btn btn-success me-2"  href="{{route('1refrendo')}}" type="button"><i class="fas fa-cash-register"></i> &nbsp;BOLETAS LIQUIDADAS</a>
                </div>
              </div>

              <div class="mt-4"></div>
              <thead class="letra-blanca bg-dark">
                <tr>
                  <th class="text-center" scope="col">FOLIO</th>
                  <th class="text-center" scope="col">CLIENTE</th>
                  <th class="text-center" scope="col">PRENDA</th>
                  <th class="text-center" scope="col">DESCRIPCION</th>
                  <th class="text-center" scope="col">AVALUO</th>
                  <th class="text-center" scope="col">PORCENTAJE DE PRESTAMO</th>
                  <th class="text-center" scope="col">REFRENDOS</th>
                  <th class="text-center" scope="col">PRESTAMO</th>
                  <th class="text-center" scope="col">REFRENDAR</th>
                </tr>
              </thead>
              <tbody>
                @foreach($refrendo as $refrendo1)

                <tr>
                  <th class="text-center" scope="row">{{$refrendo1->id_prendas}}</th>

                  <td class="text-center">{{$refrendo1->cliente->nombre_cliente.' '.$refrendo1->cliente->apellido_cliente}}</td>

                  <td>{{$refrendo1->nombre_prenda}}</td>
                  <td>{{$refrendo1->caracteristicas_prenda.'.'.' '.' / '.'DETALLES ESPECIFICOS:'.' KILATAJE:'.''.' '.$refrendo1->kilataje_prenda.'k'.','.' '.'GRAMAJE:'.''.' '.$refrendo1->gramaje_prenda.'gr'}}</td>
                  <td class="text-center"> {{'$ '.$refrendo1->avaluo_prenda}}</td>

                  <td class="text-center"> @IF($refrendo1->porcentaje_prestamo_sobre_avaluo == 45)
                    45 %
                    @elseif($refrendo1->porcentaje_prestamo_sobre_avaluo == 50)
                    50 %
                    @elseif($refrendo1->porcentaje_prestamo_sobre_avaluo == 55)
                    55 %
                    @elseif($refrendo1->porcentaje_prestamo_sobre_avaluo == 60)
                    60 %
                    @elseif($refrendo1->porcentaje_prestamo_sobre_avaluo == 65)
                    65 %
                    @elseif($refrendo1->porcentaje_prestamo_sobre_avaluo == 70)
                    70 %
                    @elseif($refrendo1->porcentaje_prestamo_sobre_avaluo == 75)
                    75 %
                    @elseif($refrendo1->porcentaje_prestamo_sobre_avaluo == 80)
                    80 %
                    @elseif($refrendo1->porcentaje_prestamo_sobre_avaluo == 85)
                    85 %
                    @elseif($refrendo1->porcentaje_prestamo_sobre_avaluo == 90)
                    90 %
                    @elseif($refrendo1->porcentaje_prestamo_sobre_avaluo == 95)
                    95 %
                    @else
                    100 %
                    @endif
                  </td>
                  <td class="text-center">#</td>
                  <td class="text-center">$&nbsp;{{$refrendo1->prestamo_prenda}}</td>

                  <td class="text-center">
                    <a class="nav-link" href="{{route('prenda1.edit', [$refrendo1->id_prendas] )}}" id="navbarDarkDropdownMenuLink" aria-expanded="false"><button class="ntn btn-primary "><i class="fas fa-cash-register"></i></button></a>
                  </td>
                </tr>

                @endforeach
              </tbody>
            </table>

            <div class="d-flex  justify-content-end">
              {!! $refrendo ->links() !!}
            </div>

          </div>

          <!-- ----------------------------------------------------------------------------->



          <!--  <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">BUSCAR FOLIO DE BOLETA</label>
                        <input class="form-control  mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn bbtn mt-5 btn-primary my-2 my-sm-0" type="submit">Search</button>
                    </div>
                    -->
          <!--    -->

          <!--   <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">NUMERO DE BOLETA:</label>
                        <input type="text" class="form-control" name="id_prendas" value="{{old('id_prendas')}}" readonly>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">NOMBRE:</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-8">
                        <label for="validationCustom02" class="form-label">AVALUO:</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="validationCustom02" class="form-label">PORCENTAJE DE PRESTAMO:</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>


                    <div class="col-md-8">
                        <label for="validationCustom02" class="form-label">TOTAL DE PRESTAMO:</label>
                        <input type="text" class="form-control" id="monto_1" value="" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div> -->
          <!-- 
                    <div class=" mb-8 max-w-6xl mx-auto flex items-center justify-center mt-4">
                        <button class="size50 bordes btn btn-primary navbar1 negritas" type="button" data-toggle="modal" data-target="#exampleModal"> PAGAR</button>
                    </div> -->




          <!-- Modal -->


          <!--    <div class="modal fade mb-8" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">CONTINUAR PAGO</h5>
                                    <button type="button" data-toggle="modal" data-target="#EjemploModal" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table">
                                        <thead class="letra-blanca bg-dark">
                                            <tr>
                                                <th scope="col">NUMERO DE BOLETA</th>
                                                <th scope="col">NOMBRE</th>
                                                <th scope="col">PRESTAMO</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row">1</th>
                                                <td>PEDRO</td>
                                                <td>$4,000</td>
                                            </tr>


                                        </tbody>
                                    </table>

                                    <div class="mt-8 col-md-8">
                                        <label for="validationCustom02" class="form-label ">MONTO:</label>
                                        <input type="text" class="form-control" value="" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="mt-3 col-md-8">
                                        <label for="validationCustom02" class="form-label">CAMBIO:</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                                    <button type="button" class="btn btn-primary">CONTINUAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
 -->

          <!--  </form> -->
        </div>
      </div>

    </div>

    <div class="mt-8">

    </div>
  </div>
</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="{{asset('dist/js/bootstrap.js')}}"></script>
<script src="{{asset('dist/js/jquery.min.js')}}"></script>


</html>