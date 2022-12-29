<?php

namespace App\Http\Livewire;

use App\Models\ChatAlumnos;
use App\Models\PlanesAlumno;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chats extends Component
{
    public $searchUser = 'mayugo';
    public $openUser = false;
    public $status = false;
    public $users = [];
    public $userme = false;/* Usuario logueado */
    public $messages = [];/* Del usuario escogido su historial */
    public $message ='';/* Lo que se envie en un chat */

    public function searchUsers(){
        $this->users = [];
        if(!empty($this->searchUser)){          
            foreach (PlanesAlumno::where('fecha_fin','>',Carbon::now())->get() as $plan) {
                array_push($this->users, $plan->alumno);
            }
        }
    }
    public function openChat($idAlum){
        $this->messages = [];
        $this->openUser = $idAlum;
        $this->status = true;
        $this->messages = ChatAlumnos::where('envio',$idAlum)->orwhere('recibe',$idAlum)
            ->where('envio',$this->userme)->orwhere('recibe',$this->userme)->get();
    }
    public function sendMessage(){
        $chat = new ChatAlumnos();
        $chat->mensaje = $this->message;
        $chat->tipo = 1;
        $chat->estado = 0;
        $chat->envio = $this->userme;
        $chat->recibe = $this->openUser;
        $chat->save();
        $this->message = '';
        $this->openChat($this->openUser);
        $this->dispatchBrowserEvent('resolve',['message' => 'Message success sended ']);
    }

    public function mount(){
        $this->userme = Auth::user()->idalum;
    }
    public function render()
    {
        $this->searchUsers();
        return view('livewire.chats')->extends('layout');
    }

    
}
