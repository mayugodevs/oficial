<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoSemana extends Model
{
    use HasFactory;
    protected $table = 'diplomado_semana';
    protected $primaryKey='idsemana';
    public $timestamps=false;
    protected $fillable = [
        'semana',
        'fecha_inicio',
        'fecha_fin',
        'idiplomado'
    ];
    // diplomado_soporte

    public function diplomadoTareas(){
        return $this->hasMany(DiplomadoTarea::class,'id_diplo_sem','idsemana');
    }

    public function diplomadoVivos(){
        return $this->hasMany(DiplomadoVivo::class,'idsemana','idsemana');
    }

    public function diplomado(){
        return $this->belongsTo(Diplomado::class,'idiplomado','iddiplomado');
    }
}