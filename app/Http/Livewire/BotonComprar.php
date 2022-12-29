<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class BotonComprar extends Component
{   
    public $curso;
    public $estado = false;/* no se encuentra en el carritoe ste curso */
    public $textoBtn = ['Añadir','fa fa-cart-plus inline-flex'];
    public $options =[];

    public function mount(){
        $this->reedStatus();
        $this->textoBtn = $this->estado ? ['Quitar','fa fa-trash'] : ['Añadir','fa fa-cart-plus inline-flex'];
    }
    public function render()
    {        
        return view('livewire.boton-comprar');
    }
    public function reedStatus(){
        foreach (Cart::content() as $prod) {
            if($prod->id == $this->curso->idcur) $this->estado  = true;/* se encuentra en el carrito este curso */
        }
    }

    public function agregarItem(){
        $this->reedStatus();
        if(!$this->estado){
            $this->textoBtn = ['Quitar','fa fa-trash'];
            Cart::add([
                'id' => $this->curso->idcur, 
                'name' => $this->curso->nom, 
                'qty' => 1, 
                'price' => $this->curso->precio,
                'weight' => 550,
                'options' => [
                    'desc' => $this->curso->predsct,
                    'img' => $this->curso->img,
                    'type' => 1,
                    'idasig' => $this->curso->cursoAsignacion->idasig,
                ],
            ]);
            $this->emitTo('carrito','render');
        }else {
            $this->textoBtn = ['Añadir','fa fa-cart-plus inline-flex'];
            $this->estado = false;
            $cart = Cart::content()->where('id',$this->curso->idcur)->first();
            Cart::remove($cart->rowId);
            $this->emitTo('carrito', 'render');    
        }
        
    }
}
 