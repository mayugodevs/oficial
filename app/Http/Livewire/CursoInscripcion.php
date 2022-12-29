<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Inscripcion;
use App\Models\CursoMaterial;
use App\Models\HistorialVedeo;
class CursoInscripcion extends Component
{   public $asignado_id;
    public $predsct;
    public $precio_venta;
    public $id_categoria=0;
    public $inscrito;
    public $porcentaje; 

    public function render()
    { 
        $this->inscrito = Inscripcion::where('idalum', '=', Auth::user()->idalum)
        ->where('asignados_idasig', '=', $this->asignado_id)
        ->get();

        

        $count_contenidos = CursoMaterial::whereHas('contador', function ($query) {
            $query->where('idasig', '=', $this->asignado_id);
        })->get()->count();
        

        $count_historial=HistorialVedeo::whereHas('contador_historial', function ($query) {
            $query->where('asignados_idasig', '=', $this->asignado_id)->where('idalum','=',Auth::user()->idalum);
        })->get()->count();
      
        $count_contenidos=1;
        $this->porcentaje=round(($count_historial/$count_contenidos)*100);
        
        return view('livewire.curso-inscripcion');
    }
}
