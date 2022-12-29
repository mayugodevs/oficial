<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class BotsecComprar extends Component
{
    public $id_curso;
    public $add = false;

    // public function mount(){
        
    // }
    protected $listeners = ['add_course'];
    public function kenny(){
        ddd('hi');
    }
    public function add_course(){
        dd('hi');
        // $curso = Curso::where('idcur', $this->id_curso)->first();
        // Cart::add([
        //     'id' => $curso->idcur, 
        //     'name' => $curso->nom, 
        //     'qty' => 1, 
        //     'price' => $curso->precio,
        //     'weight' => 550,
        //     'options' => [
        //         'desc' => $curso->predsct,
        //         'img' => $curso->img,
        //         'type' => 1,
        //         'idasig' => $curso->cursoAsignacion->idasig,
        //     ],
        // ]);
        // $this->dispatchBrowserEvent('resolve', ['message' => 'add']);
        // $this->emitTo('carrito','render');
    }
    
    public function render()
    {
        return view('livewire.botsec-comprar');
        // return 
    }
}
