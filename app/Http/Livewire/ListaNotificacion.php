<?php

namespace App\Http\Livewire;

use App\Models\DiplomadoGrupo;
use App\Models\PostAlumnoResp;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListaNotificacion extends Component
{
    public $comentarios = [];
    public $user;
    public function mount(){
        $this->user = Auth::user()->idalum;
    }
    public function render()
    {
        $this->comentarios = PostAlumnoResp::where('alumnos_id',$this->user)->where('visto',0)->get();
        return view('livewire.lista-notificacion');
    }
}
