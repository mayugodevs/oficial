<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuponGeneral extends Model
{
    use HasFactory;
    protected $table = 'cupones_general';
    public $timestamps=false;
    protected $fillable = [
        'cupon',
        'descuento',
        'tipo_cupon',
        'estado',
        'max',
        'publico',
        'id_diccionario',
        'fecha_inicio',
        'fecha_fin',
    ];

    public function cupon_diccionario()
    {
        return $this->belongsTo(CuponDiccionario::class,'id_diccionario');
    }
}
