<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoContPregComResp extends Model
{
    use HasFactory;
    protected $table = 'curso_cont_preg_com_respt';
    protected $primaryKey='idrespuestas';
    public $timestamps=false;
    protected $fillable = [
        'respuesta',
        'estado',
        'idpreguntas',
        'idalumno',
    ];

    public function cursContPregComenResp(){
        return $this -> belongsTo(CursoContPregCom::class,'idpreguntas','idpreguntas');
    }

    public function alumno(){
        return $this -> belongsTo(User::class,'idalumno','idalum');
    }

    public function cursContPregComenLikes(){
        return $this -> hasMany(CursoContPregComLike::class,'tipo_id','idrespuestas');
    }

}
