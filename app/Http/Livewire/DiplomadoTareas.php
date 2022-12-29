<?php

namespace App\Http\Livewire;

use App\Models\DiplomadoPay;
use App\Models\DiplomadoSemana;
use App\Models\DiplomadoTareaEntrega;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DiplomadoTareas extends Component
{
    public $id_grupo;
    public $semanas;
    public $idHomeWork;
    public $url;
    public $user;
    public $statusLink = false;
    public function mount(){
        $this->user = Auth::user()->idalum;
    }
    public function render(){
        $this->semanas = DiplomadoSemana::where('idiplomado',$this->id_grupo)->get();
        return view('livewire.diplomado-tareas');
    }
    public function loadLink(){
        $this->url = trim($this->url);
        if(!empty($this->url)){
            DiplomadoTareaEntrega::create([
                'estado' => 1,
                'fecha' => now(),
                'archivo' => $this->url,
                'tipoarchivo' => 'url',
                'nota' => 0,
                'feedback' => '',
                'dipl_tarea_id' => $this->idHomeWork,
                'dipl_pagos_id' => DiplomadoPay::where('diplomados_id',$this->id_grupo)->where('alumno_id',$this->user)->first()->idpay,
            ]);
            $this->dispatchBrowserEvent('resolve' , ['message' => 'Url subido']);
            $this->url ='';
        }else $this->dispatchBrowserEvent('reject' , ['message' => 'Campo Vacio']);
    }
    public function modalLink($estado, $idHomeWork){
        $this->idHomeWork = $idHomeWork;
        $this->statusLink = $estado;
    }
    public function deleteT($idHomeWork){
        DiplomadoTareaEntrega::where('dipl_tarea_id',$idHomeWork)->delete();
    }
}
