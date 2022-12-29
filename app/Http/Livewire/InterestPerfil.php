<?php

namespace App\Http\Livewire;

use App\Models\CategoriaPersona;
use App\Models\Interest;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class InterestPerfil extends Component
{

    public $id_categoria;
    public $nombre_categ;
    public $estado;
    public $festado;
    public $marcado;
    public $mensaje;
    public $hll;
    public function mount($estado){
        if ($estado ==2) {
            $this->marcado = 'checked';
            $this->estado = 2;
            $this->festado = 1;
        }else{
            $this->marcado = '';
            $this->estado = 1;
            $this->festado = 2;
        }         
    }
    public function render()
    { 
        return view('livewire.interest-perfil');
    }

    public function cambio($estado){
        if ($estado == 1) { /* ELIMINAR */
            $this->festado = 2;
            $this->marcado = '';
            if ($this->buscarDB($this->id_categoria) == 1) {
                $this->mensaje = 'existe';
                CategoriaPersona::where('categoria_id',$this->id_categoria)
                ->where('persona_id', Auth::user()->idalum)->delete();
            } 
        } else { /* SALVAR */
            $this->festado = 1;
            $this->marcado = 'checked';
            if (!$this->buscarDB($this->id_categoria) == 1) {
                $this->mensaje = 'no-existe';
                $user = Auth::user()->idalum;

                $notaNueva = new CategoriaPersona();
                $notaNueva->persona_id = $user ;
                $notaNueva->categoria_id = $this->id_categoria;
                // $notaNueva -> tipo = "ALUMNO";
                $notaNueva->save();
             } 
        }
        
    }

    public function buscarDB($idCateg){
        return count(CategoriaPersona::where('categoria_id',$idCateg)
        ->where('persona_id', Auth::user()->idalum)->get());
    }
    public function buscarIdInteres($idCateg){
        $this->hll = CategoriaPersona::select('id')->where('categoria_id',$idCateg)
        ->where('persona_id', Auth::user()->idalum)->get();
        return $this->hll;
    }
}
