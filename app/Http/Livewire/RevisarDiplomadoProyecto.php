<?php

namespace App\Http\Livewire;

use App\Models\DiplProyEntr;
use Livewire\Component;
use Livewire\WithPagination;

class RevisarDiplomadoProyecto extends Component
{
    use WithPagination;
    public $entregas = [];
    public $search = '';

    protected $listeners = ['save_feedback_proy','save_nota_pr'];

    public function show_entrega($tarea_id, $pay_id){
        $this->entregas = [];
        $this->entregas = DiplProyEntr::where('dipl_proy_id',$tarea_id)->where('dipl_pag_id',$pay_id)->get();
    }
    public function save_feedback_proy($message, $entrga_id){
        DiplProyEntr::find($entrga_id)->update([
            'feedback' => $message,
        ]);
        $this->dispatchBrowserEvent('resolve', ['message' => 'Feedback enviado']);
    }
    public function save_nota_pr($nota, $tarea_id, $pay_id){
        // aqui me quede
        foreach (DiplProyEntr::where('dipl_proy_id', $tarea_id)->where('dipl_pag_id', $pay_id)->get() as $entrega) {
            $entrega->update([
                'nota' => $nota,
            ]);
        }
        $this->dispatchBrowserEvent('resolve', ['message' => 'Feedback enviado']);
    }
    public function export($path){
        return response()->download('files/curso-grabado/tarea/'.$path);
      }
    public function render()
    {
        if ($this->search != '') { 
            $tareas = DiplProyEntr::join('diplomado_pagos', 'diplomado_proyecto_entrega.dipl_pag_id', '=', 'diplomado_pagos.idpay')
            ->join('user_web', 'diplomado_pagos.alumno_id', '=', 'user_web.idalum')
            ->where('diplomado_proyecto_entrega.cant',1)
            ->where('diplomado_proyecto_entrega.estado',0)
            ->where('user_web.email','LIKE','%'.$this->search.'%')->paginate(5);
        } else $tareas = DiplProyEntr::where('cant',1)->where('estado',0)->paginate(5);
        
        return view('livewire.revisar-diplomado-proyecto',[
            'tareas' => $tareas,
        ]);
    }
}
