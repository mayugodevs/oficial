<?php

namespace App\Http\Livewire;

use App\Models\DiplomadoValorar;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ValorarProducto extends Component
{
    public $id_grupo, $insc;
    public $score = 0;
    public $coment = '';
    public $user = false;
    public $comments = [];
    public function mount(){
        $this->user = Auth::user()->idalum;
        $this->readingStatus();
    }
    public function render()
    {
        // $this->scoreUser();
        $this->readingComments();
        return view('livewire.valorar-producto');
    }

    public function readingStatus(){
        $estado = DiplomadoValorar::where('dipl_grup_id',$this->id_grupo)
            ->where('dipl_pagos_id',$this->insc)->first();
        $this->score = $estado ?  $estado->puntaje : 0 ; 
        $this->coment = $estado ?  $estado->comentario : '' ; 
    }

    public function scoreUser(){
        DiplomadoValorar::updateOrInsert(
            ['dipl_grup_id' => $this->id_grupo , 'dipl_pagos_id' => $this->insc],
            ['puntaje' => $this->score],
        );
        $this->dispatchBrowserEvent('resolve' , ['message' => 'Muchas gracias por tu valoracion']);
    }
    public function comentUser(){
        DiplomadoValorar::updateOrInsert(
            ['dipl_grup_id' => $this->id_grupo , 'dipl_pagos_id' => $this->insc],
            ['comentario' => $this->coment],
        );
        $this->dispatchBrowserEvent('resolve' , ['message' => 'Muchas gracias por tu comentario']);
    }
    public function readingComments(){
        $this->comments = DiplomadoValorar::select('puntaje','comentario')
            ->where('dipl_grup_id',$this->id_grupo)->get();
    }


}
