<?php

namespace App\Http\Livewire;

use App\Models\CursoExamenPregt;
use Livewire\Component;

class OpcionesPregunta extends Component
{
    public $idp;
    public $opciones;
    public $textod;
    public $opcionResp;
    public function mount($idp){
        $this->idp = $idp;
    }

    public function render()
    {
        $this->PregOpciones();
        return view('livewire.opciones-pregunta');
    }

    public function PregOpciones(){
        $this-> opciones = CursoExamenPregt::find($this->idp)->cursoExamPregtOpcs;
    }

    public function guardarRespuesta(){
        $this->textod = 'ddd';
    }
}
