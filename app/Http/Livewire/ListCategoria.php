<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Curso;
use Livewire\Component;

class ListCategoria extends Component
{
    public $categorias;
    public $categoria_id;
    public $courses = []; 
    protected $listeners = ['openCourse'];
    public function mount(){
        $this->categorias =  Categoria::select('idc','nombre','precio','slug','img')->get();
        $this->courses = Curso::select('nom', 'slug', 'img', 'idc')->where('estado',1)->get();
    }

    public function openCourse($categoria_id){
        // $this->reset(['courses']);
        $this->categoria_id = $categoria_id;
        $this->courses = Categoria::find($categoria_id)->cursos;
    }
    public function render()
    {
        return view('livewire.list-categoria');
    }
}
