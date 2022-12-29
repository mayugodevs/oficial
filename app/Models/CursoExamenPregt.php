<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CursoExamenPregt extends Model
{
    use HasFactory;
    protected $table = 'curso_exam_pregt';
    protected $primaryKey='idpregunta';
    public $timestamps=false;
    protected $fillable = [
        'pregunta',
        'instruccion',
        'puntuacion',
        // 'fecha',
        'estado',
        'idc',
        'val_proyecto',
    ];

    public function cursoModulo(){
        return $this -> belongsTo(CursoModulo::class,'idc','idc');
    }

    public function cursoExamPregtOpcs(){
        return $this -> hasMany(CursoExamenPregtOpc::class,'idpregunta','idpregunta');
    }

    public function cursoExamPregResp(){
        return $this -> hasOne(CursoExamenRespt::class,'idpregunta','idpregunta');
    }

    public function respuesta($id_preg){
        return CursoExamenRespt::where('idpregunta',$id_preg)
            ->where('idalumno',Auth::user()->idalum)->first();
    }
}
