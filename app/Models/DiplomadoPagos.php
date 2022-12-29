<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoPagos extends Model
{
    use HasFactory;
    protected $table = 'diplomado_pagos';
    protected $primaryKey='idpay';
    public $timestamps=false;
    protected $fillable = [
        'idpay',
        'nmr_trans',
        'tipo_pago',
        'monto',
        'dipl_precio_id',
        'alumno_id',
        'fecha',
        'situacion',
        'estado',
        'tipo_video',
        'fecha_expiracion',
        'diplomados_id', 
    ];

    public function alumno(){
        return $this->belongsTo(User::class,'alumno_id','idalum');
    }
    public function proyecto_entrega(){
        return $this->hasOne(DiplProyEntr::class,'dipl_pag_id');
    }

    public function diplomadoCertificado(){
        return $this->hasOne(DiplomadoCertificado::class,'idpay_diplomado','idpay');
    }

    public function diplomadoConstancia(){
        return $this->hasOne(DiplomadoConstancia::class,'idpay_diplomado','idpay');
    }

    public function diplomadoGrupo(){
        return $this->belongsTo(DiplomadoGrupo::class, 'diplomados_id','iddiplomado');
    }
}
