<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketsDesempeño extends Model
{
    use HasFactory;
    protected $table ='tickets_desempeño';
    protected $primaryKey ='id_folio';
    protected $fillable =[
        'id_prendas',
        'promedio_socio',
        'nombre_cliente',
        'nombre_prenda',
        'cantidad_prenda',
        'descripcion_generica',
        'caracteristicas_prenda1',
        'prestamo_prenda_ticket',
        'cantidad_pago',
        'cambio_boleta',
        'interes_ticket',
        'almacenaje_ticket',
        'subtotal_ticket',
        'iva_ticket',
        'total_ticket',
        'recargo_des_ticket',
        'created_at',
    
    ];
}
