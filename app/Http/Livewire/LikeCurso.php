<?php

namespace App\Http\Livewire;

use App\Models\CursoLike;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LikeCurso extends Component
{
    public $idAsig;
    public $cant = 0;
    public $like = false;
    public $style = 'text-green';
    public $user =false;
    public function mount(){
        $this->contLikes();
        $this->sumLikes();
    }
    public function render()
    {
        return view('livewire.like-curso');
    }
    public function sumLikes(){
        $this->cant = count(CursoLike::where('curso_asig_id',$this->idAsig)->get());
    }
    public function contLikes(){
        if (Auth::user()) {
            $this->user =true;
            $this->like = count(CursoLike::where('curso_asig_id',$this->idAsig)->where('user_id',Auth::user()->idalum)->get())>0 ? true : false;
        }else $this->like = false;
        $this->style = $this->like ? 'text-red-800' : 'text-green';    
    }
    public function btnLike(){
        if($this->like){/* REMOVE LIKE */
            CursoLike::where('curso_asig_id',$this->idAsig)->where('user_id',Auth::user()->idalum)->delete();
        }else{ /* ADD LIKE */
            CursoLike::create([
                'curso_asig_id' => $this->idAsig,
                'user_id' => Auth::user()->idalum,
            ]);
        }
        $this->like = !$this->like;
        $this->style = $this->like ? 'text-red-800' : 'text-green';
        $this->sumLikes();
        // $this->emitTo('mi-perfil','render');
    }
}
