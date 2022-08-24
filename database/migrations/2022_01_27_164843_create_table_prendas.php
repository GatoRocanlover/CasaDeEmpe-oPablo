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
            $table->string('nombre_prenda', 30);
            $table->tinyInteger('descripcion_generica');
            $table->string('kilataje_prenda', 20);
            $table->string('gramaje_prenda', 30);
            $table->longText('caracteristicas_prenda');
            $table->string('avaluo_prenda', 30);
            $table->tinyInteger('porcentaje_prestamo_sobre_avaluo');
            $table->string('prestamo_inicial',20);
            $table->string('prestamo_prenda', 20);
            $table->string('interes',20);
            $table->string('almacenaje',20);
            $table->string('iva',20);
            $table->string('refrendo',30);
            $table->string('desempeño',30);
            $table->string('abono_capital',30);
        


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
