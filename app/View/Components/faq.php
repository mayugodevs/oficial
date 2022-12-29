<?php

namespace App\View\Components;

use App\Models\PreguntaFrecuente;
use Illuminate\View\Component;

class faq extends Component
{
    // tipo 1 => grabado, 2 => cursos_live, 3=> live , 4 => diplomado
    public $tipo;
    public $codigo;
    public $faqs = [];
    public function __construct($tipo, $id)
    { 
        $this->tipo = $tipo;
        $this->codigo = $id;
    }
    public function render()
    {
        $this->faqs = PreguntaFrecuente::where('tipo_servic_id', $this->codigo)->get();
        return view('components.faq');
    }
}
