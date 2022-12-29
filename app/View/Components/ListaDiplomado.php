<?php

namespace App\View\Components;

use App\Models\DiplomadoGrupo;
use Illuminate\View\Component;

class ListaDiplomado extends Component
{
    public $diplomado = [];
    public $vivo = [];
    public $taller = [];
    public function __construct()
    {
        //
    }

    public function render()
    {
        foreach (DiplomadoGrupo::where('estado',1)->get() as $diplomado) {
            if($diplomado->tipo_producto == 'Vivo') array_push($this->vivo,$diplomado);
            elseif($diplomado->tipo_producto == 'Diplomado') array_push($this->diplomado,$diplomado);
            else array_push($this->taller,$diplomado);
        }
        return view('components.lista-diplomado');
    }
}
