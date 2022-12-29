<?php

namespace App\View\Components;

use App\Models\CursoAsignacion;
use App\Models\CursoCertificado;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Usuario extends Component
{
    public $getUser, $usuario, $tipo, $nombre, $pais, $foto;
    public $yourself_certificado = false;
    public $redesSociales = [];
    public $premiun;
    public $estad;
    // public $query = '';

    public $cursosTerminados = 0;
    public $cursosCertificados = 0;
    public $cursos_asig = [];
    public $usermismo = false;
    public $usermismo2 = 'false';
    public $iduser;

    public function __construct($iduser,$tipo)
    {
        $this->iduser = $iduser;        
        $this->tipo = $tipo;        
        $this->getUser = getUserQ($iduser);
        $this->usuario = $this->getUser[0];  
    }
    public function render(){
        $this->datosUser();
        return view('components.usuario');
    }
    public function datosUser(){        
        $this->nombre = $this->usuario->nombres;
        $this->pais = $this->usuario->paisU;
        $this->foto = $this->usuario->avatar ? $this->usuario->avatar : 'images/picture/avatar_general.jpg';
        if ($this->tipo == "certificado") {
            $this->foto = $this->usuario->avatar;
            if(Auth::user() && Auth::user()->idalum == $this->usuario->idalum){
                $this->usermismo = true;
            }
        }
        elseif ($this->tipo == 'redes') {
            $this->redesSociales = [
                'facebook' => $this->usuario->perfil_face,
                'linkedin' => $this->usuario->perfil_link,
                'instagram' => $this->usuario->perfil_inst,
                'tiktok' => $this->usuario->perfil_tiktok,
            ];
        }
        elseif ($this->tipo == "home") {
            $this->premiun = $this->usuario->planAlumno;
            if(!$this->premiun){
                $this->estad = 'Cursos';
            }elseif ($this->premiun->idplan == 1) {
                $this->estad = 'basico';
            }elseif($this->premiun->idplan == 2){
                $this->estad = 'Premium';                
            }elseif($this->premiun->idplan == 3){
                $this->estad = 'Profesional';
            }
        }
        elseif ($this->tipo == "all") {
            foreach ($this->usuario->cursoInscripciones as $inscripcion) {
                array_push($this->cursos_asig,$inscripcion->cursoAsignacion->curso_idcur);                    
                $this->cursosTerminados +=$this->porcentajeCurso($inscripcion->cursoAsignacion->idasig);
                $this->cursosCertificados +=$this->verificarCertificado($inscripcion->idinsc);                  
            }
            $this->redesSociales = [
                'facebook' => $this->usuario->perfil_face,
                'linkedin' => $this->usuario->perfil_link,
                'instagram' => $this->usuario->perfil_inst,
                'tiktok' => $this->usuario->perfil_tiktok,
            ]; 
        }
    }
    public function porcentajeCurso($idasig){
        $asignado = CursoAsignacion::find($idasig);
        $mat = 0;
        $vist = 0;
        foreach ($asignado->cursoModulos as $contenido) {
            foreach ($contenido->cursoMateriales as $value) {
                $vist += count($value->historialVideos->where('iduser',$this->usuario->idalum));              
            }
            $mat += count($contenido->cursoMateriales);
        }
        $porc = round(($vist/$mat)*100) == 100 ? 1 : 0;
        return $porc;
    }
    public function verificarCertificado($idinsc){
        $existe = CursoCertificado::where('idinsc',$idinsc)->count();
        return $existe;
    }
}
