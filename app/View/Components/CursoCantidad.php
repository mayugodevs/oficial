<?php

namespace App\View\Components;

use App\Models\Curso;
use Illuminate\View\Component;

class CursoCantidad extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $idesp;
    public $cantCursos;
    public function __construct($idesp)
    {
        $this->idesp = $idesp;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(){
        $this -> cantidadCursos();
        return view('components.curso-cantidad');
    }

    public function cantidadCursos(){
        $this -> cantCursos = Curso::where('estado',1)->where('idc',$this -> idesp)->get();
        $this -> cantCursos = count($this -> cantCursos);
        
    }

}
