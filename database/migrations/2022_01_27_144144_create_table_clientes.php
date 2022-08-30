<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->string('nombre_cliente', 30);
            $table->string('apellido_cliente', 30);
            $table->tinyInteger('tipo_de_identificacion');
            $table->string('numero_de_identificacion', 20);
            $table->string('correo_electronico_cliente', 30)->nullable()->default(null);
            $table->string('telefono_cliente', 10);
            $table->string('socio', 20);
            $table->string('calle_cliente', 20);
            $table->string('numero_cliente', 20);
            $table->string('cruzamientos_cliente', 20);
            $table->string('colonia_cliente', 30); 
            $table->string('ciudad_cliente', 30);
            $table->string('codigo_postal_cliente', 10);
            /** COTITULAR */
            $table->string('nombre_cotitular', 30)->nullable()->default(null);
            $table->string('apellido_cotitular', 30)->nullable()->default(null);
            $table->string('telefono_cotitular', 10)->nullable()->default(null);
            $table->string('calle_cotitular', 20)->nullable()->default(null);
            $table->string('numero_cotitular', 20)->nullable()->default(null);
            $table->string('cruzamientos_cotitular', 20)->nullable()->default(null);
            $table->string('colonia_cotitular', 30)->nullable()->default(null);
            $table->string('ciudad_cotitular', 30)->nullable()->default(null);
            $table->string('codigo_postal_cotitular', 10)->nullable()->default(null);
            $table->timestamps();
             /** BNEFICIARIO */
            $table->string('nombre_beneficiario', 30)->nullable()->default(null);
            $table->string('apellido_beneficiario', 30)->nullable()->default(null);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
