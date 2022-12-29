<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Curso;
use App\Models\CursoInscripcion;
use App\Models\PlanesAlumno;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class AlumnoAddInscripcion extends Component
{
    use WithPagination;
    public $gmailUser ='';
    public $search_course ='';
    public $nmr_transac;
    public $type_pay;
    public $mont_pay;
    public $fecha_fin;
    public $users = []; /* los usuarios encontrados con el email */
    public $tipoPlan = 2;
    public $categorys;
    public $courses;
    public $allSelected =false;
    public $event = [];
    public $user_esc = false; 

    public function mount(){
        // if(Auth::user()->tipo !== 2) redirect()->route('inicio');
    }

    public function render(){     
        if ($this->tipoPlan == 2 || $this->tipoPlan == 3){
            // $this->listsCoursesCategory(); 
            $this->categorys = Categoria::where('estado',1)->get();
            return view('livewire.alumno-add-inscripcion')->extends('layout');
        }elseif($this->tipoPlan == 1 ) {
            if ($this->search_course == '') {
                $cursos = Curso::where('estado',1)->paginate() ;
            } else {
                $cursos = Curso::where('estado',1)->where('nom','LIKE','%'.$this->search_course.'%')->paginate() ;
            }
            
            return view('livewire.alumno-add-inscripcion',['coursess' => $cursos])->extends('layout');
        }
        elseif($this->tipoPlan == 4 ) {
            $this->courses = Curso::where('estado',1)->get();
            return view('livewire.alumno-add-inscripcion')->extends('layout'); 
        }
    }    

    public function searchEmail(){
        if ($this->gmailUser != '' ) {
            $this->users = User::select('idalum','nombres','apellidos','email')
                ->where('email', 'LIKE','%'.$this->gmailUser.'%')->get();
        }else $this->users = [];        
    }
    public function agregarUser($id){ 
        $this->user_esc = User::find($id);
        $this->gmailUser = $this->user_esc->email;
        $this->users = [];
    }
    public function listsCoursesCategory(){
        if ($this->tipoPlan == 2 || $this->tipoPlan == 3) $this->categorys = Categoria::where('estado',1)->get();
    }
    public function allSelect($estado=0){
        $this->allSelected =  $estado;
    }
    public function cambio(){
        // if ($this->tipoPlan == 1) $this->courses = Curso::where('estado',1)->paginate();
        if($this->tipoPlan == 4) $this->courses = Curso::where('estado',1)->get();
        $this->event = [];
        $this->fecha_fin = '';

    }
    public function verifInscripcion(){
        if($this->user_esc){            
            if($this->nmr_transac != ''){                
                if($this->type_pay != ''){                    
                    if($this->mont_pay != ''){
                        if(count($this->event) >0 || $this->tipoPlan == 4){
                            // foreach ($this->userEscogidosPrivate as $userId) {
                                $this->saveInscripcion($this->user_esc->idalum);
                            // }
                        }else $this->dispatchBrowserEvent('reject', ['message' => 'Falta escoger los cursos']); 
                    }else $this->dispatchBrowserEvent('reject', ['message' => 'Falta monto de pago']);
                }else $this->dispatchBrowserEvent('reject', ['message' => 'Falta tipo de pago']); 
            }else $this->dispatchBrowserEvent('reject', ['message' => 'Falta número de transacción']); 
        } else $this->dispatchBrowserEvent('reject', ['message' => 'Escoge usuario(s)']); 
    }
    public function saveInscripcion($userId){
        if ($this->tipoPlan == 1) $this->insertarInscripc($userId);
        elseif ($this->tipoPlan == 2 || $this->tipoPlan == 3) {/* BASICO  O PROFESIONAL*/
            if($this->fecha_fin != ''){
                $sql = PlanesAlumno::where('idalumno',$userId)->first();
                foreach ($this->event as $idType) {
                    if($sql){
                        $this->updateTimesPlanInscrip($userId, $sql);
                    }else{ /* Insertar plan  */
                        $this->dispatchBrowserEvent('resolve', ['message' => 'Insertando Plan e inscripción']); 
                        $this->insertarPlan($userId, $idType);
                    }
                }
            }else $this->dispatchBrowserEvent('reject', ['message' => 'Falta fecha limite de acceso']); 
        } else{ /* PREMIUN */
            if($this->fecha_fin != ''){
                $sql = PlanesAlumno::where('idalumno',$userId)->first();
                if($sql) $this->updateTimesPlanInscrip($userId, $sql);
                else $this->insertarPlan($userId);
            }else $this->dispatchBrowserEvent('reject', ['message' => 'Falta fechas de premiun']);
        }        
    }
    public function updateTimesPlanInscrip($user, $sql){
        $this->dispatchBrowserEvent('resolve', ['message' => 'Ya tiene el plan, estamos editando fechas']); 
        if($sql->fecha_fin > now()){ /* Se le aumenta los dias restantes a su plan */
            $dias = now()->diffInDays($sql->fecha_fin);
            $sql->update([
                'servicio' => $this->tipoPlan == 2 ? 'Básico' : ($this->tipoPlan == 3 ? 'Profesional' :'Premium'),
                'idplan' => $this->tipoPlan == 2 ? 1 : ($this->tipoPlan == 3 ? 3 : ($this->tipoPlan == 4 ? 2 : 'NULL') ),
                'fecha_inicio' => now(),
                'fecha_pago' => now(),
                'fecha_fin' => date("Y-m-d H:i:s" ,strtotime($this->fecha_fin."+ ".$dias." days")),
                'nro_trans' => $this->nmr_transac,
                'monto' => $this->mont_pay,
                'tipo_pago' => $this->type_pay,
            ]);
            CursoInscripcion::where('idpremium', $sql->idpremium)->update([
                'fecha_inicio' => now(),
                'nmr_trans'=>$this->nmr_transac,
                'fecha_fin' => date("Y-m-d H:i:s" ,strtotime($this->fecha_fin."+ ".$dias." days")),
                'fecha' => now(),
                'tipo_pago'=>$this->type_pay,
                'tipo'=>$this->tipoPlan == 2 ? 'Básico' :($this->tipoPlan == 3 ? 'Profesional' : ($this->tipoPlan == 4 ? 'Premium' : 'Unidad') ),
                'servicio'=>$this->tipoPlan == 2 ? 'Básico' :($this->tipoPlan == 3 ? 'Profesional' : ($this->tipoPlan == 4 ? 'Premium' : 'Unidad') ),
            ]);
        }else{
            $sql->update([
                'servicio' => $this->tipoPlan == 2 ? 'Básico' : ($this->tipoPlan == 3 ? 'Profesional' :'Premium'),
                'idplan' => $this->tipoPlan == 2 ? 1 : ($this->tipoPlan == 3 ? 3 : ($this->tipoPlan == 4 ? 2 : 'NULL') ),
                'fecha_inicio' => now(),
                'fecha_fin' => $this->fecha_fin,
                'nro_trans' => $this->nmr_transac,
                'monto' => $this->mont_pay,
                'tipo_pago' => $this->type_pay,
            ]);
            CursoInscripcion::where('idpremium', $sql->idpremium)->update([
                'fecha_inicio' => now(),
                'nmr_trans'=>$this->nmr_transac,
                'fecha_fin' => $this->fecha_fin,
                'fecha' => now(),
                'tipo_pago'=>$this->type_pay,
                'tipo'=>$this->tipoPlan == 2 ? 'Básico' :($this->tipoPlan == 3 ? 'Profesional' : ($this->tipoPlan == 4 ? 'Premium' : 'Unidad') ),
                'servicio'=>$this->tipoPlan == 2 ? 'Básico' :($this->tipoPlan == 3 ? 'Profesional' : ($this->tipoPlan == 4 ? 'Premium' : 'Unidad') ),
            ]);
        }
        $this->insertarInscripc($user, '', $sql);
        $this->resetInputs();
    }
    public function resetInputs(){
        $this->reset(['event','fecha_fin','gmailUser','nmr_transac','type_pay','mont_pay','tipoPlan','user_esc']);
    }
    public function insertarPlan($userId,$idType=''){
        $insertPlanBasico = PlanesAlumno::create([
            'idalumno' => $userId,
            'idcategoria' => $this->tipoPlan == 4 ? NULL : $idType,
            'idplan' => $this->tipoPlan == 2 ? 1 : ($this->tipoPlan == 3 ? 3 : ($this->tipoPlan == 4 ? 2 : 'NULL') ),
            'fecha_inicio' => now(),
            'fecha_fin' => $this->fecha_fin,
            'fecha_pago' => now(),
            'nro_trans' => $this->nmr_transac,
            'monto' => $this->mont_pay,
            'servicio' => $this->tipoPlan == 2 ? 'Básico' : ($this->tipoPlan == 3 ? 'Profesional' :'Premium'),
            'tipo_pago' => $this->type_pay,
            'estado' => 1,
            'fecha_retencion' => '',
            'situacion' => 'Corriendo',
        ]);
        $this->insertarInscripc($userId, $idType,$insertPlanBasico);
    }
    public function insertarInscripc($userId, $idType='',$insertPlanBasico=NULL){
        $sql = $this->tipoPlan == 4 ? Curso::where('estado',1)->get() : ($this->tipoPlan == 1 ? $this->event : Curso::where('idc',$idType)->where('estado',1)->get());
        foreach ($sql as $curso) {            
            $idCon = $this->tipoPlan == 1 ? $curso : $curso->cursoAsignacion->idasig;
            $inscripcion = CursoInscripcion::where('idalum',$userId)->where('asignados_idasig', $idCon)->first();
            if(!$inscripcion) {/* validar que no tenga ese curso */
                CursoInscripcion::create([
                    'nmr_trans'=>$this->nmr_transac,
                    'estado'=>1,
                    'idalum'=>$userId,
                    'asignados_idasig'=> $idCon,
                    'tipo_pago'=>$this->type_pay,
                    'monto'=>$this->tipoPlan != 1 ? 0 : $this->mont_pay/count($this->event),
                    'fecha'=>now(),
                    'tipo'=>$this->tipoPlan == 2 ? 'Básico' :($this->tipoPlan == 3 ? 'Profesional' : ($this->tipoPlan == 4 ? 'Premium' : 'Unidad') ),
                    'servicio'=>$this->tipoPlan == 2 ? 'Básico' :($this->tipoPlan == 3 ? 'Profesional' : ($this->tipoPlan == 4 ? 'Premium' : 'Unidad') ),
                    'idpremium'=>$this->tipoPlan != 1 ? $insertPlanBasico->idpremium : $insertPlanBasico,
                    'fecha_inicio' => $this->tipoPlan == 1 ? NULL : now(),
                    'fecha_fin' => $this->tipoPlan == 1 ? NULL : $this->fecha_fin,
                ]);
                // $this->dispatchBrowserEvent('reject', ['message' => 'Inscrito '.$idCon]);
            }
            else {
                if ($inscripcion->fecha_fin !== NULL) {
                    $inscripcion->update([
                        'nmr_trans'=>$this->nmr_transac,
                        'fecha' => now(),
                        'monto'=> 0,
                        'tipo_pago'=>$this->type_pay,
                        'tipo'=>$this->tipoPlan == 2 ? 'Básico' :($this->tipoPlan == 3 ? 'Profesional' : ($this->tipoPlan == 4 ? 'Premium' : 'Unidad') ),
                        'servicio'=>$this->tipoPlan == 2 ? 'Básico' :($this->tipoPlan == 3 ? 'Profesional' : ($this->tipoPlan == 4 ? 'Premium' : 'Unidad') ),
                        'idpremium'=> $this->tipoPlan != 1 ? $insertPlanBasico->idpremium : $insertPlanBasico,
                        'fecha_inicio' => $this->tipoPlan == 1 ? NULL : now(),
                        'fecha_fin' => $this->tipoPlan == 1 ? NULL : $this->fecha_fin,
                    ]);
                    $this->dispatchBrowserEvent('reject', ['message' => 'Fecha Modificado']);
                } else $this->dispatchBrowserEvent('reject', ['message' => 'Ya cuenta con este curso']);                                  
            }                 
        } 
        $this->resetInputs();
    }
}
