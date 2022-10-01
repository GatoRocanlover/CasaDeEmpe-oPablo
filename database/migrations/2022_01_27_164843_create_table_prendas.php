<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prendas', function (Blueprint $table) {


            $table->id('id_prendas');
            $table->string('folio_cotizacion', 20);
            $table->string('nombre_prenda', 90);
            $table->string('descripcion_generica');
            $table->float('kilataje_prenda', 20);
            $table->float('gramaje_prenda', 30);
            $table->longText('caracteristicas_prenda');
            $table->float('avaluo_prenda', 30);
            $table->float('porcentaje_prestamo_sobre_avaluo');
            $table->float('prestamo_inicial', 20);
            $table->float('prestamo_prenda', 20);
            $table->string('fecha_prestamo', 90);
            $table->dateTime('fecha_comercializacion');
            //-----Primer mes ------ ///
            $table->dateTime('mes1');
            $table->float('interes', 20);
            $table->float('almacenaje', 20);
            $table->float('iva', 20);
            $table->float('refrendo', 30);
            $table->float('desempeño', 30);
            $table->float('subtotal', 30);
            //-----Segundo mes ------ ///
            $table->dateTime('mes2');
            $table->float('interes2', 20);
            $table->float('almacenaje2', 20);
            $table->float('iva2', 20);
            $table->float('refrendo2', 30);
            $table->float('desempeño2', 30);
            $table->float('subtotal2', 30);
            //-----Tercer mes ------ ///
            $table->dateTime('mes3');
            $table->float('interes3', 20);
            $table->float('almacenaje3', 20);
            $table->float('iva3', 20);
            $table->float('refrendo3', 30);
            $table->float('desempeño3', 30);
            $table->float('subtotal3', 30);
            //-----Cuarto mes ------ ///
            $table->dateTime('mes4');
            $table->float('interes4', 20);
            $table->float('almacenaje4', 20);
            $table->float('iva4', 20);
            $table->float('refrendo4', 30);
            $table->float('desempeño4', 30);
            $table->float('subtotal4', 30);
            //-----Quintno mes ------ ///
          
            $table->dateTime('mes5');
            $table->float('interes5', 20);
            $table->float('almacenaje5', 20);
            $table->float('iva5', 20);
            $table->float('refrendo5', 30);
            $table->float('desempeño5', 30);
            $table->float('subtotal5', 30);

            $table->float('abono_capital', 30);

            $table->float('importe_anterior', 30);
            $table->float('interes_anterior', 30);
            $table->float('almacenaje_anterior', 30);
            $table->float('iva_anterior', 30);
            $table->float('refrendo_anterior', 30);
            $table->float('numeros_refrendos', 30);
            $table->float('cantidad_pago', 30);    
            $table->float('cambio_boleta', 30);
            $table->float('folio_refrendo', 30);
            $table->float('sub_refrendo', 30);
            $table->float('total', 50);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prendas');
    }
}
