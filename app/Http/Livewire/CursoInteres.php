<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\CategoriaPersona;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CursoInteres extends Component
{
    public $user;
    public $intereses = [];
    public $categorias;

    public function mount(){
        $this->user = Auth::user();
        $this->categorias = Categoria::select('idc','nombre')->get();
        $this->mmmm();
    }

    public function render()
    {
        // $this->intereses = [];
          
        // $this->intereses = [];
        return view('livewire.curso-interes');
    }
    public function mmmm(){
        foreach ($this->user->intereses as $interes) {
            array_push($this->intereses, $interes->categoria_id);
        } 
    }
    public function cambioInteres($id, $estado){
        if ($estado) { /* ELIMINAR */
            // if ($this->buscarDB($id) == 1) {
            CategoriaPersona::where('categoria_id',$id)
                ->where('persona_id', $this->user->idalum)->delete();
            $this->dispatchBrowserEvent('resolve', ['message' => 'Se quito categoria']);
            // } 
            if (($clave = array_search($id, $this->intereses)) !== false) {
                unset($this->intereses[$clave]);
                // print_r($textos);
            }
        } else { /* SALVAR */
            // if (!$this->buscarDB($id) == 1) {
            $user = $this->user->idalum;
            CategoriaPersona::create([
                'persona_id' => $user,
                'categoria_id' => $id,
            ]);
            $this->dispatchBrowserEvent('resolve', ['message' => 'Se agrego categoria']);
            //  } 
            array_push($this->intereses, $id);
        }        

    }
    public function buscarDB($idCateg){
        return count(CategoriaPersona::where('categoria_id',$idCateg)
        ->where('persona_id', Auth::user()->idalum)->get());
    }
}
