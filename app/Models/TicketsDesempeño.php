<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketsDesempeño extends Model
{
    use HasFactory;
    protected $table ='tickets_desempeño';
    protected $primaryKey ='id_prendas';
    protected $fillable =[
        'nombre_cliente',
        'nombre_prenda',
        'descripcion_generica',
        'caracteristicas_prenda',
        'avaluo_prenda',
        'prestamo_prenda',
        'cantidad_pago',
        'cambio_boleta',
    
    ];
}
