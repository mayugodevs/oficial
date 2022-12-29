<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoComentarioResp extends Model
{
    use HasFactory;
    protected $table = 'diplomado_coment_resp';
    protected $primaryKey='idrespuestas';

    public function diplomadoComentLikes(){
        return $this->hasMany(DiplomadoComentarioLike::class,'tipo_id','idcomentario');
    }

    public function alumno(){
        return $this->belongsTo(Alumno::class,'iduser','idalum');
    }

    public function diplomadoComentario(){
        return $this->belongsTo(diplomadoComentario::class,'idcomentario','idcomentario');
    }
}