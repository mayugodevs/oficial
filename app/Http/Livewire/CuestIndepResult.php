<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use App\Models\ExternoInsc;
use App\Models\IndependAsign;
use App\Models\IndependHistor;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CuestIndepResult extends Component
{
    public $slug;
    public $user;
    public $indep_hist;
    public $hora_reinicio = false;
    public $nota = false;
    public $reiniciar = false;
    public $name_test;
    public $pregunts;    

    protected $listeners = ['horaChange'];

    public function mount(IndependAsign $slug){
        $this->user = Auth::user();
        $this->name_test = $this->slug->tipo == 'Curso' ? $this->slug->indep_curso : $this->slug->indep_extern;
        $this->indep_hist = IndependHistor::where('ind_asig_id',$this->slug->id)
            ->where('user_id', $this->user->idalum)->first();
        if($this->indep_hist){
            if($this->indep_hist->inicio){
                if(!$this->indep_hist->estado){
                    $this->pregunts = $this->slug->indep_questions;
                    if($this->indep_hist->reinicio < Carbon::now()) $this->reiniciar = true;  
                    else $this->hora_reinicio = $this->indep_hist->reinicio;
                    $this->nota = $this->indep_hist->nota < 100 ? true : false;
                }else redirect()->route('cuest_indep_resp',['slug' => $this->slug->slug]);                     
            }else redirect()->route('cuest_indep_prev',['slug' => $this->slug->slug]);            
        }else redirect()->route('cuestionario',['slug' => $this->slug->slug]);
    }
    public function horaChange(){
        $this->reiniciar = true;
    }
    public function render()
    {
        return view('livewire.cuest-indep-result')
            ->extends('layout');
    }
}
