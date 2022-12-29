<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CursoContPregCom extends Model
{
    use HasFactory;
    protected $table = 'curso_conten_preg_coment';
    protected $primaryKey='idpreguntas';
    public $timestamps=false;
    protected $fillable = [
        'comentario',
        'fecha',
        'idmaterial',
        'idcliente',
        'img',
        'estado',
    ];

    public function cursoMaterial(){
        return $this -> belongsTo(CursoMaterial::class,'idmaterial','idmaterial');
    }

    public function alumno(){
        return $this -> belongsTo(Alumno::class,'idcliente','idalum');
    }

    public function cursContPregComenResps(){
        return $this -> hasMany(CursoContPregComResp::class,'idpreguntas','idpreguntas');
    }

    public function cursContPregComenLikes(){
        return $this -> hasMany(CursoContPregComLike::class,'tipo_id','idpreguntas');
    }
    public function like_user(){
        return $this -> hasOne(CursoContPregComLike::class,'tipo_id','idpreguntas')->where('alumno_id', Auth::user()->idalum);
    }

}
