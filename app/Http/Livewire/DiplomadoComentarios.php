<?php

namespace App\Http\Livewire;

use App\Models\DiplomadoComentario;
use App\Models\DiplomadoGrupo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DiplomadoComentarios extends Component
{
    public $id_grupo;
    public $inp_comentario;
    public $comentarios;
    public function render(){
        $this->comentarios = DiplomadoComentario::where('iddiplomado',$this->id_grupo)->get();
        return view('livewire.diplomado-comentarios');
    }
    
    public function diploComent(){
        $this->inp_comentario = trim($this->inp_comentario);
        if(!empty($this->inp_comentario)){
            DiplomadoComentario::create([
                'comentario' => $this->inp_comentario,
                'estado' => 1,
                'iddiplomado' => $this->id_grupo,
                'iduser' => Auth::user()->idalum,
            ]);
            $this->inp_comentario = '';
            $this->dispatchBrowserEvent('resolve',['message' => 'Publicado']);
        }else $this->dispatchBrowserEvent('reject',['message' => 'Comentario vacio']);
    }
}
