<?php

namespace App\View\Components;

use App\Models\DiplomadoFrecuentes as ModelsDiplomadoFrecuentes;
use Illuminate\View\Component;

class DiplomadoFrecuentes extends Component
{
    public $preguntas;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $this->diplomadoPreguntas();
        return view('components.diplomado-frecuentes');
    }
    public function diplomadoPreguntas(){
        $this->preguntas = ModelsDiplomadoFrecuentes::select('pregunta', 'respuesta')
        ->where('estado','Activo')->get();
    }
}
