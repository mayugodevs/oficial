<?php

namespace App\Http\Livewire;  
use App\Models\Categoria;
use App\Models\Pais;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component; 

class CategoriaCurso extends Component
{
    public $cursos = [], $cursos_asig = [], $categoria; 
    public $user; 
    public $plan = null, $estado_plan = 0; /* comprar plan */
    public $date_now;  
    public $simbolo = 'USD', $cod_iso = '$', $cambio=1; 

    public function mount($slug){
        $this->categoria = Categoria::where('slug',$slug)->first(); 
        $this->user = Auth::user();        
        $this->mostrarView();
        $this->moneda();        
    }   
   
    public function render()
    {               
        return view('livewire.categoria-curso')->extends('layout');
    }    

    public function mostrarView(){ 

        $this->cursos = Categoria::find($this->categoria->idc)->cursos->where('estado',1);
        
        if ($this->user) { 
            $date_now = Carbon::now();
            $this->cursos_asig = $this->get_cursos($this->user->cursoInscripciones, $date_now);
            $this->plan = $this->user->planAlumno;  
            if ($this->plan){
                if ($this->plan->fecha_fin > $date_now) {
                    $this->estado_plan = 1; /* plan activo */                    
                } else { 
                    $this->estado_plan = 2; /* renovar plan */                    
                }                
            }
        }  
        
    } 
    public function get_cursos($inscripciones, $date_now){ 
        $cursos = []; 
        foreach ($inscripciones as $inscripcion) {
            if ($inscripcion->fecha_fin > $date_now || $inscripcion->fecha_fin == null) { 
                array_push($cursos,$inscripcion->cursoAsignacion->curso_idcur);                    
            }
        }  
        return $cursos;
    }
    public function moneda(){
        session_start();
        $money = Pais::find(isset($_SESSION['money_user']) ? $_SESSION['money_user'] : 13);
        $this->simbolo = $money->simbolo;
        $this->cambio = $money->cambio;
        $this->cod_iso = $money->cod_iso;
    }
}


