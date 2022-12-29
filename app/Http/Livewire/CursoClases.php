<?php
namespace App\Http\Livewire;
use App\Models\CursoAsignacion; 
use App\Models\CursoContProblema;
use App\Models\CursoInscripcion;
use Illuminate\Support\Facades\Auth;
use App\Models\CursoMaterial;
use App\Models\HistorialVedeo;
use App\Models\TareaEntrega;
use Livewire\Component;
use Carbon\Carbon; 
use Livewire\WithFileUploads;

class CursoClases extends Component
{
  use WithFileUploads;
  public $plan=false; //show if have active course with 'fecha_fin'
  public $user; 
  public $id_post;
  public $inscripcion;
  public $answers = [];
  public $files = false; 
  public $filesaaa = [];
  public $droppps = false; 
  public $coments = [];
  public $home_works;
  public $archivos;
  public $clase, $current, $current_video=false, $cant_rec =0, $canti =0;
  public $inscrito;
  public $url_yout;
  public $material_id_first;
  public $material; 
  public $modulos;
  public $curs_asign;
  public $inp_img; 
  public $first=0;
  public $modal_probl = false;
  public $inp_prob;
  public $contenido;
  protected $rules = [
    'files' => [
        'required',
        'mimes:jpg,png,jpeg',
        'max:4096',
    ],
  ];

  protected $listeners = ['showLastVideo',
    'removeHomeWork','saveHomeWork','saveFiles','showVideo'];
  public function mount(CursoAsignacion $asig_id ,CursoMaterial $mat_id){
    // $this->modal_probl = false;
    $this->user = Auth::user();
    if($this->user){//validate if be session user
      $this->curs_asign= $asig_id;  
      $this->inscripcion = CursoInscripcion::where('asignados_idasig',$this->curs_asign->idasig)
        ->where('idalum',$this->user->idalum)->first();
      if($this->inscripcion){// validate course inscription
        if ($this->inscripcion->fecha_fin > Carbon::now()) {
          $this->plan = true;
          $this->material = $mat_id;
          
          $this->home_works = $this->curs_asign->curso_tareas;
          $this->archivos = $this->curs_asign->cursoMateriales;
          $this->modulos = $asig_id->cursoModulos; 
          $this->showLastVideo();
        }
      } else return redirect()->route('inicio');
    }else return redirect()->route('acceso');
  } 
  public function render(){
    $this->porcentaje_avance = percentageCourse($this->curs_asign->idasig, $this->user->idalum);
    
    return view('livewire.curso-clases')->extends('layout')
      ->section('content');    
  }
  
  public function showLastVideo(){
    foreach ($this->modulos as $modulo) {
      foreach ($modulo->cursoMateriales as $material) {
        $this->canti++;
        if ($material->ultimoVideo($material->idmaterial)) {
          $this->cant_rec++;
          $this->current_video = $material->url4;
          $this->url_yout = $material->url;
          $this->material_id_first= $material->idmaterial;
        } else {
          if($this->canti == 1){
            $this->first= 1;
            $this->current_video = $material->url4;
            $this->url_yout = $material->url;
            $this->material_id_first= $material->idmaterial;
          }
          break 2;//sale del for for
        }
        $this->contenido = $material->material ;
      }
    }    
    if($this->canti == 1){
      HistorialVedeo::create([
        'idinscripcion' => $this->inscripcion->idinsc,
        'idmaterial' => $this->material_id_first,
        'fecha' => Carbon::now(),
        'iduser' => $this->user->idalum,
        'idasig' => $this->curs_asign->idasig,
      ]);
    }else{
      HistorialVedeo::updateOrInsert(
        ['idinscripcion' => $this->inscripcion->idinsc,
        'idmaterial' => $this->material_id_first,        
        'iduser' => $this->user->idalum,
        'idasig' => $this->curs_asign->idasig],
        ['fecha' => Carbon::now()]
      );
    }
    $this->dispatchBrowserEvent('current',['current' => $this->material_id_first, 
                                            'video' => $this->current_video,
                                            'url_yout' => $this->url_yout]);
        
  }
  public function showVideo($id){
    $this->canti = 0;
    $this->first = 0;
    $this->cant_rec = 0;
    $status = false;
    foreach ($this->modulos as $modulo) {
      foreach ($modulo->cursoMateriales as $material) {
        $this->cant_rec++;
        $this->canti++;
        $this->current_video = $material->url4;
        $this->url_yout = $material->url;
        $this->material_id_first= $material->idmaterial;
        if ($this->canti == $id) {
          $this->contenido = $material->material ;
          $status = true;
          break 2;
        }
      }
    } 
    if($status){
      HistorialVedeo::updateOrInsert(
        ['idinscripcion' => $this->inscripcion->idinsc,
        'idmaterial' => $this->material_id_first,        
        'iduser' => $this->user->idalum,
        'idasig' => $this->curs_asign->idasig],
        ['fecha' => Carbon::now()]
      );
    }
    $this->dispatchBrowserEvent('current',['current' => $this->material_id_first, 
                                            'video' => $this->current_video,
                                            'url_yout' => $this->url_yout]);
  }
  
  
  public function reportProblem(){
    CursoContProblema::create([
      'curs_mater_id' => $this->material_id_first, 
      'problema' => $this->inp_prob, 
      'fecha' => Carbon::now(), 
      'alumno_id' => $this->user->idalum, 
    ]);
    $this->reset(['modal_probl', 'inp_prob']);
  }  
  public function removeHomeWork($id_entrega){
    TareaEntrega::find($id_entrega)->delete();
    // $this->home_works = $this->curs_asign->curso_tareas;
    $this->home_works = CursoAsignacion::find($this->curs_asign->idasig)->curso_tareas;
  }
  public function saveHomeWork($file,$id_tarea, $type="URL"){
    TareaEntrega::create([
      'estado' => 1,
      'idtarea' => $id_tarea,
      'archivo' => $file,
      'idalumno' => $this->user->idalum,
      'idins' => $this->inscripcion->idinsc,
      'nota' => NULL,
      'typefile' => $type,
    ]);
    $this->home_works = CursoAsignacion::find($this->curs_asign->idasig)->curso_tareas;
  }
  public function saveFiles($id_entrega){
    foreach ($this->filesaaa as $file) {
      $arch = $this->user->user.'_'.$file->getClientOriginalName();
      $file->storeAs('files/curso-grabado/tarea/',$arch,'public_uploads');
      TareaEntrega::create([
        'estado' => 1,
        'idtarea' => $id_entrega,
        'archivo' => $arch,
        'idalumno' => $this->user->idalum,
        'idins' => $this->inscripcion->idinsc,
        'nota' => NULL,
        'typefile' => $file->getclientOriginalExtension(),
      ]);
    }
    $this->home_works = CursoAsignacion::find($this->curs_asign->idasig)->curso_tareas;
    $this->dispatchBrowserEvent('resolve',['message' => 'saved']);
    $this->reset('filesaaa');
  }
  public function export($path){
    return response()->download('files/curso-grabado/tarea/'.$path);
  }
  
  
}

