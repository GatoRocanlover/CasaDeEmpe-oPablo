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
            $table->id('id_folio');
            $table->string('id_prendas', 30); 
            $table->string('promedio_socio', 30);  
            $table->string('nombre_cliente', 35);
            $table->string('nombre_prenda', 90);
            $table->float('cantidad_prenda', 30);
            $table->string('descripcion_generica');
            $table->string('caracteristicas_prenda',300);
            $table->float('prestamo_prenda', 30);
            $table->float('cantidad_pago', 30);    
            $table->float('cambio_boleta', 30);
            $table->float('interes', 30);
            $table->float('almacenaje', 30);
            $table->float('subtotal', 30);
            $table->float('iva', 30);
            $table->float('total', 30);
            $table->float('recargo_des', 30);
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
