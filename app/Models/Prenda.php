<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    use HasFactory;
    protected $table ='prendas';
    protected $primaryKey ='id_prenda';
    protected $fillable =[
        'cantidad_prenda',
        'nombre_prenda',
        'descripcion_generica',
        'kilataje_prenda',
        'gramaje_prenda',
        'caracteristicas_prenda',
        'avaluo_prenda',
        'porcentaje_prestamo_sobre_avaluo',
        'prestamo_prenda',
   
    ];

    public function usuarios(){
        return $this->belongsTo(usuarios::class); // Uno a muchos
    }
    
}
