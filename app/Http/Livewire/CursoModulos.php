<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class CursoModulos extends Component
{   
    public $id_contenido;
    public function render()
    {
        $modulos = DB::table('modulos')->where('idc','=',$this->id_contenido)->get();
        return view('livewire.curso-modulos',compact('modulos'));
    }
}
 