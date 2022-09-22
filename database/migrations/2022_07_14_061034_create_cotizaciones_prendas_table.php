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
            $table->string('nombre_prenda', 90);
            $table->string('descripcion_generica');
            $table->string('valor_oro_plata', 20);
            $table->float('dato_1', 20);
            $table->float('dato_2', 20);
            $table->float('dato_3', 20);
            $table->float('dato_4', 20);
            $table->float('promedio_prenda', 20);
            $table->float('kilataje_prenda', 20);
            $table->float('gramaje_prenda', 30);
            $table->longText('caracteristicas_prenda');
            $table->float('avaluo_prenda', 30);
            $table->float('porcentaje_prestamo_sobre_avaluo');
            $table->float('prestamo_prenda', 20);  
            $table->float('cantidad_prenda');
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
