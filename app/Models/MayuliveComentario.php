<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MayuliveComentario extends Model
{
    use HasFactory;
    protected $table = 'mayulive_comentario';
    public $timestamps=false;

    protected $fillable = [
        'comentario',
        'estado',
        'fecha',
        'mayulive_id',
        'alumnos_id',
    ];
    
    public function mayulive(){
        return $this->belongsTo(Mayulive::class,'mayulive_id');
    }

    public function alumno(){
        return $this->belongsTo(Alumno::class,'alumnos_id','idalum');
    }

    public function mayuliveComentarioRespts(){
        return $this->hasMany(MayuliveComentarioResp::class,'mayliv_comentario_id');
    }

    public function mayuliveComentarioLikes(){
        return $this->hasMany(MayuliveComentarioLike::class,'tipo_id');
    }
}
