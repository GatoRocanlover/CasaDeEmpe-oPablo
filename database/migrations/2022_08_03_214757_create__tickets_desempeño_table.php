<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsDesempeñoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets_desempeño', function(Blueprint $table){
            $table->id('id_prendas');
            $table->string('nombre_cliente', 35);
            $table->string('nombre_prenda', 30);
            $table->tinyInteger('descripcion_generica');
            $table->string('caracteristicas_prenda',300);
            $table->string('avaluo_prenda', 30);
            $table->string('prestamo_prenda', 30);
            $table->string('cantidad_pago', 30);    
            $table->string('cambio_boleta', 30);
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
        Schema::dropIfExists('tickets_desempeño');
    }
}
