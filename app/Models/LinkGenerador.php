<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkGenerador extends Model
{
    use HasFactory;
    protected $table = 'link_generador';
	public $timestamps=false;

    protected $fillable = [
        'titulo',
        'precio_normal',
        'precio_venta',
        'logo',
        'fecha_expiracion',
        'generado_por',
        'concepto',
        'maxveces', 
        'link_registro',
    ];

    public function generado_url(){
        return $this->belongsTo(User::class, 'generado_por', 'idalum');
    }
    public function generado(){
        return $this->belongsTo(User::class, 'generado_por', 'idalum');
    }
    public function pagos_recibidos(){
        return $this->hasMany(LinkPay::class, 'link_gen_id');
    }
}
