<?php

namespace App\Http\Livewire;

use App\Models\CursoAsignacion;
use App\Models\ExternoInsc;
use App\Models\IndependAsign;
use App\Models\IndependHistor;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CuestionarioExt extends Component
{
    public $indep_slug;
    public $code;
    public $user;
    public $code_access;
    public $name_test;
    public $step = 1;
    public $name_r;
    public $last_r;
    public $phone_r;
    public $email_r;
    public $pass1_r;
    public $pass2_r;/* no sirve quitar dle front */
    protected $listeners = ['checkUser'];
    public function mount(IndependAsign $slug){
        $this->indep_slug = $slug;
        $this->code = $this->indep_slug->codigo;
        $this->name_test = $this->indep_slug->tipo == 'Curso' ? $slug->indep_curso : $slug->indep_extern;                     
        $this->user = Auth::user() ? Auth::user() : false;
    }
    public function ckechCode(){
        if ($this->code == $this->code_access) {
            if($this->user) $this->step = 3;
            else $this->step = 2;
        } else $this->dispatchBrowserEvent('reject', ['message' =>'error in code']);
    }
    public function checkUser(){
        $this->step = 3;
        $user = User::create([
            'nombres' => $this->name_r,
            'apellidos' => $this->last_r,
            'telf' => $this->phone_r,
            'email' => $this->email_r,
            'pass' => Hash::make($this->pass1_r), 
            'pais' => 1, 
        ]);
        $this->user = $user;
    }
    public function goTest(){
        if(!$this->user){
            Auth::loginUsingId($this->user->idalum);
        }
        $fecha = Carbon::now();
        IndependHistor::updateOrInsert(
            ['ind_asig_id' => $this->indep_slug->id,
            'user_id' => $this->user->idalum,
            'inicio' => 0],
            [
            'estado' => 0,
            ]
        );
        return redirect()->route('cuest_indep_prev',['slug' => $this->indep_slug->slug]);
    }
    public function render()
    {
        return view('livewire.cuestionario-ext')
            ->extends('layout');
    }
}
