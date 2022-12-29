<?php

namespace App\Http\Livewire;

use App\Models\DiplomadoSemana;
use App\Models\DiplomadoTarea;
use App\Models\DiplomadoVivo;
use Livewire\Component;

class DiplomadoGrupo extends Component
{
    public $id_grupo;
    public $id_dipl;

    // TODO SOBRE SEMANAS
    public $semanas;
    public $estado;
    public $modalWeek = false;
    public $week, $dateS, $dateE;

    // TODO SOBRE TAREAS
    public $selectHomeWork;
    public $modalHomeWork = false;
    public $homeWork,$instruccion, $point, $file, $status, 
    $type = 'Practica', $val_proy, $val_prac, $fechaEnd;
    
    /* for homework and liveClass */
    public $estadoHomeWork = false;
    public $btn_txt = false; 
    public $selectWeek; 

    // TODO SOBRE LIVE CLASSES
    public $selectLiveClass;
    public $modalLiveClass= false;
    public $urlZoom, $urlMaterial, $nameLive;
    

    protected $listeners = ['destroyWeek','destroyHomeWork','destroyLiveClass'];
    public function render()
    {
        $this-> listarDatos();
        return view('livewire.diplomado-grupo');
    }
    public function listarDatos(){
        $this-> semanas = DiplomadoSemana::where('idiplomado',$this->id_grupo)->get();
    }
    public function modalStatus($status){
        $this->modalWeek = $status;
    }
    public function statusHomeWork($status,$type,$id){
        $this-> modalHomeWork = $status;
        $this-> estadoHomeWork = $type;
        $this-> selectWeek = $id;
        $this-> btn_txt = $type ? 'Editar' : 'Guardar';
        $this-> valuesHomeWork($type); 
    }
    public function statusLiveClass($status,$type,$id){
        $this-> modalLiveClass = $status;
        $this-> estadoHomeWork = $type;
        $this-> selectWeek = $id;
        $this-> btn_txt = $type ? 'Editar' : 'Guardar';
        $this-> valuesLiveClass($type); 
    }
    public function createWeek(){/* validate */
        if($this->week != '' && $this->week > 0){
            if($this->dateS != '' && $this->dateE != ''){
                DiplomadoSemana::create([
                    'semana' => $this->week,
                    'fecha_inicio' => $this->dateS,
                    'fecha_fin' => $this->dateE,
                    'idiplomado' => $this->id_dipl,
                ]);
            }else $this->dispatchBrowserEvent('reject', ['message' => 'Falta fechas de la semana']); 
        }else $this->dispatchBrowserEvent('reject', ['message' => 'Digite un número de semana correcto']);
        $this->week = '';        
        $this->dateS = '';
        $this->dateE = '';
    }
    public function createHomeWork(){/* validate */
        $datos = [
            'tarea' => $this-> homeWork,
            'instruccion' => $this-> instruccion,
            'puntuacion' => $this-> point,
            'archivo' => $this-> file,
            'tipo' => $this-> type,
            'fecha_entrega' => $this-> fechaEnd,
        ];
        if($this->estadoHomeWork){
            $this->selectHomeWork->update($datos);
            $this->modalHomeWork = false;
        }else{
            $datos = array_merge( ['id_diplo_sem' => $this-> selectWeek], $datos);
            DiplomadoTarea::create($datos);
        }
        $this-> resetInpWork();
        
    }
    public function createLiveClass(){/* validate */
        $datos = [
            'nombre' => $this-> nameLive,
            'url' => $this-> urlZoom,
            'urlmaterial' => $this-> urlMaterial,
        ];
        if($this->estadoHomeWork){
            $this->selectLiveClass->update($datos);
            $this->modalLiveClass = false;
        }else{
            $datos = array_merge( ['idsemana' => $this-> selectWeek], $datos);
            DiplomadoVivo::create($datos);
        }
        $this-> resetInpLive();
        
    }
    public function destroyWeek(DiplomadoSemana $id){
        $id-> delete();
        // if()$this->dispatchBrowserEvent('resolve', ['message' => 'Eliminadosss']);
        // else $this->dispatchBrowserEvent('reject', ['message' => 'No se pudo eliminar']);
    }
    public function destroyHomeWork(DiplomadoTarea $id){
        $id-> delete();
    }
    public function destroyLiveClass(DiplomadoVivo $id){
        $id-> delete();
    }
    public function valuesHomeWork($type){
        if($type){
            $this-> selectHomeWork = DiplomadoTarea::find($type);
           $this-> homeWork = $this-> selectHomeWork->tarea;
           $this-> instruccion = $this-> selectHomeWork->instruccion;
           $this-> point = $this-> selectHomeWork->puntuacion;
           $this-> file = $this-> selectHomeWork->archivo;
           $this-> fechaEnd = $this-> selectHomeWork->fecha_entrega->format('Y-m-d\TH:i');
           $this-> type = $this-> selectHomeWork->tipo;
        }else{
            $this-> resetInpWork();
        }
    }
    public function valuesLiveClass($type){
        if($type){           
            $this-> selectLiveClass = DiplomadoVivo::find($type);
            $this-> nameLive = $this-> selectLiveClass->nombre;
            $this-> urlZoom = $this-> selectLiveClass->url;
            $this-> urlMaterial = $this-> selectLiveClass->urlmaterial;
        }else{
            $this-> resetInpLive();
        }
    }
    public function resetInpWork(){
        $this->homeWork = '';
        $this->instruccion = '';
        $this->point = '';
        $this->file = '';
        $this->type = 'Practica';
        $this->fechaEnd = '';
    }
    public function resetInpLive(){
        $this->nameLive = '';
        $this->urlZoom = '';
        $this->urlMaterial = '';
    }
}
