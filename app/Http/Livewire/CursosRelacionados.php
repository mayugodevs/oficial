<?php

namespace App\Http\Livewire;

use App\Models\Cursos;
use Livewire\Component;

class CursosRelacionados extends Component
{
    public $id_categoria;
    public function render()
    {
        $cursos = Cursos::where('idc','=',$this->id_categoria)->get();
        return view('livewire.cursos-relacionados',compact('cursos'));
    }
}
