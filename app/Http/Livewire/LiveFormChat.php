<?php

namespace App\Http\Livewire;

use App\Events\EnviarMensaje;
use App\Models\MayuliveComentario;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LiveFormChat extends Component
{
    public $mensaje;
    public $user;

    public function mount(){
        $this->user = Auth::user()->idalum;
    }
    public function render()
    {
        return view('livewire.live-form-chat');
    }

    public function comentarLive(){
        MayuliveComentario::create([
            'comentario' => $this->mensaje,
            'estado' => 1,
            'fecha' => now(),
            'mayulive_id' =>1,
            'alumnos_id' => $this->user,
        ]);
        // $this->dispatchBrowserEvent('name-updated', ['newName' => $this->mensaje]);
        // $this->emit('postAdded', 15);/* LLAMA A OTRO LIVEWIRE CLASES */
        
        event(new EnviarMensaje($this->mensaje,$this->user));
        $this->mensaje = '';
    }

} 
