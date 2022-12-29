<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Curso;
use App\Models\CursoPrecios;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OfertaCursos extends Component
{   
    public $categorias;
    public $precio;
    public $subTotal = 0;
    public $oferta_id = 0;
    public $categoria_id = 2;
    public $cursos;
    public $user; 
    public $cursos_select = [];
    public $cursos_asig = [];
    public $exclusiones = [];
    public $carrito_oferta = [];

    public function mount($slug){
        $this->user = Auth::user();
        if($this->user){
            foreach ($this->user->cursoInscripciones as $inscripcion) {
                array_push($this->cursos_asig,$inscripcion->cursoAsignacion->curso_idcur);                    
            }  
        }
        $oferta = CursoPrecios::where('slug',$slug)->first();
        if(!$oferta->estado) redirect()->route('inicio');
        if($oferta->exclusiones) $this->exclusiones = explode(",", $oferta->exclusiones);
        $this->precio = $oferta->precio;
        $this->oferta_id = $oferta->id;
        $this->categorias = Categoria::where('estado',1)->get(); 
        foreach (Cart::content() as $item) {
            if ($item->options->type == 5 && $item->options->promo == $this->oferta_id) array_push($this->cursos_select, $item->id);
        }
    }
    public function addCourse($curso_id,$type =false){
        $curso = Curso::find($curso_id);
        if ($type) { /* quitar */
            $cart = Cart::content()->where('id', $curso_id)->first();
            Cart::remove($cart->rowId);
            if (($clave = array_search($curso_id, $this->cursos_select)) !== false) unset($this->cursos_select[$clave]);
            $this->dispatchBrowserEvent('resolve', ['message' => 'Eliminado curso.']);
        } else { /* agregar  */
            array_push($this->cursos_select, $curso_id);
            Cart::add([
                'id' => $curso->idcur, 
                'name' => $curso->nom, 
                'qty' => 1, 
                'price' => $this->precio,
                'weight' => 550,
                'options' => [
                    'desc' => $curso->precio,
                    'img' => $curso->img,
                    'type' => 5,
                    'promo' => $this->oferta_id,
                ],
            ]);
            $this->dispatchBrowserEvent('resolve', ['message' => 'Agregado al carrito']);
        }        
    }
    public function showNow($idCategoria){
        $this->categoria_id = $idCategoria;
    }
    public function listCart($curso_id=false){
        if($curso_id){
            $cart = Cart::content()->where('id', $curso_id)->first();
            Cart::remove($cart->rowId);
            if (($clave = array_search($curso_id, $this->cursos_select)) !== false) unset($this->cursos_select[$clave]);
        }
        foreach (Cart::content() as $cart) {
            if($cart->options->type == 5 && $cart->options->promo == $this->oferta_id) {
                array_push($this->carrito_oferta, $cart);
                $this->subTotal +=  $cart->price;
            }
        }
    }
    public function buyNow(){
        redirect()->route('checkout',['tipo' => 'KRCh1H6cXIQo', 'link' => $this->oferta_id]);
    }
    public function render()
    {
        $this->cursos = Categoria::find($this->categoria_id)->cursos->where('estado',1)/* ->where('precio','>',) */; 
        $this->reset([
            'carrito_oferta',
            'subTotal'
        ]);
        $this->listCart();
        return view('livewire.oferta-cursos')->extends('layout');
    }
}
