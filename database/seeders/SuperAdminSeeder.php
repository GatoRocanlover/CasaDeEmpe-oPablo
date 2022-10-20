<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::Create([
            'name'=>'SuperAdmin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('Admin2022')
            
        ]);
        
    }
}

//ejecutar php artisan db:seed  --class=SedeerTablaPermisos
