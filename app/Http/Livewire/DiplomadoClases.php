<?php

namespace App\Http\Livewire;

use App\Models\DiplomadoSemana;
use Carbon\Carbon;
use Livewire\Component;

class DiplomadoClases extends Component
{
    public $id_grupo;
    public $inp_comentario;
    public $semanas;
    public $today;
    public $todays;
    public function render(){
        $this->today = Carbon::now()->format('Y-m-d');
        // $this->todays = Carbon::now()->addDay(7)->format('Y-m-d');
        $this->semanas = DiplomadoSemana::where('idiplomado',$this->id_grupo)->get();
        return view('livewire.diplomado-clases');
    }
}
