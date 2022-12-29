<?php

namespace App\Http\Livewire;

use App\Models\CursoAsignacion;
use App\Models\CursoModulo;
use Livewire\Component;

class TareasPreguntasCurso extends Component
{
    public $idAsign;
    public $tipo;
    public $modulos;/* Modulos del curso */
    public function render()
    {
        $this-> tareasCurso();
        return view('livewire.tareas-preguntas-curso');
    }

    public function tareasCurso(){
        $this->modulos = CursoAsignacion::find($this->idAsign)->cursoModulos;
    }
}
