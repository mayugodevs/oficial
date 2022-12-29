<?php

namespace App\Http\Livewire;

use App\Models\CursoTareaEntrega as ModelsCursoTareaEntrega;
use Livewire\Component;

class CursoTareaEntrega extends Component
{
    public $idTarea;
    public $idAlumno;
    public $entregas;
    public $nota;
    public function render()
    {
        $this->tareaStatus();
        return view('livewire.curso-tarea-entrega');
    }
    public function tareaStatus(){
        $this->entregas = ModelsCursoTareaEntrega::where('idalumno',$this->idAlumno)
        ->where('idtarea',$this->idTarea)->get();
    }

    public function saveNota($idEntrega){
        if ($this->nota != '') {
            ModelsCursoTareaEntrega::find($idEntrega)->update([
                'nota' => $this->nota
            ]);
            $this->reset('nota');
        }else{

        }
    }
} 
