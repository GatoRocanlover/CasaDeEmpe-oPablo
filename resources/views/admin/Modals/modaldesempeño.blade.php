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

            <form method="POST" action="{{ Route('Tickets.store') }}" onsubmit="return enviar()" name="formulario_pago">
                @csrf

                <div class="modal-body caja2" id="cont_modal">

                    <div class="d-flex  justify-content-around">
                        <div class="col-md-4">
                            <label for="nombre_prenda" class="form-label">
                                <strong>FOLIO:&nbsp;</strong>{{ $dato_prenda->id_prendas }} </label>
                            <input type="hidden" name="id_prendas" class="form-control text-center" id="id_prendas" value="{{ $dato_prenda->id_prendas }}" readonly>
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
                                <input type="hidden" name="promedio_socio" class="form-control text-center" id="promedio_socio" value="{{ $dato_prenda->cliente->socio }}" readonly>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=" caja">
                    <div class="col-md-12 ">
                        <label for="nombre_cliente" class="form-label"> <strong>CLIENTE: &nbsp;</strong>
                            {{ $dato_prenda->cliente->nombre_cliente . ' ' . $dato_prenda->cliente->apellido_cliente }}
                        </label>
                        <input type="hidden" name="nombre_cliente" class="form-control letranom" id="nombre_cliente" value="{{ $dato_prenda->cliente->nombre_cliente . ' ' . $dato_prenda->cliente->apellido_cliente }}" readonly>
                    </div>
                    <div class="">
                        <label for="nombre_prenda" class="form-label"> <strong>NOMBRE DE LA PRENDA: &nbsp;</strong>
                            {{ $dato_prenda->nombre_prenda }} </label>
                        <input type="hidden" name="nombre_prenda" class="form-control" id="nombre_prenda" value="{{ $dato_prenda->nombre_prenda }}" readonly>

                    </div>
                    <div class="">
                        <label for="cantidad_prenda" class="form-label"><strong>CANTIDAD DE PRENDAS:
                                &nbsp;</strong>{{ $dato_prenda->cantidad_prenda }}</label>
                        <input type="hidden" name="cantidad_prenda" class="form-control text-center" id="cantidad_prenda" value="{{ $dato_prenda->cantidad_prenda }}" readonly>
                    </div>
                    <div class="">
                        <label for="" class="sub "><strong>DESCRIPCIÓN GENERICA: </strong>
                            {{$dato_prenda->descripcion_generica}}
                        </label>
                        <input type="hidden" name="descripcion_generica" class="form-control text-center" id="descripcion_generica" value="{{$dato_prenda->descripcion_generica}}" readonly>
                    </div>
                    <div class="mt-1">
                        <label for="caracteristicas_prenda" class="form-label"><strong>CARACTERÍSTICAS:
                                &nbsp;</strong>@if ($dato_prenda->status ==1){{$dato_prenda->caracteristicas_prenda}}@else{{ $dato_prenda->caracteristicas_prenda . '.' . ' ' . 'DETALLES ESPECIFICOS:' . ' KILATAJE:' . '' . ' ' . $dato_prenda->kilataje_prenda . 'k' . ',' . ' ' . 'GRAMAJE:' . '' . ' ' . $dato_prenda->gramaje_prenda . 'gr' }}@endif</label>
                        <input type="hidden" name="caracteristicas_prenda1" class="form-control text-center" id="caracteristicas_prenda1" 
                        value="@if ($dato_prenda->status ==1){{$dato_prenda->caracteristicas_prenda}}@else{{ $dato_prenda->caracteristicas_prenda . '.' . ' ' . 'DETALLES ESPECIFICOS:' . ' KILATAJE:' . '' . ' ' . $dato_prenda->kilataje_prenda . 'k' . ',' . ' ' . 'GRAMAJE:' . '' . ' ' . $dato_prenda->gramaje_prenda . 'gr' }}@endif" readonly>
                    </div>
                    <div class="text-center col-md-12">
                        <p>-----------------------------------------------------------------</p>
                    </div>
                    <div>
                        <label class="col-md-4">
                            <strong>PRÉSTAMO:&nbsp;&nbsp;</strong>$&nbsp;{{ $dato_prenda->prestamo_prenda }}
                        </label>
                        <input type="hidden" id="prestamo_prenda_ticket" name="prestamo_prenda_ticket" value="{{ $dato_prenda->prestamo_prenda }}">
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="prestamo_prenda" class="form-label"> <strong>INTERESES:&nbsp;&nbsp;</strong>$&nbsp;<input class="col-md-5" id="interes_ticket" name="interes_ticket" type="text" readonly></label>
                    </div>
                    <div class="col-md-12">
                        <label for="prestamo_prenda" class="form-label"> <strong>ALMACENAJE:&nbsp;&nbsp;</strong>$&nbsp;<input class="col-md-5" id="almacenaje_ticket" name="almacenaje_ticket" type="text" readonly></label>
                    </div>
                    <div class="text-center col-md-12">
                        <p>---------------------------------------------</p>
                    </div>

                    <div class="col-md-12">
                        <label for="prestamo_prenda" class="form-label"> <strong>SUB
                                TOTAL:&nbsp;&nbsp;</strong>$&nbsp;<input class="col-md-5" id="subtotal_ticket" name="subtotal_ticket" type="text" readonly></label>
                    </div>
                    <div class="col-md-12">
                        <label for="prestamo_prenda" class="form-label"> <strong>SUB
                                I.V.A. 16% :&nbsp;&nbsp;</strong>$&nbsp;<input class="col-md-5" id="iva_ticket" name="iva_ticket" type="text" readonly></label>
                    </div>
                    <div class="col-md-12">
                        <label for="prestamo_prenda" class="form-label"> <strong>
                                RECARGOS :&nbsp;&nbsp;</strong>$&nbsp;<input class="col-md-5" id="recargo_des_ticket" name="recargo_des_ticket" type="text" readonly></label>
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
                                <input class="tamañoletra text-center negro" id="total_ticket" name="total_ticket" type="text" readonly></label>
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


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary btnpago">PAGAR</button>
                </div>


                <input type="hidden" name="folio_cotizacion" class="form-control" id="folio_cotizacion" value="{{ $dato_prenda->folio_cotizacion}}" readonly>
                <input type="hidden" name="kilataje_prenda" class="form-control" id="kilataje_prenda" value="{{ $dato_prenda->kilataje_prenda}}" readonly>
                <input type="hidden" name="gramaje_prenda" class="form-control" id="gramaje_prenda" value="{{ $dato_prenda->gramaje_prenda}}" readonly>
                <input type="hidden" name="caracteristicas_prenda" class="form-control" id="caracteristicas_prenda" value="{{ $dato_prenda->caracteristicas_prenda}}" readonly>
                <input type="hidden" name="avaluo_prenda" class="form-control" id="avaluo_prenda" value="{{ $dato_prenda->avaluo_prenda}}" readonly>
                <input type="hidden" name="porcentaje_prestamo_sobre_avaluo" class="form-control" id="porcentaje_prestamo_sobre_avaluo" value="{{ $dato_prenda->porcentaje_prestamo_sobre_avaluo}}" readonly>
                <input type="hidden" name="prestamo_inicial" class="form-control" id="prestamo_inicial" value="{{ $dato_prenda->prestamo_inicial}}" readonly>
                <input type="hidden" name="prestamo_prenda" class="form-control" id="prestamo_prenda" value="{{ $dato_prenda->prestamo_prenda}}" readonly>
                <input type="hidden" name="fecha_prestamo" class="form-control" id="fecha_prestamo" value="{{ $dato_prenda->fecha_prestamo}}" readonly>
                <input type="hidden" name="fecha_comercializacion" class="form-control" id="fecha_comercializacion" value="{{ $dato_prenda->fecha_comercializacion}}" readonly>
                
                <input type="hidden" name="mes1" class="form-control" id="mes1" value="{{ $dato_prenda->mes1}}" readonly>
                <input type="hidden" name="interes" class="form-control" id="interes" value="{{ $dato_prenda->interes}}" readonly>
                <input type="hidden" name="almacenaje" class="form-control" id="almacenaje" value="{{ $dato_prenda->almacenaje}}" readonly>
                <input type="hidden" name="iva" class="form-control" id="iva" value="{{ $dato_prenda->iva}}" readonly>
                <input type="hidden" name="refrendo" class="form-control" id="refrendo" value="{{ $dato_prenda->refrendo}}" readonly>
                <input type="hidden" name="desempeño" class="form-control" id="desempeño" value="{{ $dato_prenda->desempeño}}" readonly>
                <input type="hidden" name="subtotal" class="form-control" id="subtotal" value="{{ $dato_prenda->subtotal}}" readonly>

                <input type="hidden" name="mes2" class="form-control" id="mes2" value="{{ $dato_prenda->mes2}}" readonly>
                <input type="hidden" name="interes2" class="form-control" id="interes2" value="{{ $dato_prenda->interes2}}" readonly>
                <input type="hidden" name="almacenaje2" class="form-control" id="almacenaje2" value="{{ $dato_prenda->almacenaje2}}" readonly>
                <input type="hidden" name="iva2" class="form-control" id="iva2" value="{{ $dato_prenda->iva2}}" readonly>
                <input type="hidden" name="refrendo2" class="form-control" id="refrendo2" value="{{ $dato_prenda->refrendo2}}" readonly>
                <input type="hidden" name="desempeño2" class="form-control" id="desempeño2" value="{{ $dato_prenda->desempeño2}}" readonly>
                <input type="hidden" name="subtotal2" class="form-control" id="subtotal2" value="{{ $dato_prenda->subtotal2}}" readonly>

                <input type="hidden" name="mes3" class="form-control" id="mes3" value="{{ $dato_prenda->mes3}}" readonly>
                <input type="hidden" name="interes3" class="form-control" id="interes3" value="{{ $dato_prenda->interes3}}" readonly>
                <input type="hidden" name="almacenaje3" class="form-control" id="almacenaje3" value="{{ $dato_prenda->almacenaje3}}" readonly>
                <input type="hidden" name="iva3" class="form-control" id="iva3" value="{{ $dato_prenda->iva3}}" readonly>
                <input type="hidden" name="refrendo3" class="form-control" id="refrendo3" value="{{ $dato_prenda->refrendo3}}" readonly>
                <input type="hidden" name="desempeño3" class="form-control" id="desempeño3" value="{{ $dato_prenda->desempeño3}}" readonly>
                <input type="hidden" name="subtotal3" class="form-control" id="subtotal3" value="{{ $dato_prenda->subtotal3}}" readonly>

                <input type="hidden" name="mes4" class="form-control" id="mes4" value="{{ $dato_prenda->mes4}}" readonly>
                <input type="hidden" name="interes4" class="form-control" id="interes4" value="{{ $dato_prenda->interes4}}" readonly>
                <input type="hidden" name="almacenaje4" class="form-control" id="almacenaje4" value="{{ $dato_prenda->almacenaje4}}" readonly>
                <input type="hidden" name="iva4" class="form-control" id="iva4" value="{{ $dato_prenda->iva4}}" readonly>
                <input type="hidden" name="refrendo4" class="form-control" id="refrendo4" value="{{ $dato_prenda->refrendo4}}" readonly>
                <input type="hidden" name="desempeño4" class="form-control" id="desempeño4" value="{{ $dato_prenda->desempeño4}}" readonly>
                <input type="hidden" name="subtotal4" class="form-control" id="subtotal4" value="{{ $dato_prenda->subtotal4}}" readonly>

                <input type="hidden" name="mes5" class="form-control" id="mes5" value="{{ $dato_prenda->mes5}}" readonly>
                <input type="hidden" name="interes5" class="form-control" id="interes5" value="{{ $dato_prenda->interes5}}" readonly>
                <input type="hidden" name="almacenaje5" class="form-control" id="almacenaje5" value="{{ $dato_prenda->almacenaje5}}" readonly>
                <input type="hidden" name="iva5" class="form-control" id="iva5" value="{{ $dato_prenda->iva5}}" readonly>
                <input type="hidden" name="refrendo5" class="form-control" id="refrendo5" value="{{ $dato_prenda->refrendo5}}" readonly>
                <input type="hidden" name="desempeño5" class="form-control" id="desempeño5" value="{{ $dato_prenda->desempeño5}}" readonly>
                <input type="hidden" name="subtotal5" class="form-control" id="subtotal5" value="{{ $dato_prenda->subtotal5}}" readonly>

                <input type="hidden" name="abono_capital" class="form-control" id="abono_capital" value="{{ $dato_prenda->abono_capital}}" readonly>
                <input type="hidden" name="importe_anterior" class="form-control" id="importe_anterior" value="{{ $dato_prenda->importe_anterior}}" readonly>
                <input type="hidden" name="importe_actual" class="form-control" id="importe_actual" value="{{ $dato_prenda->importe_actual}}" readonly>
                <input type="hidden" name="interes_anterior" class="form-control" id="interes_anterior" value="{{ $dato_prenda->interes_anterior}}" readonly>
                <input type="hidden" name="almacenaje_anterior" class="form-control" id="almacenaje_anterior" value="{{ $dato_prenda->almacenaje_anterior}}" readonly>
                <input type="hidden" name="iva_anterior" class="form-control" id="iva_anterior" value="{{ $dato_prenda->iva_anterior}}" readonly>
                <input type="hidden" name="refrendo_anterior" class="form-control" id="refrendo_anterior" value="{{ $dato_prenda->refrendo_anterior}}" readonly>
           
                <input type="hidden" name="numeros_refrendos" class="form-control" id="numeros_refrendos" value="{{ $dato_prenda->numeros_refrendos}}" readonly>
                <input type="hidden" name="cantidad_pago1" class="form-control" id="cantidad_pago1" value="{{ $dato_prenda->cantidad_pago}}" readonly>
                <input type="hidden" name="cambio_boleta1" class="form-control" id="cambio_boleta1" value="{{ $dato_prenda->cambio_boleta}}" readonly>
                <input type="hidden" name="folio_refrendo" class="form-control" id="folio_refrendo" value="{{ $dato_prenda->folio_refrendo}}" readonly>
                <input type="hidden" name="sub_refrendo" class="form-control" id="sub_refrendo" value="{{ $dato_prenda->sub_refrendo}}" readonly>
                <input type="hidden" name="total" class="form-control" id="total" value="{{ $dato_prenda->total}}" readonly>
                <input type="hidden" name="recargo_des" class="form-control" id="recargo_des" value="{{ $dato_prenda->recargo_des}}" readonly>

                <input type="hidden" name="hora_refrendo" class="form-control" id="hora_refrendo" value="{{ $dato_prenda->hora_refrendo}}" readonly>
                <input type="hidden" name="folio_capi" class="form-control" id="folio_capi" value="{{ $dato_prenda->folio_capi}}" readonly>
                <input type="hidden" name="abono_capital_capi" class="form-control" id="abono_capital_capi" value="{{ $dato_prenda->abono_capital_capi}}" readonly>
                <input type="hidden" name="interes_anterior_capi" class="form-control" id="interes_anterior_capi" value="{{ $dato_prenda->interes_anterior_capi}}" readonly>
                <input type="hidden" name="almacenaje_anterior_capi" class="form-control" id="almacenaje_anterior_capi" value="{{ $dato_prenda->almacenaje_anterior_capi}}" readonly>
                <input type="hidden" name="sub_capital" class="form-control" id="sub_capital" value="{{ $dato_prenda->sub_capital}}" readonly>
                <input type="hidden" name="iva_anterior_capi" class="form-control" id="iva_anterior_capi" value="{{ $dato_prenda->iva_anterior_capi}}" readonly>
           
                <input type="hidden" name="total_capi" class="form-control" id="total_capi" value="{{ $dato_prenda->total_capi}}" readonly>
                <input type="hidden" name="cantidad_pago_capi" class="form-control" id="cantidad_pago_capi" value="{{ $dato_prenda->cantidad_pago_capi}}" readonly>
                <input type="hidden" name="cambio_boleta_capi" class="form-control" id="cambio_boleta_capi" value="{{ $dato_prenda->cambio_boleta_capi}}" readonly>
                
                <input type="hidden" name="importe_anterior_capi" class="form-control" id="importe_anterior_capi" value="{{ $dato_prenda->importe_anterior_capi}}" readonly>
                <input type="hidden" name="importe_actual_capi" class="form-control" id="importe_actual_capi" value="{{ $dato_prenda->importe_actual_capi}}" readonly>
                <input type="hidden" name="recargo_des_capi" class="form-control" id="recargo_des_capi" value="{{ $dato_prenda->recargo_des_capi}}" readonly>
                <input type="hidden" name="numeros_capital" class="form-control" id="numeros_capital" value="{{ $dato_prenda->numeros_capital}}" readonly>
           
                <input type="hidden" name="cantidad_prenda'" class="form-control" id="cantidad_prenda'" value="{{$dato_prenda->cantidad_prenda}}" readonly>
                <input type="hidden" name="id_cliente" class="form-control" id="id_cliente" value="{{ $dato_prenda->id_cliente}}" readonly>
                <input type="hidden" name="status" class="form-control" id="status" value="{{ $dato_prenda->status}}" readonly>
           
           
            </form>

        </div>
    </div>
</div>