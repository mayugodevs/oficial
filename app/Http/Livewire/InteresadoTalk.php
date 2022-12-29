<?php

namespace App\Http\Livewire;

use App\Models\TalkInteresados;
use App\Models\TalkUsuario;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InteresadoTalk extends Component
{
    


    public function render()
    {
        return view('livewire.interesado-talk');
    }

    public function interesado($id){
        $this->luiss=true;
    }
    public function tipoServicio(){
        if($this->tiposerv ==1) $this->empresa = false;
        else if($this->tiposerv ==2) $this->empresa = true;
    }
    public function enviarInteres(){
        
        if ($this->tiposerv == 1) {
            if (!empty($this->fecha_serv)) {
                if (!empty($this->tiempo_serv)) {
                    $user =Auth::user();
                    if ($user) {
                        TalkInteresados::create([
                            'idalum'=> $user->idalum,
                            'fecha_servicio'=> $this->fecha_serv,
                            'detalles'=> $this->objet_serv,
                            'talk_esp_id'=> $this->id_esp,
                            'horas'=> $this->tiempo_serv,
                            'tipo_servicio'=> 'Persona',
                        ]);
                    } 
                    else {
                        $talkInt = TalkInteresados::create([
                            'idalum'=> NULL,
                            'fecha_servicio'=> $this->fecha_serv,
                            'detalles'=> $this->objet_serv,
                            'talk_esp_id'=> $this->id_esp,
                            'horas'=> $this->tiempo_serv,
                            'tipo_servicio'=> 'Persona',
                        ]);
                        TalkUsuario::create([
                            'talk_inter_id' => $talkInt->id,
                            'nombres' => $this->names_serv,
                            'telefono' => $this->telef_serv,
                            'correo' => $this->email_serv,
                            'pais' => $this->pais_serv,
                        ]);
                    }
                    $this->dispatchBrowserEvent('resolve', ['message' => 'Servicio enviado']);
                    $this->luiss = false;
                    $this->resetInputs();

                } else $this->dispatchBrowserEvent('reject', ['message' => '¿Tiempo de servicio?']);
            } else $this->dispatchBrowserEvent('reject', ['message' => 'Falta fecha']);
        } else if($this->tiposerv == 2) {
            if (!empty($this->names_serv)) {
                if (!empty($this->cargo_serv)) {
                    if (!empty($this->email_serv)) {
                        if (!empty($this->pais_serv)) {
                            if (!empty($this->telef_serv)) {
                                if (!empty($this->empres_serv)) {
                                    if (!empty($this->rubro_serv)) {
                                        if (!empty($this->fecha_serv)) {
                                            if (!empty($this->cant_serv)) {
                                                if (!empty($this->tiempo_serv)) {
                                                    $user =Auth::user();
                                                    if ($user) {
                                                        $talkInt = TalkInteresados::create([
                                                            'idalum'=>$user->idalum,
                                                            'fecha_servicio'=> $this->fecha_serv,
                                                            'detalles'=> $this->objet_serv,
                                                            'talk_esp_id'=> $this->id_esp,
                                                            'horas'=> $this->tiempo_serv,
                                                            'tipo_servicio'=> 'Empresa',
                                                        ]);
                                                    } 
                                                    else {
                                                        $talkInt = TalkInteresados::create([
                                                            'idalum'=>NULL,
                                                            'fecha_servicio'=> $this->fecha_serv,
                                                            'detalles'=> $this->objet_serv,
                                                            'talk_esp_id'=> $this->id_esp,
                                                            'horas'=> $this->tiempo_serv,
                                                            'tipo_servicio'=> 'Empresa',
                                                        ]);
                                                    }
                                                    TalkUsuario::create([
                                                        'talk_inter_id' => $talkInt->id,
                                                        'nombres' => $this->names_serv,
                                                        'telefono' => $this->telef_serv,
                                                        'correo' => $this->email_serv,
                                                        'pais' => $this->pais_serv,
                                                        'rubro' => $this->rubro_serv,
                                                        'cant_personas' => $this->cant_serv,
                                                    ]);
                                                    $this->dispatchBrowserEvent('resolve', ['message' => 'Servicio enviado']);
                                                    $this->luiss = false;
                                                    $this->resetInputs();
                                                } else $this->dispatchBrowserEvent('reject', ['message' => '¿Tiempo de servicio?']);
                                            } else $this->dispatchBrowserEvent('reject', ['message' => 'Cuantas personas']);
                                        } else $this->dispatchBrowserEvent('reject', ['message' => 'Falta fecha']);
                                    } else $this->dispatchBrowserEvent('reject', ['message' => 'El rubro indicanos']);
                                } else $this->dispatchBrowserEvent('reject', ['message' => 'Nombre de la empresa']);
                            } else $this->dispatchBrowserEvent('reject', ['message' => 'Agrege un telefono']);
                        } else $this->dispatchBrowserEvent('reject', ['message' => 'Indicanos tu país']);
                    } else $this->dispatchBrowserEvent('reject', ['message' => 'Falta un correo coorporativo']);
                } else $this->dispatchBrowserEvent('reject', ['message' => 'Expecifica tu cargo']);
            } else $this->dispatchBrowserEvent('reject', ['message' => 'Tu nombre completo']);
        }
    }
    public function resetInputs(){
        $this->fecha_serv;
        $this->tiempo_serv;
        $this->objet_serv;
        $this->names_serv;
        $this->cargo_serv;
        $this->email_serv;
        $this->pais_serv;
        $this->telef_serv;
        $this->empres_serv;
        $this->rubro_serv;
        $this->cant_serv;
    }
}
