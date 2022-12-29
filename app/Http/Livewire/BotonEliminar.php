<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class BotonEliminar extends Component
{
    public $cursoId;
    protected $listeners = ['render'];
    public function mount($cursoId){
        $this->cursoId = $cursoId;
    }
    public function render()
    {
        return view('livewire.boton-eliminar');
    }

    public function eliminar(){
        $cart = Cart::content()->where('id',$this->cursoId);
        // if($cart->isNotEmpty()){
            Cart::remove($cart->cursoId);
        // }
        // Cart::remove($this->cursoId);
        $this->emitTo('carrito', 'render');
    }
}
