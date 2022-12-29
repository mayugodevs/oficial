<?php

namespace App\View\Components;

use App\Models\DiplomadoComentarios;
use Illuminate\View\Component;

class DiplomadoRespuestas extends Component
{
    public $idcomentario;
    public $respuestas;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($idcomentario)
    {
        $this->idcomentario = $idcomentario;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    { 
        // $this->respuestas = DiplomadoComentarios::find(12);
        $this->diplomado_respuestas();
        return view('components.diplomado-respuestas');
    }

    public function diplomado_respuestas(){
        $this->respuestas = DiplomadoComentarios::find($this->idcomentario)->diplomado_respuestas;
    }
}
