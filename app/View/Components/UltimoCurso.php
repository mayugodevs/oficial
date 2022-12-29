<?php

namespace App\View\Components;

use App\Models\CursoMaterial;
use App\Models\HistorialVideoAlumno;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class UltimoCurso extends Component
{
    public $porcentaje = 0;
    public $idAsig = 0;
    public $cursoNombre = '';
    public $cursoImg ='';
    public $with_cursos = true;
    public $idUser;
    public function __construct()
    {
        $this->user =  Auth::user();
        $this->idUser =  $this->user->idalum;
    }
    public function render()
    {
        $this->porcentajeVideos();
        return view('components.ultimo-curso');
    }
    
    public function porcentajeVideos(){
        if(count($this->user->cursoInscripciones)>0){
            foreach (HistorialVideoAlumno::where('iduser',$this->idUser)->orderBy('idhistorial','DESC')->take(1)->get() as $idAsiii) {
                $this->idAsig = $idAsiii->idasig;
                $this->cursoNombre = $idAsiii->cursoInscripcion->cursoAsignacion->curso->nom;
                $this->cursoImg = $idAsiii->cursoInscripcion->cursoAsignacion->curso->img;
            }
            if ($this->idAsig != 0) {
                $count_contenidos = CursoMaterial::whereHas('cursoModulo', function ($query) {
                    $query->where('idasig', $this->idAsig);
                })->get()->count();
    
                $count_historial=HistorialVideoAlumno::whereHas('cursoInscripcion', function ($query) {
                    $query->where('asignados_idasig',  $this->idAsig)->where('idalum',$this->idUser);
                })->get()->count();
                $porc = round(($count_historial/$count_contenidos)*100);
                $this->porcentaje = ($porc >= 100) ? 100 : $porc ;
            } 
        }else $this->with_cursos = false;        
        
    }

}
