<div class="modal fade" id="exampleModal{{ $dato_prenda->id_prendas }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: black !important;">
                <h6 class="modal-title" style="color: #fff; text-align: center;">
                    CONFIRMAR DATOS DE PAGO:
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{Route('prenda.update',$dato_prenda->id_prendas)}}" method="POST" onsubmit="return enviar()" name="formulario_pago">
                @csrf
                <input name="_method" type="hidden" value="PUT">
                <div class="modal-body caja2" id="cont_modal">

                    <div class="d-flex  justify-content-around">
                        <div class="col-md-4">
                            <label for="nombre_prenda" class="form-label">
                                <strong>FOLIO:&nbsp;</strong>{{ $dato_prenda->id_prendas }} </label>
                            <input type="hidden" name="id_prendas" class="form-control text-center" id="id_prenda" value="{{ $dato_prenda->id_prendas }}" readonly>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex">
                                <label for="" class="sub "><strong>SOCIO: </strong>
                                    @if ($dato_prenda->cliente->socio == 0.02)
                                    SI
                                    @else
                                    @endif
                                    @if ($dato_prenda->cliente->socio == 0.025)
                                    NO
                                    @else
                                    @endif
                                </label>
                                <!--  <input type="hidden" name="promedio_socio" class="form-control text-center" id="promedio_socio" value="{{ $dato_prenda->cliente->socio }}" readonly> -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class=" caja">
                    <div class="col-md-12 ">
                        <label for="nombre_cliente" class="form-label"> <strong>CLIENTE: &nbsp;</strong>
                            {{ $dato_prenda->cliente->nombre_cliente . ' ' . $dato_prenda->cliente->apellido_cliente }}
                        </label>
                    </div>
                    <div class="">
                        <label for="nombre_prenda" class="form-label"> <strong>NOMBRE DE LA PRENDA: &nbsp;</strong>
                            {{ $dato_prenda->nombre_prenda }} </label>
                    </div>
                    <div class="">
                        <label for="cantidad_prenda" class="form-label"><strong>CANTIDAD DE PRENDAS:
                                &nbsp;</strong>{{ $dato_prenda->cantidad_prenda }}</label>
                    </div>
                    <div class="">
                        <label for="" class="sub "><strong>DESCRIPCION GENERICA: </strong>
                            {{$dato_prenda->descripcion_generica}}
                        </label>
                    </div>
                    <div class="mt-1">
                        <label for="caracteristicas_prenda" class="form-label"><strong>CARACTERISTICAS:
                                &nbsp;</strong>{{ $dato_prenda->caracteristicas_prenda . '.' . ' ' . 'DETALLES ESPECIFICOS:' . ' KILATAJE:' . '' . ' ' . $dato_prenda->kilataje_prenda . 'k' . ',' . ' ' . 'GRAMAJE:' . '' . ' ' . $dato_prenda->gramaje_prenda . 'gr' }}</label>
                    </div>
                    <div class="text-center col-md-12">
                        <p>-----------------------------------------------------------------</p>
                    </div>
                    <div>
                        <label class="col-md-4">
                            <strong>PRESTAMO:&nbsp;&nbsp;</strong>$&nbsp;{{ $dato_prenda->prestamo_prenda }}
                            <input type="hidden" class="col-md-5" id="pago6" onkeyUp="calcular2();" name="pago6" value="{{ $dato_prenda->prestamo_prenda }}" readonly>

                        </label>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="prestamo_prenda" class="form-label"> <strong>
                                REFRENDO:&nbsp;&nbsp;</strong>$&nbsp;
                            <input class="col-md-5" id="refrendo_anterior" name="refrendo_anterior" type="text" readonly>
                        </label>
                    </div>
                    <div class="text-center col-md-12">
                        <p>---------------------------------------------</p>
                    </div>

                    <div class="col-md-12 mt-2">
                        <label for="prestamo_prenda" class="form-label"> <strong>INTERESES:&nbsp;&nbsp;</strong>$&nbsp;
                            <input class="col-md-5" id="interes_anterior" name="interes_anterior" type="text" readonly>
                        </label>
                    </div>
                    <div class="col-md-12">
                        <label for="prestamo_prenda" class="form-label"> <strong>ALMACENAJE:&nbsp;&nbsp;</strong>$&nbsp;
                            <input class="col-md-5" id="almacenaje_anterior" name="almacenaje_anterior" type="text" readonly>
                        </label>
                    </div>
                    <div class="col-md-12">
                        <label for="prestamo_prenda" class="form-label"> <strong>ABONO CAPITAL:&nbsp;&nbsp;</strong>$&nbsp;
                            <input class="col-md-5" id="abono_capital" name="abono_capital" type="text" readonly>
                        </label>
                    </div>
                    <div class="text-center col-md-12">
                        <p>---------------------------------------------</p>
                    </div>

                    <div class="col-md-12">
                        <label for="prestamo_prenda" class="form-label"> <strong>SUB
                                TOTAL:&nbsp;&nbsp;</strong>$&nbsp;
                            <input class="col-md-5" id="sub_refrendo" name="sub_refrendo" type="text" readonly>
                        </label>
                    </div>

                    <div class="col-md-12">
                        <label for="prestamo_prenda" class="form-label"> <strong>SUB
                                I.V.A. 16% :&nbsp;&nbsp;</strong>$&nbsp;
                            <input class="col-md-5" id="iva_anterior" name="iva_anterior" type="text" readonly>
                        </label>
                    </div>
                    <div class="text-center col-md-12">
                        <p>---------------------------------------------</p>
                    </div>
                    <div class="  d-flex  justify-center">
                        <label for="" class="mt-3 h4"><strong>TOTAL A PAGAR:</strong></label>
                    </div>
                    <div class="flex justify-center">
                        <div class="col-md-18">
                            <div class="input-group has-validation">
                                <span class=" fw-bold signo" id="inputGroupPrepend">$</span>
                                <input class="tamañoletra text-center negro" id="total" name="total" type="text" readonly></label>
                            </div>
                        </div>
                    </div>

                    <div class="text-center col-md-12">
                        <p>---------------------------------------------</p>
                    </div>


                    <div class="col-md-12 mt-3">
                        <label for="" class="negritas">CANTIDAD PAGADA:</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text fw-bold signo" id="inputGroupPrepend">$</span>
                            <input type="number" id="cantidad_pago" name="cantidad_pago" class="form-control input_style text-center tamañoletra" readonly>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <label for="" class="negritas">CAMBIO:</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text fw-bold signo" id="inputGroupPrepend">$</span>
                            <input type="text" id="cambio_boleta" name="cambio_boleta" class="form-control input_style text-center letracambio" readonly>
                        </div>
                    </div>

                    <input type="hidden" name="fecha_prestamo" class="sub uno" id="fecha_prestamo" value="{{dias()}}" readonly>
                    <input type="hidden" name="mes1" class="sub uno" id="mes1" value="{{\Carbon\Carbon::now()->addMonths(1)}}" readonly>
                    <input type="hidden" name="mes2" class="sub uno" id="mes2" value="{{\Carbon\Carbon::now()->addMonths(2)}}" readonly>
                    <input type="hidden" name="mes3" class="sub uno" id="mes3" value="{{\Carbon\Carbon::now()->addMonths(3)}}" readonly>
                    <input type="hidden" name="mes4" class="sub uno" id="mes4" value="{{\Carbon\Carbon::now()->addMonths(4)}}" readonly>
                    <input type="hidden" name="mes5" class="sub uno" id="mes5" value="{{\Carbon\Carbon::now()->addMonths(5)}}" readonly>
                    <input type="hidden" name="fecha_comercializacion" class="sub uno" id="fecha_comercializacion" value="{{\Carbon\Carbon::now()->addMonths(6)}}" readonly>

                    <input type="hidden" name="importe_anterior" class="sub uno" id="importe_anterior" value="{{$dato_prenda->prestamo_prenda}}" readonly>
                    <input type="hidden" name="prestamo_prenda" class="sub uno" onkeyUp="calcular3();" id="prestamo_prenda" value="{{$dato_prenda->prestamo_prenda}}" readonly>

                    <input type="hidden" name="interes" class="sub uno" id="interes" value="" readonly>
                    <input type="hidden" name="almacenaje" class="form-control" id="almacenaje" value="" readonly>
                    <input type="hidden" name="iva" class="form-control" id="iva" value="" readonly>
                    <input type="hidden" name="refrendo" class="form-control" id="refrendo" value="" readonly>
                    <input type="hidden" name="desempeño" class="form-control" id="desempeño" value="" readonly>
                    <input type="hidden" name="subtotal" class="form-control" id="subtotal" value="" readonly>

                    <input type="hidden" name="interes2" class="sub uno" id="interes2" value="" readonly>
                    <input type="hidden" name="almacenaje2" class="form-control" id="almacenaje2" value="" readonly>
                    <input type="hidden" name="iva2" class="form-control" id="iva2" value="" readonly>
                    <input type="hidden" name="refrendo2" class="form-control" id="refrendo2" value="" readonly>
                    <input type="hidden" name="desempeño2" class="form-control" id="desempeño2" value="" readonly>
                    <input type="hidden" name="subtotal2" class="form-control" id="subtotal2" value="" readonly>

                    <input type="hidden" name="interes3" class="sub uno" id="interes3" value="" readonly>
                    <input type="hidden" name="almacenaje3" class="form-control" id="almacenaje3" value="" readonly>
                    <input type="hidden" name="iva3" class="form-control" id="iva3" value="" readonly>
                    <input type="hidden" name="refrendo3" class="form-control" id="refrendo3" value="" readonly>
                    <input type="hidden" name="desempeño3" class="form-control" id="desempeño3" value="" readonly>
                    <input type="hidden" name="subtotal3" class="form-control" id="subtotal3" value="" readonly>

                    <input type="hidden" name="interes4" class="sub uno" id="interes4" value="" readonly>
                    <input type="hidden" name="almacenaje4" class="form-control" id="almacenaje4" value="" readonly>
                    <input type="hidden" name="iva4" class="form-control" id="iva4" value="" readonly>
                    <input type="hidden" name="refrendo4" class="form-control" id="refrendo4" value="" readonly>
                    <input type="hidden" name="desempeño4" class="form-control" id="desempeño4" value="" readonly>
                    <input type="hidden" name="subtotal4" class="form-control" id="subtotal4" value="" readonly>

                    <input type="hidden" name="interes5" class="sub uno" id="interes5" value="" readonly>
                    <input type="hidden" name="almacenaje5" class="form-control" id="almacenaje5" value="" readonly>
                    <input type="hidden" name="iva5" class="form-control" id="iva5" value="" readonly>
                    <input type="hidden" name="refrendo5" class="form-control" id="refrendo5" value="" readonly>
                    <input type="hidden" name="desempeño5" class="form-control" id="desempeño5" value="" readonly>
                    <input type="hidden" name="subtotal5" class="form-control" id="subtotal5" value="" readonly>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary btnpago">PAGAR</button>
                </div>
            </form>

        </div>
    </div>
</div>