<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    use HasFactory;
    protected $table ='prendas';
    protected $primaryKey ='id_prendas';
    protected $fillable =[
        'id_cliente',
        'nombre_prenda',
        'descripcion_generica',
        'kilataje_prenda',
        'gramaje_prenda',
        'caracteristicas_prenda',
        'avaluo_prenda',
        'porcentaje_prestamo_sobre_avaluo',
        'prestamo_prenda',
        'cantidad_prenda',
        
   
    ];


    public function cliente(){
        return $this->belongsTo(cliente::class, 'id_cliente', 'id_cliente');
     }
    
}
