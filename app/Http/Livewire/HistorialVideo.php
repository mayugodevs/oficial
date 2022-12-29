<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\CursoContenido;
use App\Models\CursoMaterial;
use App\Models\CursoModulo;
use App\Models\Cursos;
use App\Models\HistorialVedeo;

class HistorialVideo extends Component
{
    public $asignado_id;
    public $id_categoria=0;
    public $home = false;
    public function render()
    {
        // $count_contenidos=CursoContenido::where('asignado_id','=',$this->asignado_id)->get()->count();

        //trae el numero de videos que tiene el curso
        if($this->home)
            $this->asignado_id = Cursos::find($this->asignado_id)->asignado->idasig;
        

        $count_contenidos = CursoMaterial::whereHas('contador', function ($query) {
            $query->where('idasig', '=', $this->asignado_id);
        })->get()->count();

        $count_historial=HistorialVedeo::whereHas('contador_historial', function ($query) {
            $query->where('asignados_idasig', '=', $this->asignado_id)->where('idalum','=',Auth::user()->idalum);
        })->get()->count();
        $count_contenidos=1;
        $porcentaje=round(($count_historial/$count_contenidos)*100);
        //trae el numero de reproducciones del curso por usuario

        return view('livewire.historial-video', compact('porcentaje'));
    }
}
