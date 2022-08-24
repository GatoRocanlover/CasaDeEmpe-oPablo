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
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .tabla {
            display: flex;
            flex-wrap: wrap;
        }

        .tabla1 {
            width: 500px;
            height: 845px;
            padding: 30px;
        }

        .tabla2 {
            border-left: 2px solid black;
            width: 500px;
            height: 845px;
            padding: 30px;
        }

        textarea {
            width: 405px;
            height: 90px;
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





            <br>
            <br>
            <div class="tabla justify-content-center">
                <div class="tabla1">
                    <label for="" class="h5 text-center col-md-11">DATOS DE LA PRENDA</label>
                    {{ csrf_field() }}
                    <div class="col-md-11 mt-8">
                        <label for="" class="fw-bold">BUSCAR:</label>
                        <input type="text" name="buscador" id="buscador" class="form-control" placeholder="INGRESE EL FOLIO O EL NOMBRE DE LA PRENDA"/>
                    </div>
                    <br>
                    <div class="col-md-11">
                        <label for="" class="fw-bold">FOLIO:</label>
                        <input type="text" class="form-control input-sm" id="txtid_prendas" name="txtid_prendas" disabled>
                        <br>
                        <label for="" class="fw-bold">NOMBRE DE LA PRENDA:</label>
                        <input type="text" class="form-control input-sm" id="txtnombre_prenda" name="txtnombre_prenda" readonly>
                        <br>
                        <label for="" class="fw-bold">DESCRIPCIÓN GENERICA:</label>
                        <input type="text" class="form-control input-sm" id="txtdescripcion_generica" name="txtdescripcion_generica" readonly>
                        <br>
                        <input type="hidden" class="form-control input-sm" id="txtkilataje_prenda" name="txtkilataje_prenda" readonly>
                        <Label class="fw-bold">KILATAJE:</Label>
                        <input type="text" class="form-control input-sm" id="txtgramaje_prenda" name="txtgramaje_prenda" readonly>
                        <br>
                        <Label>CARACTERISTICAS:</Label>
                        <textarea name="txtcaracteristicas_prenda" id="txtcaracteristicas_prenda" cols="30" rows="8" class="text-center" readonly></textarea>
                        
                        <Label class="mt-3">AVALUO:</Label>
                        <input type="text" class="form-control input-sm" id="txtavaluo_prenda" name="txtavaluo_prenda" readonly>
                    </div>
                </div>
                <div class="tabla2">

                </div>
            </div>
        </div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.all.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script src="{{asset('dist/js/bootstrap.js')}}"></script>
<script src="{{asset('dist/js/jquery.min.js')}}"></script>

<script>
    $(document).ready(function() {

        $('#buscador').keyup(function() {
            var query = $(this).val();
            if (query != '') {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: "{{ route('autocomplete.fetch') }}",
                    method: "POST",
                    data: {
                        query: query,
                        _token: _token
                    },
                    success: function(data) {


                        if (data.length == 0) {
                            console.log("sin datos");
                        }
                        console.log(data[0].nombre_prenda);

                        var prenda = data[0];

                        $('#txtid_prendas').val(prenda['id_prendas']);
                        $('#txtnombre_prenda').val(prenda['nombre_prenda']);

                        if (prenda['descripcion_generica'] == 1) {
                            $('#txtdescripcion_generica').val("ORO")
                        }
                        if (prenda['descripcion_generica'] == 2) {
                            $('#txtdescripcion_generica').val("PLATA")
                        }
                        $('#txtkilataje_prenda').val(prenda['kilataje_prenda']);
                        $('#txtgramaje_prenda').val(prenda['gramaje_prenda']);
                        $('#txtcaracteristicas_prenda').val(prenda['caracteristicas_prenda']);
                        $('#txtavaluo_prenda').val(prenda['avaluo_prenda']);



                        /*      var nombrepre = data;
                             var datalist ={};
                             for(var i=0; i< nombrepre.length; i++){
                                 datalist[nombrepre[i].nombre_prenda]=null;
                             }
                             console.log("datalist")
                             console.log(datalist) */
                    }
                });
            }
        });
    });
</script>


</html>