<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoTareaContenEntrega extends Model
{
    use HasFactory;
    protected $table = 'curso_tareas_entrega';
    protected $primaryKey='identrega';

    public function cursoInscripcion(){
        return $this->belongsTo(CursoInscripcion::class,'idins','idinsc');
    }

    public function cursoTareaModulo(){
        return $this->belongsTo(CursoTareaContenido::class,'idtarea','idtarea');
    }

}

