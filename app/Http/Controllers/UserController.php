<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function ListUser()
    {
        $user = User::get();

        return view('admin.ListadoUsuario')->with(
            [
                "list_user" => $user
            ]
        );
    }
    public function create()
    {
        $role = Role::all()->pluck('name', 'id');
        return view('auth.register', compact('roles'));
    }

}
