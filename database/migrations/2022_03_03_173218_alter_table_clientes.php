<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
           

            if (!Schema::hasColumn('clientes', 'numero_socio')) {
                $table->string('numero_socio', 10)->nullable()->default(null);

           }


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
            Schema::table('clientes', function (Blueprint $table) {
                if (Schema::hasColumn('clientes', 'numero_socio')) {
                     $table->dropColumn('numero_socio');
                }
             });
        });
    }
}
