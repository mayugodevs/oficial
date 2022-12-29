<?php

namespace App\Http\Livewire;

use App\Models\CursoTareaContenido;
use App\Models\CursoTareaEntrega;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class CursoTareas extends Component
{

    public $idAsig;
    public $tareas; 
    public $entregas; 
    public $alumnos; 
    public $nota; 

    public function mount($idAsig){

    }

    public function render()
    {
        $this->reedTareas();
        return view('livewire.curso-tareas')->extends('layout');
    }

    public function reedTareas(){
        // $this->entregas = CursoTareaEntrega::where('estado',1);
        $this->tareas = CursoTareaContenido::whereHas('cursoModulo', function (Builder $query){
            $query -> where('idasig',$this->idAsig);
        })->get();
        $this->entregas = CursoTareaEntrega::whereHas('cursoInscripcion', function (Builder $query){
            $query->where('asignados_idasig', $this->idAsig);            
        })->get();
        $this->alumnos = User::whereHas('cursoInscripciones', function($query){
            $query -> whereHas('cursoTareaEntregas', function($quer2){
                $quer2->where('asignados_idasig', $this->idAsig);
            });
        })->get();
    }
    public function saveNota($idEntrega){
        if ($this->nota != '' && $this->nota >=0 && $this->nota <=100) {
            CursoTareaEntrega::find($idEntrega)->update([
                'nota' => $this->nota
            ]);
            $this->reset('nota');
        }else{
            return false;
        }
    }
}
