<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {
                
                Schema::table('usuarios', function (Blueprint $table) {
                    if (Schema::hasColumn('usuarios', 'telefono_usuario')) {
                        $table->dropColumn('telefono_usuario');
                    }
                    
                     
                 });


                 if (!Schema::hasColumn('usuarios', 'contrasenia')) {
                    $table->text('contrasenia')->nullable();
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
        Schema::table('usuarios', function (Blueprint $table) {
            Schema::table('usuarios', function (Blueprint $table) {
                if (Schema::hasColumn('usuarios', 'contrasenia')) {
                 $table->dropColumn('contrasenia');
                }
                
                 
             });
        });
    }
}
