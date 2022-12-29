<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use App\Models\CursoInscripcion;
use App\Models\Pais;
use getID3;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
// use Owenoj\LaravelGetId3\GetId3;
class CursoDetalle extends Component
{
    public $slug; /*  */
    public $cursos = [];
    public $cursos_asig = [];
    public $preg_frec = [];
    public $curso_tipo;
    public $trabajadores;
    public $modulos;
    public $categoria;
    public $curso;
    public $have_course;
    public $plan=0;
    public $cantAlumno;

    public $simbolo;
    public $cambio;
    public $carrito;
    public $cod_iso;
    public $url;
    public function mount($id){
        
        $this->url =  'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $this->slug = $id;
        $this->curso = Curso::where('slug',$id)->first(); 
       
        $cursos_asig =[];
        $user = Auth::user();
        if ($user) {
            foreach ($user->cursoInscripciones as $inscripcion) {
                array_push($cursos_asig,$inscripcion->cursoAsignacion->curso_idcur);
            }    
            $this->have_course = CursoInscripcion::where('asignados_idasig', $this->curso->cursoAsignacion->idasig)->where('idalum',$user->idalum)->first() ? true : false ;
            $this->plan = $user->planAlumno->idplan;
        }
        $this->categoria = $this->curso->categoria;
        $this->cantAlumno = CursoInscripcion::where('asignados_idasig', $this->curso->cursoAsignacion->idasig)->count();
                
        $this->cursos = $this->curso->categoria->cursos->where('estado',1)->where('idcur','!=',$this->curso->idcur);
        $this->curso_tipo = in_array($this->curso->idcur, $this->cursos_asig) ? 'fas fa-star' : 'fas fa-lock';
        $this->trabajadores = $this->curso->cursoAsignacion->trabajador;
        $this->modulos = $this->curso->cursoModulos;
        $this->moneda();
    }

    public function moneda(){
        session_start();
        $money = Pais::find(isset($_SESSION['money_user']) ? $_SESSION['money_user'] : 13);
        $this->simbolo = $money->simbolo;
        $this->cambio = $money->cambio;
        $this->cod_iso = $money->cod_iso;
        
    }

    public function render()
    {
        return view('livewire.curso-detalle')->extends('layout');
    }
}