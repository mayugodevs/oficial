<?php

namespace App\Http\Livewire;

use App\Models\Diplomado;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DiplomadoAdquirido extends Component
{   public $diplomado_id;
    public  $estado_fecha;
    public $diplomado_adquirido;
    public function render()
    {   
        $this->diplomado_adquirido =Diplomado::where('iddiplomado', '=',$this->diplomado_id)->get();
        foreach ($this->diplomado_adquirido as $key => $value) {
            if ($value->fecha_termino>= Carbon::now()) {
              $this->estado_fecha=1;
            } else {
               $this->estado_fecha=0;
            }
        }
        return view('livewire.diplomado-adquirido');
    }
}
