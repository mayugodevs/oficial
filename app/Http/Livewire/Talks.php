<?php

namespace App\Http\Livewire;

use App\Models\TalkCategoria;
use App\Models\TalkEspecialista;
use App\Models\TalkInteresados;
use App\Models\TalkUsuario;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Talks extends Component
{
    public $categorias;
    public $user;
    public $talk_especls = false;
    public $id_talk_esp = false;

    public $id_esp;
    public $modalServ=false;
    public $tiposerv = 0;
    public $fecha_serv,$tiempo_serv,$objet_serv,$names_serv,
        $cargo_serv,$email_serv,$pais_serv,$telef_serv,
        $empres_serv,$rubro_serv,$cant_serv;
    public $empresa = false; /* persona o empresa */

    protected $listeners = ['enviarInteres'];
    
    public function mount(){
        $this->categorias = TalkCategoria::where('estado',1)->get();
        $this->user = Auth::user() ? Auth::user()->idalum : false;
    }
    public function render(){
        return view('livewire.talks')->extends('layout');
    }
    public function listSub($id_cat){
        $this->talk_especls = TalkEspecialista::where('cat_emp_id', $id_cat)->get();
    }
    
    public function interesado($id){
        $this->modalServ=true;
        $this->id_talk_esp=$id;
    } 
    public function enviarInteres(){ 
        $talkInt = TalkInteresados::create([
            'idalum'=> $this->user ? $this->user : NULL,
            'fecha_servicio'=> $this->fecha_serv,
            'detalles'=> $this->objet_serv,
            'talk_esp_id'=> $this->id_talk_esp,
            'horas'=> $this->tiempo_serv,
            'tipo_servicio'=>  $this->tiposerv ? 'Empresa' :'Persona' ,
        ]);
        if (!$this->user || $this->tiposerv) {
            TalkUsuario::create([
                'talk_inter_id' => $talkInt->id,
                'nombres' => $this->names_serv,
                'telefono' => $this->telef_serv,
                'correo' => $this->email_serv,
                'pais' => $this->pais_serv,
                'rubro' => $this->tiposerv ? $this->rubro_serv : NULL,
                'cant_personas' => $this->tiposerv ? $this->cant_serv : NULL,
            ]);
        }  
        $this->modalServ = false;
        $this->resetInputs();
        $this->dispatchBrowserEvent('resolve', ['message' => 'Servicio enviado']);
    }
    public function resetInputs(){
        $this->fecha_serv = '';
        $this->tiempo_serv = '';
        $this->objet_serv = '';
        $this->names_serv = '';
        $this->cargo_serv = '';
        $this->email_serv = '';
        $this->pais_serv = '';
        $this->telef_serv = '';
        $this->empres_serv = '';
        $this->rubro_serv = '';
        $this->cant_serv = '';
    }
}
