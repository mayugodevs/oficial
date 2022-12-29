<?php

namespace App\View\Components;

use App\Models\Categoria;
use App\Models\Curso;
use Illuminate\View\Component;

class ListaCategoria extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $categorias;
    public $tipo;
    public $courses = [];
    public function __construct($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->categorias =  Categoria::select('idc','nombre','precio','slug','img')->get();
        if($this->tipo == 'menu'){
            $this->courses = Curso::select('nom', 'slug', 'img', 'idc')->where('estado',1)->get();
        }        
        return view('components.lista-categoria');
    }
}
