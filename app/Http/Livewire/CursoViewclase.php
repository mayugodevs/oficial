<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CursoAsignacion;
use App\Models\CursoContPregCom;
use App\Models\CursoContPregComResp;
use App\Models\CursoInscripcion;
use Illuminate\Support\Facades\Auth;
use App\Models\CursoMaterial;
use Carbon\Carbon;
use Livewire\WithFileUploads;


class CursoViewclase extends Component
{
   
  use WithFileUploads;
  public $files = [];
  public $imagenes = [];
  public $comentarios = [];
  public $clase, $current;
  public $inscrito;

  protected $listeners = ['createPost'];
  public function mount(CursoAsignacion $clase)
  {
    // $this->montar($clase);
    $this->clase = $clase;

    foreach ($clase->cursoMateriales as $material) {
      if (!$material->completed) {
        $this->current = $material;
        break;
      }
    }
    if (!$this->current) {
      $this->current = $clase->cursoMateriales->last();
    }
  }
  public function render()
  {
    return view('livewire.curso-viewclase')->extends('layout')
    ->section('content');    
  }
  public function montar($clase){
    $this->clase = $clase;
  }
  public function createPost($texto){
    $this->validate([
      'files.*' => [
          'required',
          'mimes:jpg,png,jpeg',
          'max:4096',
      ],
    ]);
    if (count($this->files) <=2) {
      CursoContPregCom::create([
        'comentario' => $texto,
        // 'fecha' => $this->,
        'idmaterial' => $this->current->idmaterial,
        'idcliente' => Auth::user()->idalum,
      ]);
      $this->montar($this->clase);
      $this->dispatchBrowserEvent('resolve',['message' => 'Comentado...']);

  } else {
      $this->files = [];      
      $this->dispatchBrowserEvent('reject',['message' => 'Maximo dos imagenes']);
  }
  }
  //Metodo
  public function completed()
  {
    if ($this->current->completed) {
      //eliminar registro
      //$this->current->user_video()->detach(auth()->user()->idalum);
  
    } else {
      //agregar registro
      $inscrito = CursoInscripcion::where('idalum', '=', Auth::user()->idalum)
        ->where('asignados_idasig', '=', $this->clase->idasig)->limit(1)->get();
      foreach ($inscrito as $key) {
        $xd = $key->idinsc;
      }
      $this->current->user_video()->attach(auth()->user()->idalum, array('idinscripcion' => $xd, 'idasig' => $this->clase->idasig, 'fecha' => Carbon::now()));
    }
    $this->current = CursoMaterial::find($this->current->idmaterial);
    $this->clase = CursoAsignacion::find($this->clase->idasig);
  }
  
  //propiedades computadas
  public function changematerial(CursoMaterial $material)
  {
    $this->current = $material;
  }

  public function getIndexProperty()
  {
    return $this->clase->cursoMateriales->pluck('idmaterial')->search($this->current->idmaterial);
  }
  public function getPreviousProperty()
  {
    if ($this->index == 0) {
      return null;
    } else {
      return $this->clase->cursoMateriales[$this->index - 1];
    }
  }
  public function getNextProperty()
  {
    if ($this->index == $this->clase->cursoMateriales->count() - 1) {
      return null;
    } else {
      return $this->clase->cursoMateriales[$this->index + 1];
    }
  }
  public function getAdvanceProperty()
  {
    $i = 0;
    foreach ($this->clase->cursoMateriales as $material) {
      if ($material->completed) {
        $i++;
      }
    }

    $advance = ($i * 100) / ($this->clase->cursoMateriales->count());
    return round($advance);
  }
}
