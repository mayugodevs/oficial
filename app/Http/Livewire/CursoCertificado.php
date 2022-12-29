<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use App\Models\CursoAsignacion;
use App\Models\CursoModulo;
use App\Models\DiplomadoCertificado;
use App\Models\DiplomadoPagos;
use App\Models\ExamenTerminos;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CursoCertificado extends Component
{
    public $cursos_comprados = [];
    public $idAsign;
    public $user;
    
    public $notaExamen;

    public $modulos = [];
    public $othersDiplomados = [];

    public $detDiplomad;
    public $urlCertificado = 0;

    public $tipo=0;
    public $cantExa=0;
    public $cantTareas=0;

    

    public function mount(){
        $this->user = Auth::user();
    }
    public function render()
    { 
        $this-> listCourses();
        $this-> listOthersDiplomados();
        return view('livewire.curso-certificado');
    }
    public function listCourses(){
        $this->cursos_comprados = [];        
        if ($this->user) {
            foreach ($this->user->cursoInscripciones as $inscripcion) {
                array_push($this->cursos_comprados,$inscripcion->cursoAsignacion->curso);
        }   }    
    }
    public function listOthersDiplomados(){
        $this->othersDiplomados = DiplomadoPagos::where('alumno_id', $this->user->idalum)->get();
    }
    public function showCertificado($idAs){
        $this->tipo = 1;
        $this->urlCertificado = CursoAsignacion::find($idAs)->cursoInscripcion->cursoCertificado;
        $this->nota = [];
        $this->notaExamen = 0;    
        $this->cantExa = 0;
        $this->cantTareas = 0;
        $this->modulos = CursoModulo::where('idasig',$idAs)->get();
        foreach ($this->modulos as $modulo) {
            $this->cantExa += count($modulo->cursoExamenPreguntas);
            $this->cantTareas += count($modulo->cursoTareaModulos);
        }       
        foreach (ExamenTerminos::where('curs_asign_id',$idAs)->where('alumno_id',$this->user->idalum)->get() as $nota) {
            $this->notaExamen= $nota->aprobo;
        }
    }
    public function showCertDiplom($idPay){
        $this->tipo = 2;
        $this->detDiplomad = DiplomadoCertificado::where('idpay_diplomado', $idPay)->first();
    }
}
