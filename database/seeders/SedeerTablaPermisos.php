<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SedeerTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //Operaciones sobre tabla usuarios
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',
            //Operaciones sobre tabla clientes
            'ver-cliente',
            'crear-cliente',
            'editar-cliente',
            'borrar-cliente',
            //Operaciones sobre tabla clientes
            'ver-cotizacion',
            'crear-cotizacion',
            'impresion-cotizacion',
            'alta-cotizacion',
            'borrar-cotizacion',
            //Operaciones sobre tabla boletas
            'ver-listado-boletas',
            'imprimir-boleta',
            //Operaciones sobre tabla desempeño
            'ver-desempeño',
            'pago-desempeño',
            //Operaciones sobre tabla tickets-desempeño
            'ver-listado-tickets-desempeño',
            'imprimir-ticket-desempeño',
            //Operaciones sobre tabla refrendo
            'ver-refrendo',
            'pago-refrendo',
            'ver-listado-tickets-refrendo',
            'imprimir-ticket-refrendo',
            'imprimir-boleta-refrendo',
            //Operaciones sobre tabla refrendo
            'ver-capital',
            'pago-capital',
            'ver-listado-tickets-capital',
            'imprimir-ticket-capital',
            'imprimir-boleta-capital',


        ];

        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        }
    }
}

//ejecutar php artisan db:seed  --class=SedeerTablaPermisos
