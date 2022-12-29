<?php

namespace App\Http\Livewire;

use App\Exports\PaisExport;
use App\Models\CursoAsignacion;
use App\Models\CursoInscripcion;
use App\Models\ExamenTerminos;
use App\Models\User;
use Livewire\Component;

class CursoVisto extends Component
{
    public $inscripciones = [];
    public $tareas = [];
    public $examen = false;
    public $email;
    public $user_insc = 0;
    
    public function search_users(){ 
        $this->inscripciones = CursoInscripcion::whereHas('alumno', function ($query) {
            $query->where('user_web.email', 'LIKE','%'.$this->email.'%');
        })->get(); 
    }
    public function ver_tareas($id_inscrip){
        $inscrip = CursoInscripcion::find($id_inscrip);
        $this->user_insc = $inscrip->idalum;
        $asing = CursoAsignacion::find($inscrip->cursoAsignacion->idasig);
        $this->tareas = $asing->curso_tareas;
        if (count($asing->cursoPreguntas)) { 
            $examen_tomo = ExamenTerminos::where('alumno_id', $this->user_insc)->where('curs_asign_id', $asing->idasig)->first();
            if ($examen_tomo) $this->examen = $examen_tomo->aprobo;
            else $this->examen = 'NE';
        }
    }
    // public function excel_download(){
    //     return (new PaisExport(request($this->email)))->download('paiss.xlsx');
    // }
    public function render()
    {
        return view('livewire.curso-visto')->extends('layout');
    }
}
