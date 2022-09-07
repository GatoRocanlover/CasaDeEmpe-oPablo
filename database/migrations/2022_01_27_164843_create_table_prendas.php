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
            $table->tinyInteger('descripcion_generica');
            $table->string('kilataje_prenda', 20);
            $table->string('gramaje_prenda', 30);
            $table->longText('caracteristicas_prenda');
            $table->string('avaluo_prenda', 30);
            $table->tinyInteger('porcentaje_prestamo_sobre_avaluo');
            $table->string('prestamo_inicial', 20);
            $table->string('prestamo_prenda', 20);
            $table->string('fecha_prestamo', 90);
            $table->string('fecha_comercializacion', 30);
            //-----Primer mes ------ ///
            $table->string('mes1', 20);
            $table->string('interes', 20);
            $table->string('almacenaje', 20);
            $table->string('iva', 20);
            $table->string('refrendo', 30);
            $table->string('desempeño', 30);
            //-----Segundo mes ------ ///
            $table->string('mes2', 20);
            $table->string('interes2', 20);
            $table->string('almacenaje2', 20);
            $table->string('iva2', 20);
            $table->string('refrendo2', 30);
            $table->string('desempeño2', 30);
            //-----Tercer mes ------ ///
            $table->string('mes3', 20);
            $table->string('interes3', 20);
            $table->string('almacenaje3', 20);
            $table->string('iva3', 20);
            $table->string('refrendo3', 30);
            $table->string('desempeño3', 30);
            //-----Cuarto mes ------ ///
            $table->string('mes4', 20);
            $table->string('interes4', 20);
            $table->string('almacenaje4', 20);
            $table->string('iva4', 20);
            $table->string('refrendo4', 30);
            $table->string('desempeño4', 30);
            //-----Quintno mes ------ ///
            $table->string('mes5', 20);
            $table->string('interes5', 20);
            $table->string('almacenaje5', 20);
            $table->string('iva5', 20);
            $table->string('refrendo5', 30);
            $table->string('desempeño5', 30);

            $table->string('abono_capital', 30);



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
