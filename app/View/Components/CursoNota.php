<?php

namespace App\View\Components;

use App\Models\CursoAsignacion;
use App\Models\ExamenTerminos;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class CursoNota extends Component
{
    public $user = false;
    public $curso_asing;
    public $asign_id;
    public $examen = 0;
    public $home_works = false;

    public function __construct($asign){
        $this->user = Auth::user();
        $this->curso_asing = CursoAsignacion::find($asign);
        $this->asign_id = $this->curso_asing->idasig;
        $this->status();
    }
    public function status(){
        $examen = ExamenTerminos::where('curs_asign_id', $this->asign_id)
            ->where('alumno_id',$this->user->idalum)->first();
        $this->examen = count($this->curso_asing->cursoPreguntas)>0 
            ? ($examen ? $examen->aprobo : 'ND' )
            : false ;
        $this->home_works = $this->curso_asing->curso_tareas;
    }

    public function render(){
        return view('components.curso-nota');
    }
}
