<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Prenda extends Model
{
    use HasFactory;
    protected $table ='prendas';
    protected $primaryKey ='id_prendas';
    protected $fillable =[
        'id_cliente',
        'folio_cotizacion',
        'nombre_prenda',
        'cantidad_prenda',
        'descripcion_generica',
        'kilataje_prenda',
        'gramaje_prenda',
        'caracteristicas_prenda',
        'avaluo_prenda',
        'porcentaje_prestamo_sobre_avaluo',
        'prestamo_inicial',
        'prestamo_prenda',
        'fecha_prestamo',
        'fecha_comercializacion',
        'mes1',
        'interes',
        'almacenaje',
        'iva',
        'refrendo',
        'desempeño',
        'subtotal',
        'mes2',
        'interes2',
        'almacenaje2',
        'iva2',
        'refrendo2',
        'desempeño2',
        'subtotal2',
        'mes3',
        'interes3',
        'almacenaje3',
        'iva3',
        'refrendo3',
        'desempeño3',
        'subtotal3',
        'mes4',
        'interes4',
        'almacenaje4',
        'iva4',
        'refrendo4',
        'desempeño4',
        'subtotal4',
        'mes5',
        'interes5',
        'almacenaje5',
        'iva5',
        'refrendo5',
        'desempeño5',
        'subtotal5',
        'importe_anterior',
        'interes_anterior',
        'almacenaje_anterior',
        'iva_anterior',
        'refrendo_anterior',
        'numeros_refrendos',
        'folio_refrendo',
        'abono_capital',
        'cantidad_pago',
        'cambio_boleta',
        'sub_refrendo',
        
    ];

    public function getFromDateAttribute($value) {
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }

    public function cliente(){
        return $this->belongsTo(cliente::class, 'id_cliente', 'id_cliente');
     }
    
}
