<?php

namespace App\Http\Livewire;

use App\Models\IndependAsign;
use App\Models\IndependHistor;
use App\Models\IndependPregunt;
use App\Models\IndependResp;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CuestIndepResp extends Component
{
    public $slug;
    public $user;
    public $examen_hist=false;
    public $ultim_preg=false;
    public $pregunta;
    public $correcta_preg=false;
    public $resp_opt=0;
    public $preguntas = [];
    public $cant_pregts = 0;
    public $cant_exact = 0; /* para guardar en su nota final */
    public $alternativas = [];
    public $alternts = [];
    public $recorrido = 0;
    public $nota = 0;
    public $indep_hist;
    public $name_test;
    public $est = false;
    protected $listeners = ['saveResp','searchRespOld'];
    public function mount(IndependAsign $slug){
        $this->user = Auth::user();  
        $this->name_test = $this->slug->tipo == 'Curso' ? $this->slug->indep_curso : $this->slug->indep_extern;        
        $this->slug = $slug;        
        // buscar su ultima hora
        $this->indep_hist = IndependHistor::where('ind_asig_id',$this->slug->id)
            ->where('user_id', $this->user->idalum)->first();
        if ($this->indep_hist) {
            if($this->indep_hist->inicio){
                if ($this->indep_hist->fecha_fin > Carbon::now() && $this->indep_hist->fecha_inicio <= Carbon::now()) {
                    if ($this->indep_hist->estado) {
                         $this->estado = 1;
                        $this->examen_hist = true;
                        $this->cant_pregts = count($slug->indep_questions)-1;
                        $this->cant_exact = count($slug->indep_questions);
                        $this->listPreguntas();
                    }
                    else redirect()->route('cuest_indep_result',['slug'=>$this->slug->slug]);               
                }else redirect()->route('cuest_indep_result',['slug'=>$this->slug->slug]);
            }else redirect()->route('cuest_indep_prev',['slug' => $this->slug->slug]);            
        }else redirect()->route('cuestionario', ['slug' => $this->slug->slug ]);
        
    }
    public function listPreguntas(){
        foreach ($this->slug->indep_questions as $question) {
            array_push($this->preguntas, $question->id);
        }   
        $this->searchRespOld($this->recorrido);
    }
    public function searchRespOld($index, $type=false){ 
        if ($this->recorrido > $this->cant_pregts || $type) {
            $this->est = true;
            $this->indep_hist->update([
                'nota' => round(($this->nota*100)/$this->cant_exact,2),
                'correctas' => $this->nota,
                'preg_total' => $this->cant_exact,
                'estado' => 0,
            ]);
            if($type){
                $this->est = true;
            }
            $this->dispatchBrowserEvent('redirect', ['slug' => $this->slug->slug]);
        } else {
            $pregunt = $this->preguntas[$index]; 
            $respuesta = IndependResp::where('indep_cuest_id', $pregunt)->where('user_id', $this->user->idalum)->first();
            if ($respuesta) {
                if ($respuesta->fecha > $this->indep_hist->fecha_inicio && $respuesta->fecha < $this->indep_hist->fecha_fin) {
                    $this->nota += $respuesta->nota > 0 ? 1 : 0;
                    $this->recorrido+=1;
                    $this->searchRespOld($this->recorrido);
                }else $this->readQuestion($pregunt);
            } else $this->readQuestion($pregunt);
        }        
    }
    public function skipRep(){
        $this->recorrido+=1;
        $this->cant_pregts+=1;
        array_push($this->preguntas, $this->pregunta->id);
        // ddd($this->recorrido, $this->preguntas);
        $this->resp_opt=0;
        $this->searchRespOld($this->recorrido);
    }
    public function saveResp(){        
        IndependResp::updateOrInsert(
            ['indep_cuest_id' => $this->pregunta->id,
            'user_id' => $this->user->idalum],
            ['fecha' => Carbon::now(),
            'nota' => $this->correcta_preg==$this->resp_opt ? 100 : 0,
            'marcado' => $this->resp_opt]
        );
        $this->nota += $this->correcta_preg==$this->resp_opt ? 1 : 0;
        $this->recorrido+=1;
        $this->resp_opt=0;
        $this->searchRespOld($this->recorrido);
        $this->dispatchBrowserEvent('resolve',['message' => 'save resp']);
    }
    public function readQuestion($pregunt){
        // ddd($pregunt);
        $pregunta = IndependPregunt::find($pregunt);
        $this->pregunta = $pregunta;
        $this->correcta_preg = $pregunta->correcto;
    }
    
    public function render()
    {        
        return view('livewire.cuest-indep-resp')
            ->extends('layout');
    }
}
