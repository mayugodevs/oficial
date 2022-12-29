<?php

namespace App\Http\Livewire;

use App\Models\CursoAsignacion;
use App\Models\CursoExamenPregt;
use App\Models\CursoExamenPregtOpc;
use App\Models\CursoExamenRespt;
use App\Models\CursoModulo;
use App\Models\ExamenTerminos;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ExamenTomar extends Component
{   
    public $id_asig;
    public $curso;
    public $examenExiste;
    public $user;
    public $cantPreg;
    public $respCorrect= 0;
    public $preguntass = [];
    public $idPregunta=false; /* en que id pregunta esta actualmente */
    public $idAct = 0;
    public $idP = 0;
    public $correcto = false;
    public $final = false; 
    public $fechaFin = false;
    public $fechaInicio = false;
    public $opcResp = false; 
    public $opciones = [];
    protected $listeners = ['saveResp','changeFinal'];
    public function mount($id){
        $this->user = Auth::user();
        $this->id_asig = $id;
        $this->curso = CursoAsignacion::find($id)->curso->nom;
        $this->readStatus();        
    }
    public function changeFinal(){
        $this->final = true;
        $this->examenExiste->update([
            'aprobo' => round(($this->respCorrect/$this->cantPreg)*100),
            'correctas' => $this->respCorrect,
            'total_preguntas' => $this->cantPreg,
        ]);
        return redirect()->route('examenresultado',$this->id_asig);
    }
    public function readStatus(){
        if(User::find($this->user->idalum)->cursoInscripciones->where('asignados_idasig',$this->id_asig)->where('estado',1)->first()){
            $this->examenExiste = ExamenTerminos::where('curs_asign_id',$this->id_asig)->where('alumno_id',$this->user->idalum)->first();
            if($this->examenExiste){
                $this->fechaFin = $this->examenExiste->fecha_fin;
                $this->fechaInicio = $this->examenExiste->fecha_inicio;
                if($this->examenExiste->fecha_fin < Carbon::now() )  return redirect()->route('examenresultado',$this->id_asig);
                $this->preguntas();
            }else return redirect()->route('examentermino',$this->id_asig);
            
        }else return redirect()->route('inicio');
    }
    public function preguntas(){
        foreach (CursoModulo::where('idasig',$this->id_asig)->get() as $modulos) {
            foreach ($modulos->cursoExamenPreguntas as  $pregunta) {
                array_push($this->preguntass,[
                    'idpreg' => $pregunta->idpregunta ,
                    'status' => 0,
                    'id' => $this->idAct,
                    'pregunta' => $pregunta->pregunta,
                    'instruccion' => $pregunta->instruccion ,
                    'correcto' => $pregunta->val_proyecto ,
                    'puntuacion' => $pregunta->puntuacion ,
                ]);                
                $this->idAct ++; 
            }
        }
        $this->cantPreg = count($this->preguntass);
        $this->nextQuest();
    }  
    public function saveResp($idP, $tipo=true){/* false == es el ultimo */
        CursoExamenRespt::updateOrInsert(
            ['idalumno' => $this->user->idalum,
            'idpregunta' => $this->idPregunta,],
            ['valor' => $this->opcResp ,            
            'nota' => $this->correcto == $this->opcResp ? 100 : 0 ,
            'fecha' => Carbon::now()]
        );
        $this->correcto == $this->opcResp ? $this->respCorrect +=1 : ''; 
        $this->opcResp = false;
        if (!$tipo) {
            $this->final = true;
            $this->opciones = [];
            $this->examenExiste->update([
                'aprobo' => round(($this->respCorrect/$this->cantPreg)*100),
                'correctas' => $this->respCorrect,
                'total_preguntas' => $this->cantPreg,
            ]);
            return redirect()->route('examenresultado',$this->id_asig);
        } else {
            $this->nextQuest($idP);
        }
    }
    public function kipResp($idP){   
        array_push($this->preguntass,[
            'idpreg' => $this->preguntass[$idP]['idpreg'],
            'status' => 0,
            'id' => $this->idAct+1,
            'pregunta' => $this->preguntass[$idP]['pregunta'],
            'instruccion' => $this->preguntass[$idP]['instruccion'] ,
            'correcto' => $this->preguntass[$idP]['correcto'] ,
            'puntuacion' => $this->preguntass[$idP]['puntuacion'] ,
        ]);  
        $this->idAct ++; 
        $this->idP = $idP;
        $this->idP++;
        $this->nextQuest($this->idP);
    }
    public function nextQuest($idP = 0){ 
        $this->respExist = CursoExamenRespt::where('idalumno',$this->user->idalum)->where('idpregunta',$this->preguntass[$idP]['idpreg'])->first();
        if($this->respExist){
            if($this->respExist->fecha <  $this->fechaFin && $this->respExist->fecha > $this->fechaInicio){/* ya respondio la pregunta en la hora del examen, pasar siquiente pregunta */
                $this->idP = $idP;
                $this->idP++;
                // $this->dispatchBrowserEvent('resolve',['message' => 'enviado corr']);
                $this->respExist->nota == 100 ? $this->respCorrect +=1 : ''; 
                if($this->idAct == $this->idP) {
                    $this->final = true;
                    $this->examenExiste->update([
                        'aprobo' => round(($this->respCorrect/$this->cantPreg)*100),
                        'correctas' => $this->respCorrect,
                        'total_preguntas' => $this->cantPreg,
                    ]);
                    return redirect()->route('examenresultado',$this->id_asig);
                }
                else $this->nextQuest($this->idP);                 
            }else{
                $this->opcResp = '';
                $this->opciones = [];
                $this->idP = $idP;
                $this->idPregunta = $this->preguntass[$idP]['idpreg'];
                $this->correcto = $this->preguntass[$idP]['correcto'];                
                foreach (CursoExamenPregtOpc::where('idpregunta',$this->preguntass[$idP]['idpreg'])->get() as $opcion) {
                    array_push($this->opciones,$opcion);
                }
            }
        }
        else{
            $this->opcResp = '';
            $this->opciones = [];
            $this->idP = $idP;
            $this->idPregunta = $this->preguntass[$idP]['idpreg'];
            $this->correcto = $this->preguntass[$idP]['correcto'];
            
            foreach (CursoExamenPregtOpc::where('idpregunta',$this->preguntass[$idP]['idpreg'])->get() as $opcion) {
                array_push($this->opciones,$opcion);
            }
        }
    }
    public function render(){
        return view('livewire.examen-tomar')->extends('layout');
    }
}
