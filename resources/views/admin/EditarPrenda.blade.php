<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CASA DE EMPEÑOS</title> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="">
        <!-- Styles -->
        <link href="{{asset('dist/css/bootstrap.css')}}" rel="stylesheet">
        <link href="{{asset('dist/css/estilos.css')}}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
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
                    <div class="mx-auto ml-2 titulo neritas texto-grande size"> CASA DE EMPEÑOS <br> ASOCIACION NUEVA MUTUA S.A. DE C.V.</a></div>
                
                </div>
               <!-- MENU --> 
                @include('layout.nav')

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            
            
            <div class="mt-8 max-w-6xl mx-auto items-center justify-center flex negritas  texto size50 fondoformulario">
                <form action="{{Route('prenda.update',$dato_prenda->id_prenda)}}"
                     method="POST" class="row g-3 needs-validation size80 items-center justify-center" novalidate>
                
                @csrf 
                <input name="_method" type="hidden" value="PUT">
                
                <label for="validationCustom03" class="form-label mt-8 text-center">EDITAR DATOS DE PRENDA</label>
                    <div class="col-md-8">
                            <label for="nombre_prenda" class="form-label"> NOMBRE DE PRENDA </label>
                            <input type="text" name="nombre_prenda" class="form-control" id="nombre_prenda" value="{{$dato_prenda->nombre_prenda}}" required>                        >
                            <div class="valid-feedback">
                                  Looks good!
                            </div>
                    </div>
                    <div class="col-md-8">DESCRIPCION GENERICA</label>
                        <select class="form-select" name="descripcion_generica" id="descripcion_generica" aria-label="Default select example">
                            
                            @if($dato_prenda->descripcion_generica == -1)
                                <option selected>TIPO DE IDENTIFICACION</option>
                            @else
                                <option value="-1" >TIPO DE IDENTIFICACION</option>
                            @endif
                            @if($dato_prenda->descripcion_generica == 1)   
                            <option value="1" selected>ORO</option>
                            @else
                                <option value="1" >ORO</option>
                            @endif
                           
                            @if($dato_prenda->descripcion_generica == 2) 
                                <option value="2" selected>PLATA</option>
                        
                            @else
                                <option value="2" >PLATA</option>
                            @endif
                            </select>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="kilataje_prenda" class="form-label">KILATAJE</label>
                        <div class="input-group has-validation">
                        <input type="text" name="kilataje_prenda" class="form-control" id="kilataje_prenda" value="{{$dato_prenda->kilataje_prenda}}" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="gramaje_prenda" class="form-label">GRAMAJE</label>
                        <div class="input-group has-validation">
                        <input type="text" name="gramaje_prenda" class="form-control" id="gramaje_prenda" value="{{$dato_prenda->gramaje_prenda}}" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="caracteristicas_prenda" class="form-label">CARACTERISTICAS</label>
                        <textarea name="caracteristicas_prenda" class="form-control " id="caracteristicas_prenda"  requiredrows="3">{{$dato_prenda->caracteristicas_prenda}}</textarea>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="avaluo_prenda" class="form-label">AVALUO</label>
                        <input type="text" name="avaluo_prenda" class="form-control" id="avaluo_prenda" value="{{$dato_prenda->avaluo_prenda}}" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-8">PORCENTAJE DE PRESTAMO SOBRE AVALUO</label>
                        <select class="form-select" id="porcentaje_prestamo_sobre_avaluo" name="porcentaje_prestamo_sobre_avaluo" aria-label="Default select example">
                            
                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == -1)
                                <option selected value="-1">SELECCIONA</option>
                            @else
                                <option value="-1" >SELECCIONA</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 1)
                                <option selected value="1">45</option>
                            @else
                                <option value="1" >45 %</option>
                            @endif
                                
                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 2)
                                <option selected value="2">50 %</option>
                            @else
                                <option value="2" >50 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 3)
                                <option selected value="3">55 %</option>
                            @else
                                <option value="3" >55 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 4)
                                <option selected value="4">60 %</option>
                            @else
                                <option value="4" >60 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 4)
                                <option selected value="5">65%</option>
                            @else
                                <option value="5" >65 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 6)
                                <option selected value="6">70 %</option>
                            @else
                                <option value="6" >70 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 7)
                                <option selected value="7">75 %</option>
                            @else
                                <option value="7" >75 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 8)
                                <option selected value="8">80 %</option>
                            @else
                                <option value="8" >80 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 9)
                                <option selected value="9">85 %</option>
                            @else
                                <option value="9" >85 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 10)
                                <option selected value="10">90 %</option>
                            @else
                                <option value="10" >90 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 11)
                                <option selected value="11">95 %</option>
                            @else
                                <option value="11" >95 %</option>
                            @endif

                            @if($dato_prenda->porcentaje_prestamo_sobre_avaluo == 12)
                                <option selected value="12">100 %</option>
                            @else
                                <option value="12" >100 %</option>
                            @endif
                        
                        </select>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                    <div class="col-md-8">
                        <label for="prestamo_prenda" class="form-label">PRESTAMO</label>
                        <input type="text" name="prestamo_prenda" class="form-control" id="prestamo_prenda" value="{{$dato_prenda->prestamo_prenda}}" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                   
                    <div class=" mb-8 max-w-6xl mx-auto flex items-center justify-center mt-4">
                        <button class="size50 bordes btn btn-primary navbar1">GUARDAR</button>
                    </div>

                </form>
            </div>
         </div>
    </body>

  <script src="{{asset('dist/js/bootstrap.js')}}"></script>

</html>
