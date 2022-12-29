<?php

namespace App\View\Components;

use App\Models\CursoInscripcion;
use App\Models\CursoLike;
use Illuminate\View\Component;

class DetalleCurso extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $tipo =0;
    public $idAsig =0;
    public $cantidad;

    public function __construct($tipo,$idAsig)
    {
        $this->tipo = $tipo;
        $this->idAsig = $idAsig;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->mandarDatos();
        return view('components.detalle-curso');
    }

    public function mandarDatos(){
        if($this->tipo == 1){
            $this->cantidad = CursoInscripcion::where('asignados_idasig', $this->idAsig)->count();
        }elseif ($this->tipo == 3) {
            $this->cantidad =CursoLike::where('curso_asig_id',$this->idAsig)->count();
        }
        // else{
            
        // }
    }
}
