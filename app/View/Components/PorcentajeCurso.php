<?php

namespace App\View\Components;

use App\Models\Asignado;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class PorcentajeCurso extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    // public $idasig;
    public $asignado;
    public $idalum;
    public $mat;
    public $vist;
    public $porc;

    public function __construct($idasig)
    {
        // $this->idasig = $idasig;
        $this->asignado = Asignado::find($idasig);
        $this->idalum = Auth::user()->idalum;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->porcentaje();
        return view('components.porcentaje-curso');
    }
    public function porcentaje(){
        $this->mat = 0;
        $this->vist = 0;
        foreach ($this->asignado->contenidos as $contenido) {
            $this->mat += count($contenido->materiales);
            foreach ($contenido->materiales as $value) {
                $this->vist += count($value->user_video->where('iduser',$this->idalum));                
            }
        }
        
        $this->porc = round(($this->vist/$this->mat)*100);
    }
}
