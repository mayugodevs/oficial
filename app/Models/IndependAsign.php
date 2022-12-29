<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndependAsign extends Model
{
    use HasFactory;
    protected $table = 'independ_asign';
	public $timestamps=false;

    protected $fillable = [
        'estado',
        'asign_id',
        'codigo',
        'slug',
        'tipo',
        'certificado_url',
    ];

    public function indep_questions(){
        return $this->hasMany(IndependPregunt::class,'indep_asign','id');
    }
    public function indep_historial(){
        return $this->hasOne(IndependHistor::class,'ind_asig_id','id');
    }
    public function indep_curso(){
        return $this->belongsTo(Curso::class,'asign_id');
    }
    public function indep_extern(){
        return $this->belongsTo(ExternoInsc::class,'asign_id','id');
    }
    public function indep_respuestas(){
        return $this->hasManyThrough(IndependResp::class, IndependPregunt::class,'indep_asign','indep_cuest_id');
    }
    public function getRouteKeyName(){
        return 'slug';
    }
}
