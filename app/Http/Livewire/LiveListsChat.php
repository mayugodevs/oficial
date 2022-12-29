<?php

namespace App\Http\Livewire;

use App\Models\MayuliveComentario;
use Livewire\Component;

class LiveListsChat extends Component
{
    public $comentarios=[];
    protected $listeners = ['postAdded'];/* ESCUCHA ALGUN EVENTO */
    public function render()
    {
        $this->postAdded('u');
        return view('livewire.live-lists-chat');
    }
    public function postAdded($post)
    {
        $this->comentarios = MayuliveComentario::where('mayulive_id',1)->get();
    }
}
