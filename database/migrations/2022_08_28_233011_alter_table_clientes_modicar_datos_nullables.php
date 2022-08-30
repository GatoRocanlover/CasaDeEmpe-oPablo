<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableClientesModicarDatosNullables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('telefono_cliente')->nullable()->change();
            $table->string('nombre_cotitular')->nullable()->change();
            $table->string('apellido_cotitular')->nullable()->change();
            $table->string('telefono_cotitular')->nullable()->change();
            $table->string('calle_cotitular')->nullable()->change();
            $table->string('numero_cotitular')->nullable()->change();
            $table->string('cruzamientos_cotitular')->nullable()->change();
            $table->string('colonia_cotitular')->nullable()->change();
            $table->string('ciudad_cotitular')->nullable()->change();
            $table->string('codigo_postal_cotitular')->nullable()->change();
            $table->string('nombre_beneficiario')->nullable()->change();
            $table->string('apellido_beneficiario')->nullable()->change();
            $table->string('numero_socio')->nullable()->change();


            
        });
    }
}
