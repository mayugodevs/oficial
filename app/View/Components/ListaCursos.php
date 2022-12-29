<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class ListaCursos extends Component
{
    public $cursos;
    public $ml;
    public $lg;
    public $xl;
    public $sm;
    public $md;
    public $cursos_asig = [];
    public function __construct($curso,$ml,$lg,$xl,$sm,$md)
    {
        $this->cursos_Comprados();
        $this->cursos = $curso;
        $this->ml = $ml;
        $this->lg = $lg;
        $this->xl = $xl;
        $this->sm = $sm;
        $this->md = $md;
    }
    public function cursos_Comprados(){
        //si el usuario esta logueado,leeremos sus cursos y otros relacionados 
        $user = Auth::user();
        if ($user) {
            foreach ($user->cursoInscripciones as $inscripcion) {
                array_push($this->cursos_asig,$inscripcion->cursoAsignacion->curso_idcur);                
            }    
        }
    }
    public function render()
    {
        return view('components.lista-cursos');
    }

    
}
