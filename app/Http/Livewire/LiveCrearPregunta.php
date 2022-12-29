<?php

namespace App\Http\Livewire;

use App\Events\EnviarPregunta;
use App\Models\MayulivePregunta;
use App\Models\MayulivePreguntaAltern;
use Livewire\Component;

class LiveCrearPregunta extends Component
{
    public $cant=4;

    public $idLive;
    
    public $listsQuestions;
    public $listsQuestionsActive = [];

    public $pregunta;
    public $pregMin = 3;
    public $option = 0;
    public $option_1;
    public $option_2;
    public $option_3;
    public $option_4;
    public $option_5;
    public $option_6;
    public $option_7;
    public $option_8;
        
    public function render(){
        $this->listsQuestions = MayulivePregunta::where('mayulive_id',$this->idLive)->get();
        return view('livewire.live-crear-pregunta');
    }
    public function luiss($id){
        $this->cant = $id;
    }

    public function addPreg(){
        $this->pregMin = $this->pregMin +1;
        
    }

    public function remPreg(){
        if($this->pregMin >= 4){
            $this->pregMin = $this->pregMin -1;
        }
    }

    public function createQuestion(){
        $pregunta = MayulivePregunta::create([
            'pregunta' => $this->pregunta, 
            'tipo' => 'encuesta', 
            'orden' => 1, 
            'estado' => 0, 
            'tiempo' => 5, 
            'lanzado' => 0, 
            'mayulive_id' => $this->idLive, 
            'correcta' => $this->option, 
        ]);

        for ($i=1; $i <= $this->pregMin ; $i++) {
            $optt = $i == $this->option ? 1 : 0;
            $opt = "option_".$i;
            MayulivePreguntaAltern::create([
                'alternativa'=>$this->$opt,
                'correcta'=>$optt,
                'puntuacion'=>0,
                'orden'=>$i,
                'estado'=>1,
                'mayliv_pregunta_id'=>$pregunta->id, 
            ]);
        }
        $this->dispatchBrowserEvent('resolve',['message' => 'Pregunta y alternativas creados!!']);
    }

    public function statusQuestion($id,$estado){
        MayulivePregunta::find($id)->update([
            'estado'=> $estado
        ]);
        event(new EnviarPregunta($id));
        if($estado){
            $this->dispatchBrowserEvent('resolve',['message' => 'Pregunta lanzado!!']);
        }else{
            $this->dispatchBrowserEvent('resolve',['message' => 'Pregunta retirado!!']);
        }
    }
}
