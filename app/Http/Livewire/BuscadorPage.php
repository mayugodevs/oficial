<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Curso;
use App\Models\CursoInscripcion;
use App\Models\DiplomadoGrupo;
use App\Models\DiplomadoPay;
use App\Models\PlanesAlumno;
use App\Models\Singup;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class BuscadorPage extends Component
{
    public $cant = 1;
    public $type_price = 0;/* 0 => gratis, 1 => pagado */
    public $type_category = [2];/* 0 => course, 1 => especializ, 2 => diplomado */
    public $orden = 1;/* 0 => recientes, 1 => more buy */
    public $search;
    public $cursos = [];
    public $curso_message;
    public $categorys = [];
    public $category_message;
    public $specializations = [];/* diplomados */
    public $specialization_message;
    public $cart = [];
    public function mount($txt){
        $this->search = $txt;
        $this->cart = showCarts(1); 
    }
    public function cambio($type, $value, $search)/* $type => tipo entrada, $value => valor del tipo */{
        if ($type) /* update 'type_category' array */
        {
            if ($value) /* add value */ array_push($this->type_category, $search);            
            else /* remove value */
            {
                if (($clave = array_search($search, $this->type_category)) !== false) {
                    if(count($this->type_category) > 1) unset($this->type_category[$clave]);
                    else $this->dispatchBrowserEvent('resolve', ['message' => 'no se puede dejar vacio']);
                }
            } 
        } 
        else $this->type_price = $search;
    }
    public function add_cart($id_course){
        $curso = Curso::find($id_course);
        addProduct($curso,1);
        array_push($this->cart, $id_course);
        $this->emitTo('carrito', 'render');
    }
    public function remove_cart($id_course){
        if (($clave = array_search($id_course, $this->cart)) !== false) unset($this->cart[$clave]);
        removeProduct($id_course,1);
        $this->emitTo('carrito', 'render');
    }
    public function render()
    {
        $this->reset('cursos','specializations','categorys');
        if ($this->type_price) {
            $this->reset('curso_message','category_message','specialization_message');
            /* Listar cursos de paga */  
            if(in_array(0, $this->type_category)){/* Si tiene activo curso */
                if ($this->orden) {/* Los curso mas comprados con este nombre */
                    $inscritos = CursoInscripcion::select('asignados_idasig', DB::raw('count(*) as total'))->groupBy('asignados_idasig')->orderBy('total','DESC')->take(5)->get();
                    foreach ($inscritos as $inscrito) {
                        $curso = Curso::join('curso_asignaciones', 'cursos.idcur', '=', 'curso_asignaciones.curso_idcur')
                        ->join('trabajadores', 'curso_asignaciones.trabajadores_idtrab', '=', 'trabajadores.idtrab')
                        ->select('cursos.idcur', 'cursos.img', 'cursos.nom', 'cursos.slug','curso_asignaciones.idasig','cursos.precio','cursos.predsct', 'trabajadores.nombres')
                        ->distinct('cursos.idcur')
                        ->where('idcur', $inscrito->cursoAsignacion->curso->idcur)->where('nom','like','%'.$this->search.'%')->first(); 
                        if($curso) array_push($this->cursos, $curso); 
                    } 
                    if(!count($this->cursos)) {
                        $this->curso_message = 'No encontramos cursos relacionados, pero estos estan buenazos';
                        $this->cursos = Curso::where('estado',1)->take(5)->get();
                    }

                } else {
                    $this->cursos = Curso::join('categorias', 'categorias.idc', '=', 'cursos.idc')
                        ->join('curso_asignaciones', 'cursos.idcur', '=', 'curso_asignaciones.curso_idcur')
                        ->join('trabajadores', 'curso_asignaciones.trabajadores_idtrab', '=', 'trabajadores.idtrab')
                        ->join('curso_modulos', 'curso_asignaciones.idasig', '=', 'curso_modulos.idasig')
                        ->join('curso_material', 'curso_modulos.idc', '=', 'curso_material.idc')
                        ->join('curso_contenidos', 'curso_modulos.idc', '=', 'curso_contenidos.idcon')
                        ->select('cursos.idcur', 'cursos.img', 'cursos.nom', 'cursos.slug','curso_asignaciones.idasig',
                            'cursos.precio','cursos.predsct', 'trabajadores.nombres')
                        ->distinct('cursos.idcur')
                        ->where('cursos.estado',1)
                        ->where('cursos.nom','like','%'.$this->search.'%')
                        ->orWhere('categorias.nombre','like','%'.$this->search.'%')
                        ->orWhere('curso_modulos.nom','like','%'.$this->search.'%')
                        ->orWhere('curso_material.material','like','%'.$this->search.'%')
                        ->orWhere('curso_contenidos.modulo','like','%'.$this->search.'%')
                        ->get();

                    if(!count($this->cursos)) {
                        $this->curso_message = 'No encontramos cursos relacionados, pero estos estan buenazos';
                        $this->cursos = Curso::where('estado',1)->take(5)->get();
                    }
                }
            }
            if (in_array(1, $this->type_category)) {/* Si tiene activo especializacion */
                if ($this->orden) {/* Las especializacion mas comprados con este nombre */

                } else $this->categorys = Categoria::where('nombre', 'LIKE','%'.$this->search.'%')->orderBy('idc', 'DESC')->get();

                if(count($this->categorys) < 1) {
                    $this->category_message = 'No encontramos resultados, pero te recomendamos estos especializaciones';
                    $this->categorys = Categoria::take(4)->get();
                }
            }
            if (in_array(2, $this->type_category)) {/* Si tiene activo diplomado */
                if ($this->orden) {/* Las especializacion mas comprados con este nombre */
                    $pagos = DiplomadoPay::select('diplomados_id', DB::raw('count(*) as total'))->groupBy('diplomados_id')->orderBy('total', 'DESC')->get();
                    foreach ($pagos as $pago) {
                        $diplomado = DiplomadoGrupo::where('titulo','LIKE', '%'.$this->search.'%')->where('tipo_producto','!=','free')->where('estado',1)->where('iddiplomado', $pago->diplomado_grupo->iddiplomado)->first();
                        if($diplomado) array_push($this->specializations, $diplomado);
                    }
                } else{
                    $this->specializations = DiplomadoGrupo::where('titulo', 'LIKE', '%'.$this->search.'%')->where('tipo_producto','!=','free')->where('estado',1)->get();
                }
                if (count($this->specializations) < 1) {
                    $this->specialization_message = 'No encontramos diplomados gratis, pero aprovecha estos';
                    $this->specializations = DiplomadoGrupo::take(4)->get();
                }
                
            }
        }
        else {
            /* Listar cursos gratis */ 
            if(in_array(0, $this->type_category)){/* Si tiene activo curso */
                if ($this->orden) {/* Los curso mas comprados con este nombre */
                    $inscritos = CursoInscripcion::select('asignados_idasig', DB::raw('count(*) as total'))->where('tipo','free')->groupBy('asignados_idasig')->orderBy('total','DESC')->take(5)->get();
                    foreach ($inscritos as $inscrito) {
                        $curso = Curso::join('curso_asignaciones', 'cursos.idcur', '=', 'curso_asignaciones.curso_idcur')
                        ->join('trabajadores', 'curso_asignaciones.trabajadores_idtrab', '=', 'trabajadores.idtrab')
                        ->select('cursos.idcur', 'cursos.img', 'cursos.nom', 'cursos.slug','curso_asignaciones.idasig','cursos.precio','cursos.predsct', 'trabajadores.nombres')
                        ->distinct('cursos.idcur')
                        ->where('idcur', $inscrito->cursoAsignacion->curso->idcur)->where('nom','like','%'.$this->search.'%')->first(); 
                        if($curso) array_push($this->cursos, $curso);
                       
                    }
                    if(count($this->cursos) < 1) {
                        $this->curso_message = 'No encontramos cursos relacionados, pero estos estan buenazos';
                        $this->cursos = Curso::where('estado',1)->take(4)->get();
                    } 
                } else {
                    foreach (Singup::where('tipo_id', 5)->where('fecha_fin', '>=', Carbon::now())->get() as $free) {
                        $curso = Curso::join('curso_asignaciones', 'cursos.idcur', '=', 'curso_asignaciones.curso_idcur')
                        ->join('trabajadores', 'curso_asignaciones.trabajadores_idtrab', '=', 'trabajadores.idtrab')
                        ->select('cursos.idcur', 'cursos.img', 'cursos.nom', 'cursos.slug','curso_asignaciones.idasig','cursos.precio','cursos.predsct', 'trabajadores.nombres')
                        ->distinct('cursos.idcur')
                        ->where('idcur', $free->curso_asinga->curso->idcur)->where('nom','like','%'.$this->search.'%')->first(); 
                        if($curso) array_push($this->cursos, $curso);                         
                    }                    
                    if(count($this->cursos) < 1) {
                        $this->curso_message = 'No encontramos cursos relacionados, pero estos estan buenazos';
                        $this->cursos = Curso::where('estado',1)->take(5)->get();
                    }
                }
            }
            if (in_array(1, $this->type_category)) {/* Si tiene activo especializacion */
                if ($this->orden){
                    $planes = PlanesAlumno::select('idcategoria', DB::raw('count(*) as total'))->where('idcategoria','!=','NULL')->groupBy('idcategoria')->orderBy('total','DESC')->take(5)->get();
                    foreach ($planes as $plan) {
                        $categoria = Categoria::where('nombre','LIKE','%'.$this->search.'%')->where('precio',0)->where('idc', $plan->categoria->idc)->first();
                        if($categoria) array_push($this->categorys, $plan->categoria);
                    }
                }else $this->categorys = Categoria::where('nombre','LIKE','%'.$this->search.'%')->where('precio',0)->get();

                // counts of results
                if(count($this->categorys) < 1){
                    $this->category_message = 'No encontramos resultados, pero te recomendamos estos especializaciones';
                    $this->categorys = Categoria::take(3)->get();
                }
            }
            if (in_array(2, $this->type_category)) {/* Si tiene activo diplomado */
                ####################### FALTA ORDENAR POR 'ORDEN' #######################
                $this->specializations = DiplomadoGrupo::where('titulo', 'LIKE', '%'.$this->search.'%')->where('tipo_producto','free')->where('estado',1)->get();
                if (count($this->specializations) < 1) {
                    $this->specialization_message = 'No encontramos diplomados gratis, pero aprovecha estos';
                    $this->specializations = DiplomadoGrupo::take(4)->get();
                }
            }
        }
        return view('livewire.buscador-page')->extends('layout');
    }
}
