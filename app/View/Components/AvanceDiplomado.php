<?php

namespace App\View\Components;

use App\Models\Asignado;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class AvanceDiplomado extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    // public $idasig;
    public $asignado;
    public $idalum;
    public $datos=[];
    public $diplomado_cursos;
    
    public function __construct($idasig)
    {
        $this->diplomado_cursos = $idasig;
        // $this->idasig = $idasig;
        // $this->asignado = Asignado::find($idasig);
        // $this->idalum = Auth::user()->idalum;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // $this->avance();
        return view('components.avance-diplomado');
    }

    // public function avance(){
        
    // }
}
