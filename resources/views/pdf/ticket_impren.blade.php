<DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">

    <title>Casa de Empeño Asociados Nueva Mutua.</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('dist/css/estilosBoleta2.css')}}">
    <script type="text/javascript" src="/JavaScript.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <!--Boostrap-->
    <link href="{{asset('dist/fontawesome/css/all.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  </head>


  <body>
    <table>
      <tr>
        <th colspan="9">
          <header>
            <div>
              <p class="text2">Folio: {{$dato_tickeimpr->id_prendas}}
              <p>
            </div>
            <div class="text1 mt-3">
              <h9>Asociados Nueva Mutua S.A. DE C.V.</h9>
              <p>RFC: ANM-180517PD6 <br>
                Matriz: Calle 23 Nº 100-B x 18 y20<br>
                Col. Centro, Umán, Yucatán, C.P. 97390<br>
                Boleta de Empeño</p>

            </div>
            <div>
              <img src="{{asset('img/FONDO.png')}}" alt="">
            </div>
          </header>
          <div class="btn2 mt-3">
            <p>FECHA DEL MOVIMIENTO:&nbsp; {{$dato_tickeimpr->created_at->format('d/m/Y')}} </p>
            <p>NOMBRE DEL SOCIO: &nbsp; {{$dato_tickeimpr->nombre_cliente}}</p>
            <p>TIPO DE CUENTA: &nbsp; DESEMPEÑO</p>
          </div>

          <!-- ------------------------------------------------------------------------>
          <br>


          <div class="centrotable">
            <table class="table2">
              <thead class="ng">
                <tr>
                  <th class="lina">NOMBRE DE LA PRENDA</th>
                  <th class="lina">DESCRIPCION GENERICA</th>
                  <th class="lina">CARACTERISTICAS</th>
                  <th class="lina">PRESTAMO</th>
                  <th class="lina">CANTIDAD PAGADA</th>
                  <th class="lina3">CAMBIO</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th class="lina2">{{$dato_tickeimpr->nombre_prenda}}</th>
                  <td class="lina2">
                    @if($dato_tickeimpr->descripcion_generica == 1)
                    ORO
                    @else
                    @endif
                    @if($dato_tickeimpr->descripcion_generica == 2)
                    PLATA
                    @else
                    @endif
                  </td>
                  <td class="lina2">{{$dato_tickeimpr->caracteristicas_prenda}}</td>
                  <td class="lina2">${{$dato_tickeimpr->prestamo_prenda}}</td>
                  <td class="lina2">${{$dato_tickeimpr->cantidad_pago}}</td>
                  <td>${{$dato_tickeimpr->cambio_boleta}}</td>
                </tr>
                <tr>
              </tbody>
            </table>
          </div> 
          <!-- ------------------------------------------------------------------------>
          <br>
          <br>
          <br>
          <br>

          <div class="firma">
            <div>
              <p class="text-center">_____________________________________________</p>
              <p class="text-center">{{$dato_tickeimpr->nombre_cliente}}</p>
            </div>
          </div>

          <br>


          <footer>
            <div class="d-flex text-center ntp">
              <p>©Copyright 2022 Asociados Nueva Mutua. Reservados todos los derechos..</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
              <p>Fecha de impresión: Umán, Yuc a
                <script type="text/javascript">
                  var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                  var f = new Date();
                  document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                </script>
              </p>
            </div>

          </footer>

  </body>

  </html>