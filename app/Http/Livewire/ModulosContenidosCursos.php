<?php

namespace App\Http\Livewire;

use App\Models\CursoArchivo;
use App\Models\CursoAsignacion;
use App\Models\CursoContenido;
use App\Models\CursoExamenPregt;
use App\Models\CursoExamenPregtOpc;
use App\Models\CursoMaterial;
use App\Models\CursoModulo;
use App\Models\CursoTarea;
use Livewire\Component;

class ModulosContenidosCursos extends Component
{   
    // MODULOS CONTENIDOS
    public $idAsign;
    public $modulos;
    public $estado =0;/* 1 nuevo titulo, 2 edit titulo, 3 nuevo conten,
                         4 edit conten, 5 nuevo material, 6 edit material, 
                         7 nuevo archivo, 8 edit archivo*/
    public $modulo_actual;
    public $estado_actual = 1;
    public $titulo;
    public $tituloModal;
    public $idModulo; /* AL MOMENTO DE ABRIR MODAL DE CREAR CONTNEIDO */
    public $idMaterial; /* AL MOMENTO DE ABRIR MODAL DE CREAR ARCHIVO */
    public $modulo;
    public $contenido;
    public $material;
    public $archivo;
    public $tarea;
    public $pregunta;

    // MATERIALES   
    public $tituloMat;
    public $descrMat;
    public $urlVideoMat;
    public $urlStoraMat;

    // ARCHIVOS   
    public $tituloArch;
    public $urlArch;
    public $mater_actual;
    public $materiales = [];

    // TAREAS   
    public $tituloTar;
    public $instruccTar;
    public $puntuacionTar;
    public $tipoEvalTar;
    public $urlTar;

    // PREGUNTAS   
    public $codigoPreg;
    public $preguntPreg;
    public $puntPreg = 100;

    // ALTERNATIVAS
    public $pregMin = 3;
    public $option = 0;
    public $option_1;
    public $option_2;
    public $option_3;
    public $option_4;
    public $option_5;
    public $option_6;
    public $option_7;
    public $option_8;

    protected $listeners = ['deleteModulo','guardarCambios'];

    public function mount($id){
        $this-> idAsign = $id;
    }
    
    public function render(){   
        $this->modulosContenidos();
        return view('livewire.modulos-contenidos-cursos')
            ->extends('layout');
    }
    
    public function modulosContenidos(){
        // $estado =  $this->estado;
        $this->tituloModal = $this->estado == 1 ? 'Nuevo Modulo':  ($this->estado == 2 ? 'Editar Modulo' :  
            ($this->estado == 3 ? 'Agregar Contenido' : ($this->estado == 4 ? 'Editar Contenido' : ($this->estado == 5 ? 'Agregar Material' : 
            ($this->estado == 6 ? 'Editar Material' : ($this->estado == 7 ? 'Agregar Archivo' : ($this->estado == 8 ? 'Editar Archivo' :
            ($this->estado == 9 ?'Agregar Tarea' : ($this->estado == 10 ?'Editar Tarea' : ($this->estado == 11 ?'Agregar Pregunta' : 'Editar Pregunta'))))))))));
        $this-> modulos = CursoAsignacion::find($this->idAsign)->cursoModulos;
    } 

    public function guardarCambios($instrucion = ''){
        if($this->estado == 1){ /* CREAR TITULO */
            CursoModulo::create([
                'idasig'=>$this->idAsign,
                'nom'=>$this->titulo,
                'estado'=>$this->estado_actual,
            ]);
            $this->titulo = '';
        }elseif($this->estado == 2){ /* UPDATE TITULO */
            $this->modulo->update([
                'nom' => $this->titulo,
                'estado'=>$this->estado_actual,
            ]);
            $this->titulo = '';
        }elseif($this->estado == 3){/* CREAR CONTENIDO */
            if($this->idModulo != 0){
                CursoContenido::create([
                    'modulo'=>$this->titulo,
                    'estado'=>$this->estado_actual,                    
                    'asignados_idasig'=>$this->idAsign,
                    'idcon'=>$this->idModulo,
                ]);
                $this->titulo = '';
            }
        }elseif($this->estado == 4){/* EIDTAR CONTENIDO */
            $this->contenido->update([
                'modulo' => $this->titulo,
                'idcon' => $this->modulo_actual,
                'estado'=>$this->estado_actual,
            ]);
            $this->titulo = '';
        }elseif($this->estado == 5){/* Crear Material */
            CursoMaterial::create([
                'material'=>$this->tituloMat,
                'descripcion'=>$this->descrMat,
                'url'=>$this->urlVideoMat,
                'url4'=>$this->urlStoraMat,
                'idc'=>$this->idModulo,
            ]);
            $this->tituloMat = '';
            $this->descrMat = '';
            $this->urlVideoMat = '';
            $this->urlStoraMat = '';
        }
        elseif($this->estado == 6){/* EDITAR Material */
            $this->material->update([
                'material'=>$this->tituloMat,
                'descripcion'=>$this->descrMat,
                'url'=>$this->urlVideoMat,
                'url4'=>$this->urlStoraMat,
                'idc'=>$this->modulo_actual,
            ]);
            $this->tituloMat = '';
            $this->descrMat = '';
            $this->urlVideoMat = '';
            $this->urlStoraMat = '';
        }
        elseif($this->estado == 7){/* NUEVO Archivo */
            CursoArchivo::create([
                'title'=>$this->tituloArch,
                'archivo'=>$this->urlArch,
                'material_id'=>$this->idMaterial,
            ]);
            $this->tituloArch = '';
        }
        elseif($this->estado == 8){/* EDITAR Archivo */
            $this->archivo->update([
                'title'=>$this->tituloArch,
                'archivo'=>$this->urlArch,
                'material_id'=>$this->mater_actual,
            ]);
            $this->urlArch = '';
        }
        elseif($this->estado == 9){/* NUEVO tarea */
            CursoTarea::create([
                'tarea'=>$this->tituloTar,
                'instruccion' => $instrucion,
                'puntuacion'=>$this->puntuacionTar,
                'archivo'=>$this->urlTar,
                'tipo'=>$this->tipoEvalTar,
                'idc'=>$this->idModulo,
                'estado'=>1,
                'fecha'=>now(),
                'val_proyecto'=>'0.60',
                'val_practica'=>'0.40',
            ]);
            $this->tituloTar = '';
            $this->instruccTar = '';
            $this->puntuacionTar = '';
            $this-> tipoEvalTar= '';
            $this->urlTar = '';
        }
        elseif($this->estado == 10){/* EDITAR tarea */
            $this->tarea->update([
                'tarea' => $this->tituloTar,
                // 'instruccion' => $this->instruccTar,
                'instruccion' => $instrucion,
                'puntuacion' => $this->puntuacionTar,
                'archivo' => $this->urlTar,
                'tipo' => $this->tipoEvalTar,
                'estado' => $this->estado_actual,
                'idc' => $this->modulo_actual,
            ]);
            $this->tituloTar = '';
            $this->instruccTar = '';
            $this->puntuacionTar = '';
            $this-> tipoEvalTar= '';
            $this->urlTar = '';
        }
        elseif($this->estado == 11){/* NUEVO PREGUNTA */
            $savePregunta =
                CursoExamenPregt::create([
                    'pregunta'=>$this->codigoPreg,
                    'instruccion'=>$this->preguntPreg,
                    'puntuacion'=>$this->puntPreg,
                    // 'fecha'=>now(),
                    'estado'=>1,
                    'idc'=>$this->idModulo,
                    'val_proyecto'=>$this->option,
                ]);
            for ($i=1; $i <= $this->pregMin ; $i++) {
                $opt = "option_".$i;
                CursoExamenPregtOpc::create([
                    'texto'=>$this->$opt,
                    'idpregunta'=>$savePregunta ->idpregunta,
                    'tipo'=>$i,
                ]);
            }
            $this->codigoPreg = '';
            $this->preguntPreg = '';
            $this->puntPreg = 100;
            $this->option_1 = '';
            $this->option_2 = '';
            $this->option_3 = '';
            $this->option_4 = '';
            $this->option_5 = '';
            $this->option_6 = '';
            $this->option_7 = '';
            $this->option_8 = ''; 
        }
        elseif($this->estado == 12){/* EDITAR PREGUNTA */
            $this->pregunta->update([
                'instruccion'=>$this->preguntPreg,
                'puntuacion'=>$this->puntPreg,
                'estado'=>$this->estado_actual,
            ]);
        }        
        $this->dispatchBrowserEvent('resolve' , ['message' => 'Bien!!']); 
    }

    public function showModulo($id, $tipo, $mod = 0){
        if($tipo == 1){            
            $this->estado = 2;
            $this->modulo = CursoModulo::find($id);
            
            $this->titulo =  $this->modulo->nom;
            $this->estado_actual =  $this->modulo->estado;
        }elseif($tipo == 2){
            $this->estado = 4;
            $this->contenido = CursoContenido::find($id);
            
            $this->titulo =  $this->contenido->modulo;
            $this->modulo_actual = $this->contenido->cursoModulo->idc;            
            $this->estado_actual =  $this->contenido->estado;
        }elseif($tipo == 3){
            $this->estado = 6;
            $this->material = CursoMaterial::find($id);
            $this->tituloMat =  $this->material->material;
            $this->descrMat =  $this->material->descripcion;
            $this->urlVideoMat =  $this->material->url;
            $this->urlStoraMat =  $this->material->url4;
            $this->modulo_actual = $this->material->idc;
        }
        elseif($tipo == 4){
            $this->reset('materiales');
            $this->estado = 8;
            $this->archivo = CursoArchivo::find($id);
            
            $this->tituloArch =  $this->archivo->title;
            $this->urlArch =  $this->archivo->archivo;
            $this->mater_actual =  $this->archivo->material_id;
            $this->materiales = CursoMaterial::where('idc', $mod)->get();
        }
        elseif($tipo == 5){
            $this->estado = 10;
            $this->tarea = CursoTarea::find($id);
            
            $this->tituloTar =  $this->tarea->tarea;
            $this->instruccTar =  $this->tarea->instruccion;
            $this->puntuacionTar =  $this->tarea->puntuacion;
            $this->tipoEvalTar =  $this->tarea->tipo;
            $this->urlTar =  $this->tarea->archivo;
            $this->modulo_actual =  $this->tarea->idc;
            $this->estado_actual =  $this->tarea->estado;
            $this->dispatchBrowserEvent('editor', ['contenido' => $this->instruccTar]);
        }
        elseif($tipo == 6){
            $this->estado = 12;
            $this->pregunta = CursoExamenPregt::find($id);            
            $this->codigoPreg =  $this->pregunta->pregunta;
            $this->preguntPreg =  $this->pregunta->instruccion;
            $this->puntPreg =  $this->pregunta->puntuacion;
        }        
    }

    public function addPreg(){
        $this->pregMin = $this->pregMin +1;        
    }

    public function remPreg(){
        if($this->pregMin >= 4){
            $this->pregMin = $this->pregMin -1;
        }
    }

    public function cambioStatus($estadoModal, $estado,$id = 0){
        $this->estado = $estado;
        $this->idModulo = $id;
        $this->reset(['estado_actual']);
        $this->titulo = $this->estado == 1 ? '':  ($this->estado == 2 ? $this->titulo :  ($this->estado == 3 ? '' : ($this->estado == 4 ? $this->titulo : '')));
    }

    public function cambioStatusArchivo($estadoModal, $estado,$id = 0, $mod =0){
        $this->estado = $estado;
        $this->idMaterial = $id;
        $this->tituloArch = '';
        $this->urlArch = '';
        $this->materiales = CursoMaterial::where('idc', $mod)->get();

    }

    public function cambioStatusTarea($estadoModal, $estado,$id = 0){
        $this->estado = $estado;
        $this->idModulo = $id;

        $this->tituloTar = '';
        $this->instruccTar = '';
        $this->puntuacionTar = '';
        $this-> tipoEvalTar= '';
        $this->urlTar = '';
        $this->dispatchBrowserEvent('editor', ['contenido' => false]);
    }

    public function cambioStatusPregunta($estadoModal, $estado,$id = 0){
        $this->estado = $estado;
        $this->idModulo = $id;

        $this->codigoPreg = '';
        $this->preguntPreg = '';
        $this->puntPreg =  100;
    }

    public function cambioStatusMaterial($estadoModal, $estado,$id = 0){
        $this->estado = $estado;
        $this->idModulo = $id;
        // limpiar material inputs
        $this->tituloMat = '';
        $this->descrMat = '';
        $this->urlVideoMat = '';
        $this->urlStoraMat = '';
    }
    
    // id (modulo o contenido) -- tipo (modulo o contenido)
    public function deleteModulo($id,$tipo){
        if($tipo == 1){ /* DELETE MODULO */
            CursoModulo::find($id)->delete();
        }elseif($tipo == 2){/* DELETE CONTENIDO */
            CursoContenido::find($id)->delete();
        }elseif($tipo == 3){/* DELETE MATERIAL */
            CursoMaterial::find($id)->delete();
        }elseif($tipo == 4){/* DELETE ARCHIVO */
            CursoArchivo::find($id)->delete();
        }elseif($tipo == 5){/* DELETE ARCHIVO */
            CursoTarea::find($id)->delete();
        }elseif($tipo == 6){/* DELETE ARCHIVO */
            CursoExamenPregt::find($id)->delete();
        }
    }
}
