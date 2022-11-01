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
            $table->float('lote', 20)->nullable()->default(null);
            //CONT2
            $table->string('nombre_prenda_2', 90)->nullable()->default(null);
            $table->float('dato_1_2', 20)->nullable()->default(null);
            $table->float('dato_2_2', 20)->nullable()->default(null);
            $table->float('dato_3_2', 20)->nullable()->default(null);
            $table->float('dato_4_2', 20)->nullable()->default(null);
            $table->float('promedio_prenda_2', 20)->nullable()->default(null);
            $table->float('kilataje_prenda_2', 20)->nullable()->default(null);
            $table->float('gramaje_prenda_2', 30)->nullable()->default(null);
            $table->longText('caracteristicas_prenda_2')->nullable()->default(null);
            $table->float('avaluo_prenda_2', 30)->nullable()->default(null);
            $table->float('porcentaje_prestamo_sobre_avaluo_2')->nullable()->default(null);
            $table->float('prestamo_prenda_2', 20)->nullable()->default(null); 
            $table->string('valor_oro_plata_2', 20)->nullable()->default(null);

            //CONT3
            $table->string('nombre_prenda_3', 90)->nullable()->default(null);
            $table->float('dato_1_3', 20)->nullable()->default(null);
            $table->float('dato_2_3', 20)->nullable()->default(null);
            $table->float('dato_3_3', 20)->nullable()->default(null);
            $table->float('dato_4_3', 20)->nullable()->default(null);
            $table->float('promedio_prenda_3', 20)->nullable()->default(null);
            $table->float('kilataje_prenda_3', 20)->nullable()->default(null);
            $table->float('gramaje_prenda_3', 30)->nullable()->default(null);
            $table->longText('caracteristicas_prenda_3')->nullable()->default(null);
            $table->float('avaluo_prenda_3', 30)->nullable()->default(null);
            $table->float('porcentaje_prestamo_sobre_avaluo_3')->nullable()->default(null);
            $table->float('prestamo_prenda_3', 20)->nullable()->default(null); 
            $table->string('valor_oro_plata_3', 20)->nullable()->default(null);

            //CONT3
            $table->string('nombre_prenda_4', 90)->nullable()->default(null);
            $table->float('dato_1_4', 20)->nullable()->default(null);
            $table->float('dato_2_4', 20)->nullable()->default(null);
            $table->float('dato_3_4', 20)->nullable()->default(null);
            $table->float('dato_4_4', 20)->nullable()->default(null);
            $table->float('promedio_prenda_4', 20)->nullable()->default(null);
            $table->float('kilataje_prenda_4', 20)->nullable()->default(null);
            $table->float('gramaje_prenda_4', 30)->nullable()->default(null);
            $table->longText('caracteristicas_prenda_4')->nullable()->default(null);
            $table->float('avaluo_prenda_4', 30)->nullable()->default(null);
            $table->float('porcentaje_prestamo_sobre_avaluo_4')->nullable()->default(null);
            $table->float('prestamo_prenda_4', 20)->nullable()->default(null); 
            $table->string('valor_oro_plata_4', 20)->nullable()->default(null);

            //CONT3
            $table->string('nombre_prenda_5', 90)->nullable()->default(null);
            $table->float('dato_1_5', 20)->nullable()->default(null);
            $table->float('dato_2_5', 20)->nullable()->default(null);
            $table->float('dato_3_5', 20)->nullable()->default(null);
            $table->float('dato_4_5', 20)->nullable()->default(null);
            $table->float('promedio_prenda_5', 20)->nullable()->default(null);
            $table->float('kilataje_prenda_5', 20)->nullable()->default(null);
            $table->float('gramaje_prenda_5', 30)->nullable()->default(null);
            $table->longText('caracteristicas_prenda_5')->nullable()->default(null);
            $table->float('avaluo_prenda_5', 30)->nullable()->default(null);
            $table->float('porcentaje_prestamo_sobre_avaluo_5')->nullable()->default(null);
            $table->float('prestamo_prenda_5', 20)->nullable()->default(null); 
            $table->string('valor_oro_plata_5', 20)->nullable()->default(null);

            //CONT3
            $table->string('nombre_prenda_6', 90)->nullable()->default(null);
            $table->float('dato_1_6', 20)->nullable()->default(null);
            $table->float('dato_2_6', 20)->nullable()->default(null);
            $table->float('dato_3_6', 20)->nullable()->default(null);
            $table->float('dato_4_6', 20)->nullable()->default(null);
            $table->float('promedio_prenda_6', 20)->nullable()->default(null);
            $table->float('kilataje_prenda_6', 20)->nullable()->default(null);
            $table->float('gramaje_prenda_6', 30)->nullable()->default(null);
            $table->longText('caracteristicas_prenda_6')->nullable()->default(null);
            $table->float('avaluo_prenda_6', 30)->nullable()->default(null);
            $table->float('porcentaje_prestamo_sobre_avaluo_6')->nullable()->default(null);
            $table->float('prestamo_prenda_6', 20)->nullable()->default(null); 
            $table->string('valor_oro_plata_6', 20)->nullable()->default(null);


            $table->float('prestamo_ava')->nullable()->default(null);
            $table->float('prestamo_por')->nullable()->default(null);
            $table->float('prestamo_lote')->nullable()->default(null);
          

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
