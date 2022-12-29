<?php

namespace App\Http\Livewire;

use App\Models\DiplomadoTareaEntrega;
use Livewire\Component;
use Livewire\WithPagination;
class RevisarDiplomadotarea extends Component
{
    use WithPagination;
    public $entregas = [];
    public $search = '';

    protected $listeners = ['save_feedback_esp','save_nota_dip'];

    public function show_entrega($tarea_id, $pay_id){
        $this->entregas = [];
        $this->entregas = DiplomadoTareaEntrega::where('dipl_tarea_id',$tarea_id)->where('dipl_pagos_id',$pay_id)->get();
    }
    public function save_feedback_esp($message, $entrga_id){
        DiplomadoTareaEntrega::find($entrga_id)->update([
            'feedback' => $message,
        ]);
        $this->dispatchBrowserEvent('resolve', ['message' => 'Feedback enviado']);
    }
    public function save_nota_dip($nota, $tarea_id, $pay_id){
        // aqui me quede
        foreach (DiplomadoTareaEntrega::where('dipl_tarea_id', $tarea_id)->where('dipl_pagos_id', $pay_id)->get() as $entrega) {
            $entrega->update([
                'nota' => $nota,
            ]);
        }
        $this->dispatchBrowserEvent('resolve', ['message' => 'Feedback enviado']);
    }
    public function render()
    {
        if ($this->search != '') { 
            $tareas = DiplomadoTareaEntrega::join('diplomado_pagos', 'diplomado_tarea_entrega.dipl_pagos_id', '=', 'diplomado_pagos.idpay')
            ->join('user_web', 'diplomado_pagos.alumno_id', '=', 'user_web.idalum')
            ->where('diplomado_tarea_entrega.cant',1)
            ->where('diplomado_tarea_entrega.estado',0)
            ->where('user_web.email','LIKE','%'.$this->search.'%')->paginate(5);
            
        } else $tareas = DiplomadoTareaEntrega::where('cant',1)->where('estado',0)->paginate(5);
        return view('livewire.revisar-diplomadotarea',[
            'tareas' => $tareas,
        ]);
    }
}
