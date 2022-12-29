<?php

namespace App\Http\Livewire;

use App\Models\CertificadoCheck;
use App\Models\CursoAsignacion;
use App\Models\CursoInscripcion;
use App\Models\CursoTareaEntrega;
use App\Models\ExamenTerminos;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use PhpParser\Node\Stmt\TryCatch;

class RevisarCursotarea extends Component
{
    use WithPagination;
    public $entregas = [];
    public $search = '';
    // public $tareas;
    protected $listeners = ['save_feedback_gr','save_nota_gra'];
    
    public function save_file($tarea_id, $user_id){
        $this->entregas = [];
        $this->entregas = CursoTareaEntrega::where('idtarea',$tarea_id)->where('idalumno',$user_id)->get();
    }
    public function save_feedback_gr($message, $entrga_id){
        CursoTareaEntrega::find($entrga_id)->update([
            'feedback' => $message,
        ]);
        $this->dispatchBrowserEvent('resolve', ['message' => 'Feedback enviado']);
    }
    public function save_nota_gra($nota, $tarea_id, $user_id){
        $entrega = CursoTareaEntrega::where('idtarea', $tarea_id)->where('idalumno', $user_id);
        $inscrip_id = $entrega->first();
        
        foreach ($entrega->get() as $entrega) {
            $entrega->update([
                'nota' => $nota,
                'estado' => 1,
            ]);
        } 
        $consulta = $this->promedio($inscrip_id->idins, $user_id);
        if($consulta[0]){
            CertificadoCheck::updateOrInsert(
                [
                    'curs_inscrip_id' => $inscrip_id->idins,
                ],
                [
                    'fecha' => Carbon::now(),
                    'estado' => 0,
                    'nota' => $consulta[1],
                ]
            );
            // LLAMAR AL LIVEWIRE
            $this->emitTo('revisar-certificados', 'render');
            $this->dispatchBrowserEvent('resolve', ['message' => 'Tiene nota aprobatoria para certificado']);
        }else $this->dispatchBrowserEvent('resolve', ['message' => 'Nota enviado']);
    }
    public function promedio($inscripcion_id, $alumno_id){

        $inscr = CursoInscripcion::find($inscripcion_id);
        $total_tareas = 0; 
        $not_proyec = 0; 
        $not_practi = 0; 
        $cont_practi = 0; 
        $cont_proyec = 0; 
        $jjj = CursoAsignacion::find($inscr->asignados_idasig);
        $examen_existe = $jjj->cursoPreguntas ? true : false;

        foreach ($jjj->curso_tareas as $tarea) {
            $total_tareas ++;
            if($tarea->verificar_entrega){
                if ($tarea->tipo == 'Proyecto') {                    
                    if ($tarea->verificar_entrega->idalumno  == $alumno_id) {
                        $not_proyec += $tarea->verificar_entrega->nota*0.6;
                        $cont_proyec ++;
                    }
                } else {
                    if ($tarea->verificar_entrega->idalumno  == $alumno_id) {
                        $not_proyec += $tarea->verificar_entrega->nota*0.4;
                        $cont_practi ++;
                    } 
                } 
            }
        }
        $nota_tareas = $not_proyec/$cont_proyec + $not_practi/$cont_practi;
        $examen = ExamenTerminos::where('alumno_id',$alumno_id)->where('curs_asign_id',$inscr->asignados_idasig)->first();

        if($total_tareas == ($cont_proyec + $cont_practi)){
            if($examen_existe){
                if($examen){
                    $nota_examen = $examen->aprobo;
                    return ($nota_tareas + $nota_examen)/2  > 61 ? [true, ($nota_tareas + $nota_examen)/2] : [false];
                }else return [false];
            }else return $nota_tareas > 61 ? [true, $nota_tareas] : [false];
        }else return [false];
        
    }
    public function export($path){
        try {
            return response()->download('files/curso-grabado/tarea/'.$path);
        } catch (\Throwable $th) { 
            $this->dispatchBrowserEvent('reject', ['message' => 'El archivo no existe, no se pudo descargar']);
        }        
    }
    public function render()
    {
        if ($this->search != '') {
            $revs = CursoTareaEntrega::whereHas('alumno', function ($query){
                $query -> where('user_web.email', 'LIKE', '%'.$this->search.'%')
                    ->where('curso_tareas_entrega.estado', 0)->where('cant',1);
            })->paginate(20);
        } else $revs = CursoTareaEntrega::where('cant',1)->where('estado',0)->paginate(20);
        
        return view('livewire.revisar-cursotarea',[
            'tareas' => $revs
        ]);
    }
}
