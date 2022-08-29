
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>&nbsp; &nbsp; SE REALIZÓ EL PAGO POR DESEMPEÑO, VERIFICAR EN LA PRIMERA FILA DE LA TABLA.... </strong>
</div>
@endif
@if ($message = Session::get('successCotizacion'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>&nbsp; &nbsp; SE DIO DE ALTA LA COTIZACIÓN, VERIFICAR EN LA PRIMERA FILA DE LA TABLA.... </strong>
</div>
@endif
@if ($message = Session::get('successBoleta'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>&nbsp; &nbsp; SE DIO DE ALTA LA BOLETA, VERIFICAR EN LA PRIMERA FILA DE LA TABLA.... </strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong> $message </strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong> $message </strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong> $message </strong>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Check the following errors :(
</div>
@endif