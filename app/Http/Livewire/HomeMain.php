<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Curso;
use App\Models\CursoAsignacion;
use App\Models\DiplomadoGrupo;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeMain extends Component
{
    public $asignaciones;
    public $cursos = [];
    public $diplomados;
    public $especialidades;
    public $cursos_asig = [];
    public $carr = [];
    public $cambio=1;
    public $simbolo='USD';
    public $cod_iso='$';
    public $cant_carr_courses = 0;
    protected $listeners = ['add_course','remove_course'];
    public function mount(){        
        
        $user = Auth::user();
        if ($user) {
            foreach ($user->cursoInscripciones as $inscripcion) {
                array_push($this->cursos_asig,$inscripcion->cursoAsignacion->curso_idcur);                
            }    
        }
        $this->carr = showCarts(1);
    }

    public function add_course($id_course){ 
        array_push($this->carr, $id_course);
        $curso = Curso::where('idcur', $id_course)->first();
        
        addProduct($curso, 1);
        $this->dispatchBrowserEvent('resolve', ['message' => '¡Curso agregado!']);
        $this->emitTo('carrito','render');
    }
    public function remove_course($id_course){ 
        if (($clave = array_search($id_course, $this->carr)) !== false) unset($this->carr[$clave]);
        removeProduct($id_course, 1);
        $this->dispatchBrowserEvent('resolve', ['message' => '¡Curso eliminado!']);
        $this->emitTo('carrito','render');
    }
    public function render()
    {   
        $this->reset(['cursos','diplomados','especialidades']);
        $this->asignaciones = CursoAsignacion::where('estado',1)->orderBy('fecha', 'DESC')->take(20)->get();
        foreach ($this->asignaciones as $asignacion) {
            array_push($this->cursos, $asignacion->curso);
        }

        $this->diplomados = DiplomadoGrupo::where('estado',1)->orderBy('inicio','DESC')->get();

        $this->especialidades = Categoria::select('idc','nombre','precio','slug','img')->where('estado',1)->get();
        return view('livewire.home-main')->extends('layout');
    }
}
