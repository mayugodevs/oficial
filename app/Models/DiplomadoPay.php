<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoPay extends Model
{
    protected $table = 'diplomado_pagos';
    protected $primaryKey = 'idpay';
    public $timestamps = false;

    protected $fillable = [
        'idpay',
        'nmr_trans',
        'tipo_pago',
        'monto',
        'dipl_precio_id',
        'alumno_id',
        'fecha',
        'diplomados_id',
    ];
    public function nota_alumno($grupo_id, $pay_id){
        $total_tareas = 0;
        $nota_tareas = 0;
        $total_proyects = 0;
        $nota_proyects = 0;
        foreach (DiplomadoGrupo::find($grupo_id)->diplomadoSemanas as $semana) {
            foreach ($semana->diplomadoTareas as $tarea) {
                $total_tareas ++;
                $nota_tareas += $tarea->diplTareaEntrega ? ($tarea->diplTareaEntrega->dipl_pagos_id == $pay_id ? 0.4*($tarea->diplTareaEntrega->nota) : 0) : 0;  
            }
        }
        foreach (DiplProyFin::where('dipl_grp_id',$grupo_id)->get() as $proyet) {
            $total_proyects ++;
            $nota_proyects += $proyet->diplPryEntreg? ($proyet->diplPryEntreg->dipl_pag_id == $pay_id ? 0.6*($proyet->diplPryEntreg->nota) : 0) : 0; 
        }
        if($total_tareas == 0 || $total_proyects == 0){
           return round($nota_tareas/($total_tareas+1) + $nota_proyects/($total_proyects+1),2);
        }
        return round($nota_tareas/$total_tareas + $nota_proyects/$total_proyects,2);
    }
    public function diplomado_precios(){
        return $this->belongsTo(DiplomadoPrecios::class, 'dipl_precio_id', 'idprecios');
    }    
    public function diplomado_grupo(){
        return $this->belongsTo(DiplomadoGrupo::class,'diplomados_id');
    }
    public function alumno(){
        return $this->belongsTo(User::class,'alumno_id');
    }
    public function dipl_proyt_entr(){
        return $this->hasOne(DiplProyEntr::class,'dipl_pag_id');
    }
    public function dipl_certificado(){
        return $this->hasOne(DiplomadoCertificado::class,'idpay_diplomado');
    }
    public function dipl_constancia(){
        return $this->hasOne(DiplomadoConstancia::class,'idpay_diplomado');
    }
}
