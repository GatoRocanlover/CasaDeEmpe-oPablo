

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
        <link href="{{asset('dist/css/estilos.css')}}" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;  
                
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

                    <!--
                <div class="mt-5 max-w-6xl mx-auto items-center justify-center flex negritas texto size20 fondoformulario">
                    <form class="row g-3 mx-auto items-center justify-center needs-validation size100" novalidate>
                    <label for="validationCustom03" class="form-label mt-8 text-light text-center"> MODULO DE PAGO</label>

                        <div class="col-md-10 text-light"><label>SELECCIONE EL TIPO DE MOVIMIENTO QUE DESEA REALIZAR:</label>
                            <select id="change"  class="form-select mt-2" aria-label="Default select example">
                            
                                <option class="negritas" value="This">REFRENDO</option>
                                <option class="negritas" value="That">DESEMPEÑO</option>
                                <option class="negritas" value="3">ABONO A CAPITAL</option>
                            </select>
                            <div class="valid-feedback">
                            Looks good!
                            </div>
                        </div> -->
                      <!-- <div class="col-md-8">
                            <label for="validationCustom01" class="form-label">NUMERO DE BOLETA</label>
                            <input type="text" class="form-control" id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                            Looks good!
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="validationCustom02" class="form-label">AVALUO</label>
                            <input type="text" class="form-control" id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                            Looks good!
                            </div>
                        </div>
                        <div class="col-md-8">
                            <label for="validationCustom02" class="form-label">% DE PRESTAMO</label>
                            <input type="text" class="form-control" id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                            Looks good!
                            </div>
                        </div>
                      
                        
                        <div class="col-md-8">
                            <label for="validationCustom02" class="form-label">TOTAL DE PRESTAMO</label>
                            <input type="text" class="form-control" id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                            Looks good!
                            </div>
                        </div>

                    

                      
                    
                        <div class=" mb-8 max-w-6xl mx-auto flex items-center justify-center mt-4">
                            <button class="size50 bordes btn btn-primary navbar1 negritas" type="button"  data-toggle="modal" data-target="#exampleModal"> PAGAR</button>
                      
                        </div>
                      -->
                        
                        <!-- Modal 
                        <div class="modal fade mb-8" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ESTA SEGURO QUE DESEA CONTINUAR CON EL DESEMBOLSO</h5>
                                <button type="button"data-toggle="modal" data-target="#EjemploModal" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <table class="table">
                            <thead class="letra-blanca bg-dark">
                                <tr>
                                <th scope="col"># DE BOLETA</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">NOMBRE DE PRENDA</th>
                                <th scope="col">TOTAL</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>001</td>
                                <td>MARK POOT</td>
                                <td>$50,000</td>
                              </tr>
                                <tr>
                            </tbody>
                        </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
                                <button type="button" role="alert" class="btn btn-primary alert alert-success">CONTINUAR</button>
                                
                            </div>
                            </div>
                        </div>
                        </div>
                                            

                                        </form>
                                    </div>
                                </div>
    -->

    <nav class="navbar mt-3 navbar-light bg-light">
      <form class="container-fluid justify-content-start">
        <button class="btn btn-success me-2" type="button">DESEMPEÑO</button>
        <a class="btn btn-sm btn-outline-secondary me-2" type="button" href="{{route('1refrendo')}}">REFRENDO</a>
        <a class="btn btn-sm btn-outline-secondary" type="button" href="{{route('AbonoCapital')}}">ABONO A CAPITAL</a>
      </form>
    </nav>



    <div class="mt-5 max-w-6xl mx-auto items-center justify-center flex negritas texto size20 fondoformulario">
      <form class="row g-3 mx-auto items-center justify-center needs-validation size100" novalidate>
      <label for="validationCustom03" class="form-label mt-8  text-center"> MODULO DE PAGO</label>

          
        <div class="col-md-8">
          <label for="validationCustom01" class="form-label">BUSCAR FOLIO DE BOLETA</label>
          <input class="form-control  mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn bbtn mt-5 btn-primary my-2 my-sm-0" type="submit">Search</button>
        </div>
   

        <div class="col-md-8">
              <label for="validationCustom01" class="form-label">NUMERO DE BOLETA:</label>
              <input type="text" class="form-control" id="validationCustom01" value="" readonly>
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
              <input type="text" class="form-control" id="validationCustom02" value="" required >
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
          </div>

      


          {{$monto_1=1200;}}
        
      
          <div class=" mb-8 max-w-6xl mx-auto flex items-center justify-center mt-4">
              <button class="size50 bordes btn btn-primary navbar1 negritas" type="button"  data-toggle="modal" data-target="#exampleModal"> PAGAR</button>
        
          </div>




               <!-- Modal -->


               <div class="modal fade mb-8" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">CONTINUAR PAGO</h5>
                        <button type="button"data-toggle="modal" data-target="#EjemploModal" class="close" data-dismiss="modal" aria-label="Close">
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
                    <input type="text" class="form-control"  value="{{$monto_1}}" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="mt-3 col-md-8">
                    <label for="validationCustom02" class="form-label">CAMBIO:</label>
                    <input type="text" class="form-control" id="validationCustom02" value="{{$monto_1 - 50}}" required>
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
                                    

                                </form>
                            </div>
                        </div>

  </div>

    </body>
    
  <script src="{{asset('dist/js/bootstrap.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  

</html>
