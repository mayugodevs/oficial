<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoTareaContenComent extends Model
{
    use HasFactory;
    protected $table = 'curso_tar_coment';
    protected $primaryKey='idcom_tarea';

    public function cursoTareaModulo(){
        return $this -> belongsTo(CursoTareaContenido::class,'idtarea','idtarea');
    }

    public function alumno(){
        return $this -> belongsTo(User::class,'idalumno','idalum');
    }

    public function cursoTareaContComenResps(){
        return $this-> hasMany(CursoTareaContenComentRespt::class,'curso_tarea_alumno_id','idcom_tarea');
    }

    public function cursoTareaContComenLikes(){
        return $this-> hasMany(CursoTareaContenComentLike::class,'tipo_id','id');
    }
}
