<?php

namespace App\View\Components;

use App\Models\DiplomadoCertificado;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class CertificadoUser extends Component
{
    public $tipo;
    public $insc;
    // public $user = false;
    public $status = false;
    public function __construct($tipo, $insc){
        $this->tipo = $tipo;
        $this->insc = $insc;
        // $this->user = Auth::user() ? Auth::user() -> idalum : 0;
    }
    public function render(){
        $this->StatusCertificado();
        return view('components.certificado-user');
    }

    public function StatusCertificado(){
        if($this->tipo == 'diplomado'){
            $this->status = DiplomadoCertificado::where('idpay_diplomado',$this->insc)->first() ? true : false;
        }
    }
}
