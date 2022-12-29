<?php

namespace App\Http\Livewire;
use App\Models\Especialidad;
use Livewire\Component;

class Comunidad extends Component
{
    public function render()
    {
        $especialidades =Especialidad::select('idc','nombre','img')->get();
        return view('livewire.comunidad',['especialidades'=> $especialidades]);
    }
}
