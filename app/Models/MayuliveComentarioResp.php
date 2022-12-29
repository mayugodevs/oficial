<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MayuliveComentarioResp extends Model
{
    use HasFactory;
    protected $table = 'mayulive_comentario_resp';
    // protected $primaryKey='idhistorial';

    public function mayuliveComentario(){
        return $this->belongsTo(MayuliveComentario::class,'mayliv_comentario_id');
    }

    public function alumno(){
        return $this->belongsTo(Alumno::class,'alumnos_id','idalum');
    }

    public function mayuliveComentarioLikes(){
        return $this->hasMany(MayuliveComentarioLike::class,'tipo_id');
    }
}
