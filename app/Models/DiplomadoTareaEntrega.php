<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiplomadoTareaEntrega extends Model
{
    protected $table = 'diplomado_tarea_entrega';
    public $timestamps=false; 
    protected $fillable = [
        'estado',
        'fecha',
        'archivo',
        'tipoarchivo',
        'nota',
        'feedback',
        'dipl_tarea_id',
        'dipl_pagos_id',
    ];
    public function diplpay(){
        return $this->belongsTo(DiplomadoPay::class,'dipl_pagos_id');
    }
}
