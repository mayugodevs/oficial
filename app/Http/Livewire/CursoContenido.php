<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class CursoContenido extends Component
{
    public $id_curso;
    public function render(){
        $contenidos = DB::table('asignados')
        ->join('contenido','contenido.idasig','=','asignados.idasig')
        ->where('curso_idcur','=',$this->id_curso)
        ->get();
        return view('livewire.curso-contenido',compact('contenidos'));
    }
}
