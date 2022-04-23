<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table ='usuarios';
    protected $primaryKey ='id_usuario';
    protected $fillable =[
        'usuario',
        'nombre_usuario',
        'apellido_usuario',
        'tipo_de_usuario',
        'status',
        'contrasenia',
    ];
}
// 