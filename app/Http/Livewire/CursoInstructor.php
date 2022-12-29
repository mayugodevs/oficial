<?php

namespace App\Http\Livewire;

use App\Models\Cursos;
use Livewire\Component;

class CursoInstructor extends Component
{
    public $id_curso;
    public $navOpen;
    public function render()
    {
        $instructor = Cursos::join('asignados','idcur','=','curso_idcur')
        ->join('trabajadores','idtrab','=','trabajadores_idtrab')
        ->select()
        ->where('idcur','=',$this -> id_curso)->get();
        return view('livewire.curso-instructor', compact('instructor'));
    }
}
 
