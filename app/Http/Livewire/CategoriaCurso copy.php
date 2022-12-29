<?php

namespace App\Http\Livewire;  
use App\Models\Categoria;
use App\Models\Pais;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CategoriaCurso extends Component
{
    public $cursos = []; /* listar los cursos de la categoria escogida */
    public $categoria_id = 0; /* captar el ID de la categoria seleccionado */
    public $categoria_name;
    public $categoria_slug; 
    public $categoria; 
    public $user; 
    public $simbolo = 'USD'; 
    public $cod_iso = '$'; 
    public $cambio=1; 
    // public $categorias = []; /* para listar todas las categorias */    
    public $cursos_asig = []; /* listar los ID's de los cursos comprados */

    public function mount($slug){
        $this->categoria = Categoria::where('slug',$slug)->first(); 
        $this->categoria_id = $this->categoria->idc;
        // $this->categorias = Categoria::where('estado',1)->get();  
        $this->user = Auth::user();
        $this->moneda();        
    } 
   
    public function render()
    {               
        $this->mostrarView();
        return view('livewire.categoria-curso')->extends('layout');
    }    

    public function mostrarView(){ 
        $this->categoria_name = $this->categoria_id != 0 ? Categoria::find($this->categoria_id)->nombre : '';
        $this->reset(['cursos_asig','cursos']);
        $this->cursos = Categoria::find($this->categoria_id)->cursos->where('estado',1);
        if ($this->user) {
            foreach ($this->user->cursoInscripciones as $inscripcion) {
                array_push($this->cursos_asig,$inscripcion->cursoAsignacion->curso_idcur);                    
            }    
        }
    } 
    public function moneda(){
        session_start();
        $money = Pais::find(isset($_SESSION['money_user']) ? $_SESSION['money_user'] : 13);
        $this->simbolo = $money->simbolo;
        $this->cambio = $money->cambio;
        $this->cod_iso = $money->cod_iso;
    }
    public function showNow($idCategoria, $tipo){
        $this->categoria_id = $idCategoria;
    }

    
}


