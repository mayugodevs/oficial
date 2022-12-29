<?php

namespace App\Http\Livewire;

use App\Models\CursoAsignacion;
use App\Models\CursoModulo;
use App\Models\ExamenTerminos;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ExamenTermino extends Component
{
    public $id_asig;
    public $curso;
    public $user;
    
    public $aprobo = false;
    public $termino = false;
    public $horaReinicio = false;
    public $esp = false;
    public $nota = 0;

    public $status = 'term';
    public $cantPreg = 0;
    protected $listeners = ['changeTermino'];
    public function mount($id){
        $this->user = Auth::user();
        $this->id_asig = $id;
        $this->curso = CursoAsignacion::find($id)->curso->nom;
        $this->readStatus();
        
    }
    public function readStatus(){
        if(User::find($this->user->idalum)->cursoInscripciones->where('asignados_idasig',$this->id_asig)->where('estado',1)->first()){
            $examenExiste = ExamenTerminos::where('curs_asign_id',$this->id_asig)->where('alumno_id',$this->user->idalum)->first();
            if ($examenExiste) {
                if($examenExiste->fecha_fin > Carbon::now()) return redirect()->route('examentomar',$this->id_asig);
                elseif($examenExiste->reinicio > Carbon::now()) {
                    $this-> status = 'esper';
                    $this->horaReinicio = $examenExiste->reinicio;
                    $this->nota = $examenExiste->aprobo;
                    if($examenExiste->aprobo > 62) {
                        $this->aprobo = true;
                    }
                }
            }else $this->status = 'term';
        }else return redirect()->route('inicio');
    }
    public function preguntas($id){
        $preguntas = [];
        foreach (CursoModulo::where('idasig',$id)->get() as $modulos) {
            foreach ($modulos->cursoExamenPreguntas as $pregunta) {
                array_push($preguntas,$pregunta);
            }
        }
        return $preguntas;
    }    
    public function acceptTermino(){
        $this->cantPreg = count($this->preguntas($this->id_asig));
        ExamenTerminos::updateOrInsert(
            [   'alumno_id'=>$this->user->idalum, 
                'curs_asign_id' =>$this->id_asig,
            ],
            [   'fecha_inicio'=>Carbon::now(), 
                'fecha_fin' =>Carbon::now()->addMinutes($this->cantPreg*2),
                'reinicio' => Carbon::now()->addHours(6)
            ],
        );
        $this->status = 'exa';
        $this->dispatchBrowserEvent('resolve',['message' => 'llendo al examen']);
    }    
    public function changeTermino(){
        $this->status = 'term';
    }  
    public function render()
    {        
        return view('livewire.examen-termino')->extends('layout');        
    }
}
