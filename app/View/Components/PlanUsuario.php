<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class PlanUsuario extends Component
{
    public $user;
    public $premiun = false;
    public $estad;
    public $fecha;
    public function __construct()
    {
        $this->user = Auth::user();
        $this->premiun = $this->user->planAlumno ? $this->user->planAlumno : false;
        // $this->readPlan();
    }
    public function render()
    {
        return view('components.plan-usuario');
    }
    public function readPlan(){
        if(!$this->premiun){
            $this->estad = 'Cursos';
        }elseif ($this->premiun->idplan == 1) {
            $this->estad = 'basico';
        }elseif($this->premiun->idplan == 2){
            $this->estad = 'Premium';                
        }elseif($this->premiun->idplan == 3){
            $this->estad = 'Profesional';
        }
    }
}
