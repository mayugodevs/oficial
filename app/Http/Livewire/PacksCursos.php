<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Curso;
use App\Models\CursoMultiplica;
use App\Models\Pais;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PacksCursos extends Component
{
    public $categorias; 
    public $cursos;
    public $user;
    public $categoria_id = 2;
    public $cursos_asig = [];
    public $cursos_pack = [];
    public $carrito = [];
    public $cantMax = 0;//máximo de cursos en el pack 
    public $contador = 0;
    public $precioFinal = 0;

    // cambio de moneda
    public $cambio=1;
    public $simbolo='USD';
    public $cod_iso='$';
    public function mount(CursoMultiplica $slug){
        session_start();
        $money = Pais::find(isset($_SESSION['money_user']) ? $_SESSION['money_user'] : 13);
        $this->simbolo = $money->simbolo;
        $this->cambio = $money->cambio;
        $this->cod_iso = $money->cod_iso;

        // ddd($money);
        if ($slug->estado) {
            $this->user = Auth::user(); 
            $this->cantMax = $slug->multiplica;
            $this->categorias = Categoria::where('estado',1)->get();  
            $this->cursosExistentes();
        }else redirect()->route('inicio');
    } 
    public function render()
    {   
        $this->cursos = Categoria::find($this->categoria_id)->cursos->where('estado',1)/* ->where('precio','>',) */;
        
        // if($this->contador == $this->cantMax) $this->dispatchBrowserEvent('temp');
        $this->listarCarrito();
        return view('livewire.packs-cursos')->extends('layout');
    }
    public function cursosExistentes(){
        if ($this->user) {
            foreach ($this->user->cursoInscripciones as $inscripcion) {
                array_push($this->cursos_asig,$inscripcion->cursoAsignacion->curso_idcur);                    
            }    
        }
    }
    public function showNow($idCategoria){
        $this->categoria_id = $idCategoria;
    }
    public function agregarPack($idcurso, $type = false){
        $curso = Curso::find($idcurso);
        if ($type) {
            if (in_array($type, $this->cursos_pack)) {
                Cart::remove($idcurso);
                $this->dispatchBrowserEvent('resolve', ['message' => 'Eliminado del carrito']);
            }
        } else {
            if(count($this->cursos_pack) < $this->cantMax){
                Cart::add([
                    'id' => $curso->idcur, 
                    'name' => $curso->nom, 
                    'qty' => 1, 
                    'price' => $curso->precio,
                    'weight' => 550,
                    'options' => [
                        'desc' => $curso->predsct,
                        'img' => $curso->img,
                        'type' => 4, 
                    ],
                ]);
                $this->dispatchBrowserEvent('resolve', ['message' => 'Agregado al carrito']);
            }else $this->dispatchBrowserEvent('reject', ['message' => 'Elimina un curso']);
        }        
        $this->emitTo('carrito','render');
    }
    public function listarCarrito($curso_id=false){
        $this->reset('carrito','cursos_pack','contador','precioFinal');
        foreach (Cart::content() as $item) {
            if($item->id == $curso_id) Cart::remove($item->rowId);
            if ($item->options->type == 4){
                $this->contador +=1;
                array_push($this->cursos_pack,$item->id);
                array_push($this->carrito, $item);
                $this->precioFinal = $item->price > $this->precioFinal ?  $item->price : $this->precioFinal;
            }
        } 
    }
}
