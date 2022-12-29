<?php

namespace App\Http\Livewire;

use App\Events\EnviarPorcentaje;
use App\Models\MayulivePregunta;
use App\Models\MayulivePreguntaAltern;
use App\Models\MayulivePreguntaResp;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LiveShowPregunta extends Component
{
    public $listsQuestionsActive = [];
    public $alternativas = [];
    public $resp=0;
    public $user;
    public $preguntaId = 0;
    public $idlive;
    
    protected $listeners = ['activePregunta', 'porcentaje'];

    public function mount(){
        $this->user = Auth::user()->idalum;
        $this->listsQuestionsActive = MayulivePregunta::where('mayulive_id',$this->idlive)->where('estado',1)->get();
    }
    public function render()
    {

        return view('livewire.live-show-pregunta');
    }
    public function activePregunta($preguntaId){
        $this->preguntaId = $preguntaId;
        $this->listsQuestionsActive = MayulivePregunta::where('mayulive_id',1)->where('estado',1)->get();        
    }

    public function porcentaje($preguntaId){
        $this->alternativas = [];
        $this->alternativas = MayulivePreguntaAltern::where('mayliv_pregunta_id',$this->preguntaId)->get();

    }

    public function respuestaAlumno($preg,$Id){
        $existe = MayulivePreguntaResp::where('alumnos_id',$this->user)->where('pregunt_id',$preg);
        if(count($existe->get())>0){
            $existe->update([
                'alternt_id' => $Id,
            ]);
        }else{
            MayulivePreguntaResp::create([
                'pregunt_id' => $preg,
                'alternt_id' => $Id,
                'alumnos_id' => $this->user,
            ]);
        }
        event(new EnviarPorcentaje($preg));
        // $this->alternativas = [];
        // $this->alternativas = MayulivePreguntaAltern::where('mayliv_pregunta_id',$this->preguntaId)->get();
               
    }
}
