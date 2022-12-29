<?php

namespace App\Http\Livewire;

use App\Models\IndependAsign;
use App\Models\IndependHistor;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CuestIndepPrev extends Component
{
    public $slug;
    public $user;
    public $estado;
    public $examen_hist=false;
    public $cant_pregts=0;
    public $indep_hist;
    public $hora_now;
    public $name_test;
    public $hora_reinicio=false;
    protected $listeners=['acceptTermino'];
    public function mount(IndependAsign $slug){
        $this->user = Auth::user();
        $this->name_test = $this->slug->tipo == 'Curso' ? $this->slug->indep_curso : $this->slug->indep_extern;                          
        $this->slug = $slug;
        $this->cant_pregts = count($slug->indep_questions);
        $this->indep_hist = IndependHistor::where('ind_asig_id',$this->slug->id)
            ->where('user_id', $this->user->idalum)->first();
        if ($this->indep_hist) {
            if($this->indep_hist->inicio){                
                $this->hora_now = Carbon::now();   
                $this->readStatus();
            }
        }else redirect()->route('cuestionario', ['slug' => $this->slug->slug ]);                      
    }
    public function readStatus(){
        $this->examen_hist =$this->indep_hist ?  true : false;
        if($this->examen_hist){
            if ($this->indep_hist->fecha_fin > $this->hora_now && $this->indep_hist->fecha_inicio <= $this->hora_now){
                if ($this->indep_hist->estado) {
                    $this->estado = 1;
                    $this->dispatchBrowserEvent('redirect',['url' => $this->slug->slug]);
                }
                else $this->estado = 2;
            }else{
                if ($this->indep_hist->reinicio > $this->hora_now ) {
                    $this->estado = 3;
                    $this->hora_reinicio = $this->indep_hist->reinicio;
                } 
                else $this->examen_hist = false;
            }          
        }
    }
    public function acceptTermino(){
        // inscribirle/actualizar su hora a este user
        IndependHistor::updateOrInsert(
            ['ind_asig_id' => $this->slug->id,
            'user_id' => $this->user->idalum],
            ['fecha_inicio' => Carbon::now(),
            'estado' => 1,
            'inicio' => 1,
            'fecha_fin' => Carbon::now()->addMinutes($this->cant_pregts*2),
            'reinicio' => Carbon::now()->addHours(6)]
        );
        $this->examen_hist = true;
        $this->estado = 1;
        $this->dispatchBrowserEvent('redirect',['url' => $this->slug->slug]);
    }
    public function render()
    {
        return view('livewire.cuest-indep-prev')
            ->extends('layout');
    }
}
