<?php

namespace App\Http\Livewire;

use App\Models\CursoCertificado;
use App\Models\DiplomadoCertificado;
use Livewire\Component;

class ShowCertificado extends Component
{
    public $codigo;
    public function render()
    {
        return view('livewire.show-certificado');
    }
    public function comprobarCertificado(){
        $this->codigo = trim($this->codigo);
        if(!empty($this->codigo )){          
            if(strlen($this->codigo) > 5){
                if(CursoCertificado::find($this->codigo)) redirect()->route('certificado', ['certi' => encryption($this->codigo), 'type' => 1]);
                else if(DiplomadoCertificado::find($this->codigo)) redirect('certificado?idCert='.$this->codigo.'&t=2');
                else $this->dispatchBrowserEvent('reject', ['message' => 'Certificado no encontrado']);
            }  else $this->dispatchBrowserEvent('reject', ['message' => 'Escribe un código valido']);
        }else $this->dispatchBrowserEvent('reject', ['message' => 'Código vacio']);
                
    }
}
