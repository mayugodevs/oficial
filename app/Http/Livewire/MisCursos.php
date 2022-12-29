<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\Inscripcion;
use App\Models\Especialidad;
use App\Models\Trabajador;
use App\Models\Asignado;
use App\Models\Contenido;
use App\Models\Cursos;
use Livewire\Component;

class MisCursos extends Component
{ 
    //public $id_categoria=0;
    public function render()
    {
        
       $asignaciones = Inscripcion::where('idalum', '=', Auth::user()->idalum)->get();
    
        $especialidades =Especialidad::select('idc','nombre','img')->get();
       //dd($inscripciones);
        return view('livewire.mis-cursos',compact('asignaciones', 'especialidades'));
    }
    
}
