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
  <style>
    .textderecha {
      text-align: right;
    }

    table,
    th,
    td {
      border: 1px solid black;
    }

    .textaling {
      text-align: center;
    }
  </style>

  <body>

    <table>
      <tr>
        <th class="text-center" colspan="4">
          <strong>Asociados Nueva Mutua S.A de C.V.</strong><br>
          RFC: ANM-180517PD6 <br>
          MATRIZ: CALLE 23 NO. 100-B x 19 Y 20 <br>
          Col. Centro Umán, Yucatán, <br>
          México. C.P.97390

        </th>
      </tr>
      <tr>
        <th colspan="4" class="text-center fw-bold">---------------------------------------------------------------------------------------------------</th>
      </tr>
      <tr>
        <th colspan="4" class="text-center fw-bold">COMPROBANTE DE PAGO</th>
      </tr>
      <tr>
        <td class="textderecha fw-bold">FECHA:&nbsp;&nbsp;</td>
        <td class="text-center">{{$dato_desempeño->created_at->format('d-m-Y')}}</td>
        <td class="textderecha fw-bold">HORA:&nbsp;&nbsp;</td>
        <td class="text-center">{{$dato_desempeño->created_at->format('H:m:s A')}}</td>
      </tr>
      <tr>
        <td class="textderecha fw-bold">CLIENTE:&nbsp;&nbsp;</td>
        <td colspan="3" class="text-center">{{$dato_desempeño->nombre_cliente}}</td>
      </tr>
      <tr>
        <td class="textderecha fw-bold">BOLETA:&nbsp;&nbsp;</td>
        <td class="text-center">{{$dato_desempeño->id_prendas}}</td>
        <td class="textderecha fw-bold">FOLIO:&nbsp;&nbsp;</td>
        <td class="text-center">{{$dato_desempeño->id_folio}}</td>
      </tr>
      <tr>
        <td class="textderecha fw-bold">PRENDA:&nbsp;&nbsp;</td>
        <td class="text-center" colspan="3">CANTIDAD DE PRENDAS: {{$dato_desempeño->cantidad_prenda}}, <br> {{ $dato_desempeño->caracteristicas_prenda}}</td>
      </tr>
      <tr>
        <td class="textderecha fw-bold">TIPO DE&nbsp;&nbsp; MOVIMIENTO:&nbsp;&nbsp;</td>
        <td colspan="3">&nbsp;&nbsp;DESEMPEÑO</td>
      </tr>
      <tr>
        <td class="textderecha fw-bold">TIPO DE&nbsp;&nbsp; INTERES:&nbsp;&nbsp;</td>
        <td colspan="3">&nbsp;&nbsp;ACUMULATIVO</td>
      </tr>
    </table>


  </body>

  </html>