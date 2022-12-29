<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Curso;
use App\Models\CursoLike;
use App\Models\DiplomadoPagos;
use App\Models\Pais;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MiPerfil extends Component
{
    public $tipo, $categorias, $user;    
    public $cursos = [], $cursos_asig = [];    
    public $simbolo = 'USD', $cod_iso='$', $cambio=1;

    protected $listeners = ['render'];
    
    public function mount()
    {
        $this->user = Auth::user();  
        $this->moneda();
        $this->categorias = Categoria::where('estado',1)->get();  
    }
    public function render()
    {
        $this->mostrar();
        return view('livewire.mi-perfil');
    }
    public function moneda()
    {
        session_start(); 
        $money = Pais::find(isset($_SESSION['money_user']) ? $_SESSION['money_user'] : 13);
        $this->simbolo = $money->simbolo;
        $this->cambio = $money->cambio;
        $this->cod_iso = $money->cod_iso;
    }

    public function mostrar()
    {   
        $this->cursos_asig = [];
        $this->cursos = [];
        if ($this->tipo == 'micursos') {
            foreach ($this->user->cursoInscripciones->where('estado',1) as $inscripcion) { 
                if($inscripcion->fecha_fin === NULL || $inscripcion->fecha_fin > Carbon::now() ){
                    array_push($this->cursos,$inscripcion->cursoAsignacion->curso);
                    array_push($this->cursos_asig,$inscripcion->cursoAsignacion->curso_idcur); 
                }                   
            } 
        } elseif($this->tipo == 'midiplomado') {
            $this->cursos = DiplomadoPagos::where('alumno_id',$this->user->idalum)->get();
        }elseif($this->tipo == 'mifavorito') {
            foreach (CursoLike::where('user_id',$this->user->idalum)->get() as $likes) {
                array_push($this->cursos,$likes->cursoAsignacion->curso);    
            }
            foreach ($this->user->cursoInscripciones as $inscripcion) {
                array_push($this->cursos_asig,$inscripcion->cursoAsignacion->curso_idcur);                    
            }    
        }elseif($this->tipo == 'reciente') {
            $this->cursos = Curso::where('estado',1)->orderBy('idcur', 'DESC')->take(6)->get();
            foreach ($this->user->cursoInscripciones as $inscripcion) {
                array_push($this->cursos_asig,$inscripcion->cursoAsignacion->curso_idcur);                    
            }    
        }        
    } 

    public function showNow($idCategoria, $tipo){
        $this->tipo = $tipo;
    }
}

