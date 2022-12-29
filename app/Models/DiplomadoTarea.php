<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoTarea extends Model
{
    use HasFactory;
    protected $table = 'diplomado_tarea';
    // protected $primaryKey='id';
    public $timestamps=false;
    protected $casts = [
        'fecha_entrega'  => 'datetime:Y-m-d\TH:i'
    ];
    protected $fillable = [
        'tarea',
        'instruccion',
        'puntuacion',
        'archivo',
        // 'estado',
        'tipo',
        // 'val_proyecto',
        // 'val_practica',
        'fecha_entrega',
        // 'fecha',
        'id_diplo_sem',
    ];

    public function diplTareaEntregas(){
        return $this->hasMany(DiplomadoTareaEntrega::class,'dipl_tarea_id');
    }
    public function diplTareaEntrega(){
        return $this->hasOne(DiplomadoTareaEntrega::class,'dipl_tarea_id');
    }
    
}