<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Curso;
use App\Models\CursoAsignacion;
use App\Models\CursoInscripcion;
use App\Models\PlanesAlumno;
use App\Models\Trabajador;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class GestionAllCourses extends Component
{   
    use WithPagination;
    use WithFileUploads;
    public $search='';
    public $files;
    public $estadoModal=false;
    public $tipo = 1; /* 1 crear, 2 editar */

    public $curso;
    public $categorias;
    public $docentes;
    public $asignacion;

    public $imgCurso; 
    public $nombreCurso;
    public $slugCurso;
    public $descrCurso;
    public $idCategoria = 0;
    public $precioFinalCurso;
    public $porcentajCurso = 0;
    public $precioCurso;
    public $fechaLanzCurso;
    public $horaLanzCurso;
    public $idDocente=0;
    public $estadocurso=0;
    public $titleModal='Crear nuevo curso';
    public $btnModal='Crear nuevo curso';

    public $alumnosPremiuns;
    public $alumnosProfesionls;
    public $alumnosBasics;
    protected $listeners = ['guardarCambio'];

    public function mount(){
        if(Auth::user()->tipo !== 2) redirect()->route('inicio');
        $this->categorias =  Categoria::where('estado',1)->get();
        $this->docentes = Trabajador::get();
    }
    
    public function updatedFiles(){
        $this->dispatchBrowserEvent('modal');
    }

    public function render(){           
        return view('livewire.gestion-all-courses',[
            'cursos' => $this->filtrar(),
            
        ])->extends('layout');
    }

    public function filtrar(){
        if ($this->search != '') {
            $cursos = Curso::whereHas('categoria', function ($query) {
                $query->where('cursos.nom', 'like', "%{$this->search}%")->orwhere('categorias.nombre', 'like', "%{$this->search}%");
            })->paginate(10);            
        } else $cursos = Curso::where('estado',1)->orderBy('idcur','DESC')->paginate(10);
        return $cursos;
    } 
    public function cambioModal($id,$estado){
        $this->reset('files');
        if ($estado) {/* edit curso */
            $this->curso = Curso::find($id);
            $this->btnModal = 'Editar curso';
            $this->titleModal = 'Editar curso de '. $this->curso->nom;
            // $this->asignacion = CursoAsignacion::find($this->curso->idcur);
            $this->asignacion = $this->curso->cursoAsignacion;
            // $this->
            $this->resetInputs(1);
            $this->tipo = 2;
        } else { /* new curso */
            $this->reset(['titleModal','btnModal']);
            $this->tipo = 1;
            $this->resetInputs(0);
        }
        $this->dispatchBrowserEvent('modal');
    }

    public function guardarCambio($descrCurso, $precio_curso){

        if($this->tipo == 1){
            $this->imgCurso ='curso'.rand().'.'.$this->files->getclientOriginalExtension();
            $this->files->storeAs('images/prods/',$this->imgCurso,'public_uploads');   
            $urlImg = 'images/prods/'.$this->imgCurso;         
            $cursoCreado = Curso::create([
                'nom' => $this->nombreCurso,
                'img' => $urlImg,
                'descrip' => $descrCurso,
                'precio' => $precio_curso,
                'estado' => $this->estadocurso,
                'idc' => $this->idCategoria,
                'slug' => $this->slugCurso,
                'predsct' => $this->precioFinalCurso,
                'prom' => $this->porcentajCurso,
                'gws' => 0,
                'prom_fecha' => $this->fechaLanzCurso,
            ]);
            $cursoAsignado = CursoAsignacion::create([
                'curso_idcur' => $cursoCreado->idcur,
                'trabajadores_idtrab' => $this->idDocente,
                'fecha' => now(),
                'estado' => $this->estadocurso,
            ]);

            $this->alumnosPremiuns = PlanesAlumno::where('idplan',2)->get();
            $this->alumnosProfesionls = PlanesAlumno::where('idplan',3)->get();
            $this->alumnosBasics = PlanesAlumno::where('idplan',1)->get();
            foreach ($this->alumnosPremiuns as $alumnosPremiun) {
               CursoInscripcion::create([
                    'idalum' => $alumnosPremiun->idalumno,
                    'idpremium' => $alumnosPremiun->idpremium,
                    'tipo_pago' => $alumnosPremiun->tipo_pago,
                    'tipo' => $alumnosPremiun->servicio,
                    'nmr_trans' => $alumnosPremiun->nro_trans,
                    'estado' => 1,
                    'asignados_idasig' => $cursoAsignado->idasig,
                    'servicio' => $alumnosPremiun->servicio,
                    'monto' => 0,
                    'fecha' => $alumnosPremiun->fecha_inicio,
                    'fecha_inicio' => $alumnosPremiun->fecha_inicio,
                    'fecha_fin' => $alumnosPremiun->fecha_fin,
               ]);
            }
            foreach ($this->alumnosProfesionls as $alumnosProfesion) {
               CursoInscripcion::create([
                    'idalum' => $alumnosProfesion->idalumno,
                    'idpremium' => $alumnosProfesion->idpremium,
                    'tipo_pago' => $alumnosPremiun->tipo_pago,
                    'tipo' => $alumnosPremiun->servicio,
                    'nmr_trans' => $alumnosProfesion->nro_trans,
                    'estado' => 1,
                    'asignados_idasig' => $cursoAsignado->idasig,
                    'servicio' => $alumnosProfesion->servicio,
                    'monto' => 0,
                    'fecha' => $alumnosProfesion->fecha_inicio,
                    'fecha_inicio' => $alumnosProfesion->fecha_inicio,
                    'fecha_fin' => $alumnosProfesion->fecha_fin,
               ]);
            }
            foreach ($this->alumnosBasics as $alumnosBasic) {
               CursoInscripcion::create([
                    'idalum' => $alumnosBasic->idalumno,
                    'idpremium' => $alumnosBasic->idpremium,
                    'tipo_pago' => $alumnosPremiun->tipo_pago,
                    'tipo' => $alumnosPremiun->servicio,
                    'nmr_trans' => $alumnosBasic->nro_trans,
                    'estado' => 1,
                    'asignados_idasig' => $cursoAsignado->idasig,
                    'servicio' => $alumnosBasic->servicio,
                    'monto' => 0,
                    'fecha' => $alumnosBasic->fecha_inicio,
                    'fecha_inicio' => $alumnosBasic->fecha_inicio,
                    'fecha_fin' => $alumnosBasic->fecha_fin,
               ]);
            }
            $this->dispatchBrowserEvent('resolve', ['message' => 'Curso creado e inscripciones insertadas']);
        }elseif($this->tipo == 2){
            $urlImg = '';
            if($this->files){
                $this->imgCurso ='curso'.rand().'.'.$this->files->getclientOriginalExtension();
                $this->files->storeAs('images/prods/',$this->imgCurso,'public_uploads');   
                $urlImg = 'images/prods/'.$this->imgCurso;
            }else $urlImg = $this->imgCurso;
            $descrip_curso = $descrCurso == '' ? $this->descrCurso :  $descrCurso;
            $this->curso->update([
                'nom' => $this->nombreCurso,
                'img' => $urlImg,
                'precio' => $precio_curso,
                'descrip' => $descrip_curso,
                'estado' => $this->estadocurso,
                'idc' => $this->idCategoria,
                'slug' => $this->slugCurso,
                'predsct' => $this->precioFinalCurso,
                'prom' => $this->porcentajCurso,
                'prom_fecha' => $this->fechaLanzCurso,
            ]);
            $this->asignacion->update([
                // 'estado' => $this->estadocurso,
                'trabajadores_idtrab' => $this->idDocente,
            ]);
            $this->dispatchBrowserEvent('resolve', ['message' => 'Datos de curso editado']);
        }         
        $this->reset('files');
        $this->resetInputs(0);
        $this->estadoModal = false;
    }

    public function resetInputs($datos){
        $this->nombreCurso = $datos != 0 ? $this->curso->nom : '';
        $this->imgCurso = $datos != 0 ? $this->curso->img : '';
        $this->descrCurso = $datos != 0 ? $this->curso->descrip : '';
        $this->idCategoria = $datos != 0 ? $this->curso->idc : 0;
        $this->slugCurso = $datos != 0 ? $this->curso->slug : '';
        $this->estadocurso = $datos != 0 ? $this->curso->estado : 0;
        $this->porcentajCurso = $datos != 0 ? $this->curso->prom : 0;
        $this->precioCurso = $datos != 0 ? $this->curso->precio : '';
        $this->precioFinalCurso = $datos != 0 ? $this->curso->predsct : '';
        $this->fechaLanzCurso = $datos != 0 ? $this->curso->prom_fecha->format('Y-m-d').'T'.$this->curso->prom_fecha->format('H:i') : '';
        // $this->fechaLanzCurso = $datos != 0 ? '2021-05-09T06:12' : '';
        $this->idDocente = $datos != 0 ? $this->curso->cursoAsignacion->trabajador->idtrab : '';
    }

}
