<?php

namespace App\Http\Livewire;

use App\Models\Pais;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Carrito extends Component
{
    public $carrito = [];    
    public $total = 0;    
    public $cambio=1;
    public $simbolo='USD';
    public $cod_iso='$';
    protected $listeners = ['render', 'delete'];
    public function mount(){
        // session_start();
        $money = Pais::find(isset($_SESSION['money_user']) ? $_SESSION['money_user'] : 13);
        $this->simbolo = $money->simbolo;
        $this->cambio = $money->cambio;
        $this->cod_iso = $money->cod_iso;
    }
    public function render()
    {
        $this->reset(['carrito','total']);  
        foreach (Cart::content() as $cart) {
            if ($cart->options->type == 1) {
                array_push($this->carrito, $cart);
                $this->total +=$cart->price;
            }
        }
        return view('livewire.carrito');
    }
    public function delete($id)
    {
        // ddd('ddd');
        Cart::remove($id);
    }
}
 