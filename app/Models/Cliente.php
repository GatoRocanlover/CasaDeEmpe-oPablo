<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table ='clientes';
    protected $primaryKey ='id_cliente';
    protected $fillable =[
        'nombre_cliente',
        'apellido_cliente',
        'tipo_de_identificacion',
        'numero_de_identificacion',
        'correo_electronico_cliente',
        'telefono_cliente',
        'socio',
        'numero_socio',
        'calle_cliente',
        'numero_cliente',
        'cruzamientos_cliente',
        'colonia_cliente',
        'ciudad_cliente',
        'codigo_postal_cliente',
        'nombre_cotitular',
        'apellido_cotitular',
        'telefono_cotitular',
        'calle_cotitular',
        'numero_cotitular',
        'cruzamientos_cotitular',
        'colonia_cotitular',
        'ciudad_cotitular',
        'codigo_postal_cotitular',
        'nombre_beneficiario',
        'apellido_beneficiario',
    ];
    
    
}
