<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoTareaContenComentLike extends Model
{
    use HasFactory;
    protected $table = 'curso_tar_coment_lk';
    // protected $primaryKey='idcom_tarea';

    public function alumno(){
        return $this -> belongsTo(Alumno::class,'alumno_id','idalum');
    }
}
