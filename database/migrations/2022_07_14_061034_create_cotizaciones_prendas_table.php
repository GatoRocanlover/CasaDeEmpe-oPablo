<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizacionesPrendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizaciones_prendas', function (Blueprint $table) {
            $table->id('id_cotizacionprenda');
            $table->string('nombre_prenda', 30);
            $table->tinyInteger('descripcion_generica');
            $table->string('valor_oro_plata', 20);
            $table->string('dato_1', 20);
            $table->string('dato_2', 20);
            $table->string('dato_3', 20);
            $table->string('dato_4', 20);
            $table->string('promedio_prenda', 20);
            $table->string('kilataje_prenda', 20);
            $table->string('gramaje_prenda', 30);
            $table->longText('caracteristicas_prenda');
            $table->string('avaluo_prenda', 30);
            $table->tinyInteger('porcentaje_prestamo_sobre_avaluo');
            $table->string('prestamo_prenda', 20);  
            $table->integer('cantidad_prenda');
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
        Schema::dropIfExists('cotizaciones_prendas');
    }
}
