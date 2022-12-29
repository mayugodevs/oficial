<?php

namespace App\Http\Livewire;

use App\Models\CursoAsignacion;
use App\Models\CursoExamenRespt as ModelsCursoExamenRespt;
use App\Models\ExamenHistorial;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CursoExamenRespt extends Component
{
    public $examenHistorial;
    public $idAlumn;
    public $fechaInicio;
    public $fechaFin;
    public $fechaReinicio;
    public $cant;
    public $result;
    public $cursoModulos;
    
    /* EXTERNO */
    public $mensaje='';
    public $optionResp = 0;


 
    public function mount($id)
    {
        $this -> idAlumn = Auth::user()->idalum;
        $this->examenHistorial = ExamenHistorial::where('curs_asign_id',$id)
        ->where('alumno_id',$this -> idAlumn)->get();
        $this -> cant = $this->examenHistorial->count();
        $this->cursoModulos = CursoAsignacion::find($id)->cursoModulos;
    }
    public function render()
    {
        $this->examen();
        return view('livewire.curso-examen-respt')->extends('layout');
    }

    public function examen(){
        if($this -> cant>0){  
            foreach ($this ->examenHistorial as $examDetalle) {
                $this->fechaInicio=$examDetalle->fecha_inicio;
                $this->fechaFin=$examDetalle->fecha_fin;
                $this->fechaReinicio=$examDetalle->reinicio;
            }
            $now  = Carbon::now();
            $now->toDateTimeString();
            if($now < $this->fechaFin){
                $this->result = 1; /*  'ESTA DENTRO DEL EXAMEN';*/ 
            }else{
                $this->result = $now < $this->fechaReinicio ? 1 :0;
                if($now < $this->fechaReinicio){
                    $this->result =-1;/*  'EN POCAS HORAS PODRAS TOMAR NUEVAMNETE'; */
                }else{
                    $this->result =0; /* 'MOSTRAR EL CHECK PARA ACEPTAR'; */
                }
            }
        }else{
            $this->result =0; /* 'MOSTRAR EL CHECK PARA ACEPTAR'; */
        }
        
    }

    public function darOpcion($idOpcion){
        $this->optionResp = $idOpcion;
    }

    public function guardarRespuesta($idPregunt, $valProyect){
        if($this->optionResp != 0){
            $nota = $this->optionResp == $valProyect ? 100 : 0;
            ModelsCursoExamenRespt::create([
                'valor' => $this->optionResp,
                'idalumno' => $this -> idAlumn,
                'idpregunta' => $idPregunt,
                'nota' => $nota,
            ]);
        }else{
            $this->mensaje = 'NO SELECCIONE OPCION';
        }
    }
}
