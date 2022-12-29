<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListaMensaje extends Component
{
    public $mensajes = [];
    public $estado = true;
    public $user;
    public $plan ='Básico';
    public function mount(){
        $this->user = Auth::user();
     // $this->plan = $this->user->planAlumno->servicio;
    }
    public function render()
    {
        if ($this->plan == 'Premium') {
            $this->mensajes = ['hola' => 0];
        } 
        
        return view('livewire.lista-mensaje');
    }
}
