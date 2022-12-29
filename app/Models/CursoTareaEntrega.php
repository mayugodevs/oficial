<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoTareaEntrega extends Model
{
    protected $table = 'curso_tareas_entrega';
    protected $primaryKey='identrega';
    public $timestamps=false;

    protected $fillable = [
        // 'identrega',
        'fecha',
        'estado',
        'idtarea',
        'archivo',
        'typefile',
        'nota',
        'idalumno',
        'idins',
        'feedback',
    ];

    public function cursoInscripcion(){
        return $this -> belongsTo(CursoInscripcion::class,'idins','idinsc');
    }

    public function cursoTareaModulo(){
        return $this -> belongsTo(CursoTareaContenido::class,'idtarea','idtarea');
    }

    public function alumno(){
        return $this -> belongsTo(User::class,'idalumno','idalum');
    }
}
