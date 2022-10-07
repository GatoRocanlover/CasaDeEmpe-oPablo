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

            <form action="{{Route('prenda_capi.update',$dato_prenda->id_prendas)}}" method="POST" onsubmit="return enviar()" name="formulario_pago">
                @csrf
                <input name="_method" type="hidden" value="PUT">
                <div class="modal-body caja2" id="cont_modal">

                     <div class="d-flex mt-4  justify-content-around">
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
                    <div class="mt-2">
                        <label for="caracteristicas_prenda" class="form-label"><strong>CARACTERISTICAS:
                                &nbsp;</strong>{{ $dato_prenda->caracteristicas_prenda . '.' . ' ' . 'DETALLES ESPECIFICOS:' . ' KILATAJE:' . '' . ' ' . $dato_prenda->kilataje_prenda . 'k' . ',' . ' ' . 'GRAMAJE:' . '' . ' ' . $dato_prenda->gramaje_prenda . 'gr' }}</label>
                    </div>
                    <div class="col-md-12">
                        <label for="prestamo_prenda" class="form-label"> <strong>
                                FECHA Y HORA:&nbsp;&nbsp;</strong>
                                <input type="text" name="hora_capital" class="" id="hora_capital" value="{{\Carbon\Carbon::now()}}" readonly>
                        </label>
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
                            <input class="col-md-5" id="refrendo_anterior_capi" name="refrendo_anterior_capi" type="text" readonly>
                        </label>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="prestamo_prenda" class="form-label"> <strong>
                                NÚMEROS DE REFRENDOS:&nbsp;&nbsp;</strong>#&nbsp;{{ $dato_prenda->numeros_refrendos}} <br>
                            <input class="col-md-5" id="refrendos22" onkeyUp="calcular2();" name="refrendos22" type="hidden" value="{{$dato_prenda->numeros_capital}}" readonly>
                            <input class="col-md-5" id="refrendos44" onkeyUp="calcular2();" name="refrendos44" type="hidden" value="1" readonly>
                            <input class="col-md-5" id="numeros_capital" name="numeros_capital" type="hidden" value="" readonly>
                        </label>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="prestamo_prenda" class="form-label"> <strong>
                                NÚMEROS DE ABONOS A CAPITAL REALIZADOS:&nbsp;&nbsp;</strong>#&nbsp;{{ $dato_prenda->numeros_capital}} <br>
                        </label>
                    </div>
                    <div class="text-center col-md-12">
                        <p>---------------------------------------------</p>
                    </div>

                    <div class="col-md-12 mt-2">
                        <label for="prestamo_prenda" class="form-label"> <strong>INTERESES:&nbsp;&nbsp;</strong>$&nbsp;
                            <input class="col-md-5" id="interes_anterior_capi" name="interes_anterior_capi" type="text" readonly>
                        </label>
                    </div>
                    <div class="col-md-12">
                        <label for="prestamo_prenda" class="form-label"> <strong>ALMACENAJE:&nbsp;&nbsp;</strong>$&nbsp;
                            <input class="col-md-5" id="almacenaje_anterior_capi" name="almacenaje_anterior_capi" type="text" readonly>
                        </label>
                    </div>
                    <div class="col-md-12">
                        <label for="prestamo_prenda" class="form-label"> <strong>ABONO CAPITAL:&nbsp;&nbsp;</strong><b style="color:green">$</b>&nbsp;
                            <input class="col-md-5 fw-bold" id="abono_capital_capi" style="color:green" name="abono_capital_capi" type="text" readonly>
                        </label>
                    </div>
                    <div class="text-center col-md-12">
                        <p>---------------------------------------------</p>
                    </div>

                    <div class="col-md-12">
                        <label for="prestamo_prenda" class="form-label"> <strong>SUB
                                TOTAL:&nbsp;&nbsp;</strong>$&nbsp;
                            <input class="col-md-5" id="sub_capital" name="sub_capital" type="text" readonly>
                        </label>
                    </div>

                    <div class="col-md-12">
                        <label for="prestamo_prenda" class="form-label"> <strong>SUB
                                I.V.A. 16% :&nbsp;&nbsp;</strong>$&nbsp;
                            <input class="col-md-5" id="iva_anterior_capi" name="iva_anterior_capi" type="text" readonly>
                        </label>
                    </div>
                    <div class="col-md-12">
                        <label for="prestamo_prenda" class="form-label"> <strong>
                                RECARGO:&nbsp;&nbsp;</strong>$&nbsp;
                            <input class="col-md-5" id="recargo_des_capi" name="recargo_des_capi" type="text" readonly>
                        </label>
                    </div>
                    <div class="text-center col-md-12">
                        <p>---------------------------------------------</p>
                    </div>
                    <div class="col-md-12">
                        <label for="prestamo_prenda" class="form-label"> <strong>
                                NUEVO SALDO:&nbsp;&nbsp;</strong>$&nbsp;
                            <input type="text" name="prestamo_prenda" class="sub uno" onkeyUp="calcular3();" id="prestamo_prenda" value="{{$dato_prenda->prestamo_prenda}}" readonly>
                        </label>
                    </div>



                    <!-- /inicio modal/ -->


                    <div class="text-center mt-3">
                        <a data-toggle="modal" href="#myModal2" class="btn btn-primary">VER NUEVA TABLA DE PAGOS</a>
                    </div>




                    <div class="modal" id="myModal2">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-center">NUEVA TABLA DE PAGOS:</h4>
                                </div>
                                <div class="container"></div>
                                <div class="modal-body">

                                <input type="text" name="fecha_prestamo" class="col-md-12 text-center" id="fecha_prestamo" value="{{dias()}}" readonly>



                                    <div class=" table-responsive">

                                        <table class="table table-sm mt-3">
                                            <tr>

                                                <th rowspan="2">
                                                    <br>
                                                    NUMERO
                                                </th>

                                                <th colspan="4">MONTO</th>

                                                <th colspan="2">TOTAL A PAGAR</th>

                                                <th rowspan="2">CUANDO SE REALIZAN LOS PAGOS</th>

                                            </tr>

                                            <tr>

                                                <th>IMPORTE DE MUTUO</th>

                                                <th>&nbsp;INTERESES&nbsp;</th>

                                                <th>&nbsp;ALMACENAJE&nbsp;</th>

                                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IVA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>

                                                <th>POR REFRENDO</th>

                                                <th>POR DESEMPEÑO</th>

                                            </tr>

                                            <tr>

                                                <th>1° Mes</th>

                                                <td>$<input type="text" name="prestamo_prenda1" class="col-md-8 text-center" id="prestamo_prenda1" value="" readonly></td>

                                                <td>$<input type="text" name="interes" class="col-md-8 text-center" id="interes" value="" readonly></td>

                                                <td>$<input type="text" name="almacenaje" class="col-md-8 text-center" id="almacenaje" value="" readonly></td>

                                                <td>$<input type="text" name="iva" class="col-md-8 text-center" id="iva" value="" readonly></td>

                                                <td>$<input type="text" name="refrendo" class="col-md-8 text-center" id="refrendo" value="" readonly></td>

                                                <td>$<input type="text" name="desempeño" class="col-md-8 text-center" id="desempeño" value="" readonly></td>

                                                <td>
                                                    <input type="text" name="mes11" class="text-center" id="mes11" value="{{\Carbon\Carbon::now()->addMonths(1)->formatLocalized('%d-%B-%Y')}}" readonly>
                                                    <input type="hidden" name="mes1" class="text-center" id="mes1" value="{{\Carbon\Carbon::now()->addMonths(1)}}" readonly>
                                                </td>

                                            </tr>
                                            <tr>
                                                <th>2° Mes</th>

                                                <td>
                                                    $<input type="text" name="prestamo_prenda2" class="col-md-8 text-center" id="prestamo_prenda2" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="interes2" class="col-md-8 text-center" id="interes2" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="almacenaje2" class="col-md-8 text-center" id="almacenaje2" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="iva2" class="col-md-8 text-center" id="iva2" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="refrendo2" class="col-md-8 text-center" id="refrendo2" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="desempeño2" class="col-md-8 text-center" id="desempeño2" value="" readonly>
                                                </td>
                                                <td>
                                                    <input type="text" name="mes22" class="text-center" id="mes22" value="{{\Carbon\Carbon::now()->addMonths(2)->formatLocalized('%d-%B-%Y')}}" readonly>
                                                    <input type="hidden" name="mes2" class="sub uno" id="mes2" value="{{\Carbon\Carbon::now()->addMonths(2)}}" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>3° Mes</th>

                                                <td>
                                                    $<input type="text" name="prestamo_prenda3" class="col-md-8 text-center" id="prestamo_prenda3" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="interes3" class="col-md-8 text-center" id="interes3" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="almacenaje3" class="col-md-8 text-center" id="almacenaje3" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="iva3" class="col-md-8 text-center" id="iva3" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="refrendo3" class="col-md-8 text-center" id="refrendo3" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="desempeño3" class="col-md-8 text-center" id="desempeño3" value="" readonly>
                                                <td>
                                                    <input type="text" name="mes33" class="text-center" id="mes33" value="{{\Carbon\Carbon::now()->addMonths(3)->formatLocalized('%d-%B-%Y')}}" readonly>
                                                    <input type="hidden" name="mes3" class="sub uno" id="mes3" value="{{\Carbon\Carbon::now()->addMonths(3)}}" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>4° Mes</th>

                                                <td>
                                                    $<input type="text" name="prestamo_prenda4" class="col-md-8 text-center" id="prestamo_prenda4" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="interes4" class="col-md-8 text-center" id="interes4" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="almacenaje4" class="col-md-8 text-center" id="almacenaje4" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="iva4" class="col-md-8 text-center" id="iva4" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="refrendo4" class="col-md-8 text-center" id="refrendo4" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="desempeño4" class="col-md-8 text-center" id="desempeño4" value="" readonly>
                                                </td>
                                                <td>
                                                    <input type="text" name="mes44" class="text-center" id="mes44" value="{{\Carbon\Carbon::now()->addMonths(4)->formatLocalized('%d-%B-%Y')}}" readonly>
                                                    <input type="hidden" name="mes4" class="sub uno" id="mes4" value="{{\Carbon\Carbon::now()->addMonths(4)}}" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>5° Mes</th>

                                                <td>
                                                    $<input type="text" name="prestamo_prenda5" class="col-md-8 text-center" id="prestamo_prenda5" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="interes5" class="col-md-8 text-center" id="interes5" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="almacenaje5" class="col-md-8 text-center" id="almacenaje5" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="iva5" class="col-md-8 text-center" id="iva5" value="" readonly>
                                                </td>
                                                <td class="fw-bold">
                                                    $<input type="text" name="refrendo5" class="col-md-8 text-center" id="refrendo5" value="" readonly>
                                                </td>
                                                <td>
                                                    $<input type="text" name="desempeño5" class="col-md-8 text-center" id="desempeño5" value="" readonly>
                                                </td>
                                                <td>
                                                    <input type="text" name="mes55" class="text-center" id="mes55" value="{{\Carbon\Carbon::now()->addMonths(5)->formatLocalized('%d-%B-%Y')}}" readonly>
                                                    <input type="hidden" name="mes5" class="sub uno" id="mes5" value="{{\Carbon\Carbon::now()->addMonths(5)}}" readonly>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>



                                </div>
                                <div class="modal-footer">
                                    VERIFIQUE QUE LA INFORMACIÓN ESTE CORRECTA.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /fin modal/ -->


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
                                <input class="tamañoletra text-center negro" id="total_capi" name="total_capi" type="text" readonly></label>
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
                            <input type="number" id="cantidad_pago_capi" name="cantidad_pago_capi" class="form-control input_style text-center tamañoletra" readonly>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <label for="" class="negritas">CAMBIO:</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text fw-bold signo" id="inputGroupPrepend">$</span>
                            <input type="text" id="cambio_boleta_capi" name="cambio_boleta_capi" class="form-control input_style text-center letracambio" readonly>
                        </div>
                    </div>

                    <input type="hidden" name="importe_actual_capi" class="sub uno" id="importe_actual_capi" value="" readonly>
                    <input type="hidden" name="folio_capi" class="sub uno" id="capi" value="{{'ABACA'.$dato_prenda->id_prendas.''.$dato_prenda->numeros_capital}}" readonly>
                    <input type="hidden" name="importe_anterior_capi" class="sub uno" id="importe_anterior_capi" value="{{$dato_prenda->prestamo_prenda}}" placeholder="anterior" readonly>
                    <input type="hidden" name="fecha_comercializacion" class="sub uno" id="fecha_comercializacion" value="{{\Carbon\Carbon::now()->addMonths(6)}}" readonly>
                    <input type="hidden" name="subtotal" class="form-control" id="subtotal" value="" readonly>
                    <input type="hidden" name="subtotal2" class="form-control" id="subtotal2" value="" readonly>
                    <input type="hidden" name="subtotal3" class="form-control" id="subtotal3" value="" readonly>
                    <input type="hidden" name="subtotal4" class="form-control" id="subtotal4" value="" readonly>
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