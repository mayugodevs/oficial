<?php

namespace App\View\Components;

use App\Models\Curso;
use App\Models\CursoMaterial;
use App\Models\HistorialVideoAlumno;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class HistorialVideo extends Component
{
    public $asignado_id;
    public $porcentaje;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cursoid)
    {
        $this->asignado_id = Curso::find($cursoid)->cursoAsignacion->idasig;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {   
        $this->porcentajeVideos();
        return view('components.historial-video');
    }

    public function porcentajeVideos(){
        
        $count_contenidos = CursoMaterial::whereHas('cursoModulo', function ($query) {
            $query->where('idasig', $this->asignado_id);
        })->get()->count();

        $count_historial=HistorialVideoAlumno::whereHas('cursoInscripcion', function ($query) {
            $query->where('asignados_idasig',  $this->asignado_id)->where('idalum', Auth::user()->idalum);
        })->get()->count();
      
        $this->porcentaje=round(($count_historial/$count_contenidos)*100);
        // $this->porcentaje=round(($count_historial/5)*100);
        //trae el numero de reproducciones del curso por usuario

        // return view('livewire.historial-video');
        
    }
}
