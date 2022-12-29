<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class IndependPregunt extends Model
{
    use HasFactory;
    protected $table = 'independ_curso_cuestion';
	public $timestamps=false;

    protected $fillable = [
        'pregunta',
        'puntuacion',
        'fecha',
        'estado',
        'correcto',
        'indep_asign',
    ];

    public function indeAlternativas(){
        return $this->hasMany(IndependAltern::class, 'indep_cuest_id')->inRandomOrder();
    }

    public function respuesta($id_preg){
        // return CursoExamenRespt::where('idpregunta',$id_preg)
        //     ->where('idalumno',Auth::user()->idalum)->first();
        return IndependResp::where('indep_cuest_id',$id_preg)
            ->where('user_id',Auth::user()->idalum)->first();
    }
}
