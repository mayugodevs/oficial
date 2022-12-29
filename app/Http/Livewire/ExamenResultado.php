<?php

namespace App\Http\Livewire;

use App\Models\CursoAsignacion;
use App\Models\CursoModulo;
use App\Models\ExamenTerminos;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ExamenResultado extends Component
{
    public $id_asign;
    public $user;
    public $curso;
    public $modulos;
    public $examen;
    public function mount($id){
        $this->id_asign = $id;
        $this->user = Auth::user();
        $this->curso = CursoAsignacion::find($id)->curso->nom;
        $this->status();
    }
    // validar que este en examen temrino 
    public function status(){
        if(User::find($this->user->idalum)->cursoInscripciones->where('asignados_idasig',$this->id_asign)->where('estado',1)->first()){
            $examenExiste = ExamenTerminos::where('curs_asign_id',$this->id_asign)->where('alumno_id',$this->user->idalum)->first();
            if($examenExiste){
                $this->modulos = CursoModulo::where('idasig',$this->id_asign)->get();
                $this->examen = ExamenTerminos::where('curs_asign_id',$this->id_asign)->where('alumno_id',$this->user->idalum)->first();
            }else return redirect()->route('examentermino',$this->id_asign);
        
        }else return redirect()->route('inicio');
    }
    public function render()
    {
        return view('livewire.examen-resultado')->extends('layout');
    }
}
