<?php

namespace App\Http\Livewire;

use App\Models\Pais;
use App\Models\Planes as ModelsPlanes;
use App\Models\PlanPregunts;
use App\Models\TipoCambio;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Planes extends Component
{
    public $planes;
    public $preg_prems;
    public $cambio=1;
    public $simbolo='USD';
    public $cod_iso='$';
    // protected $listeners = ['readMoney'];
    public function mount(){
        $this->readMoney();
        $this->planes = ModelsPlanes::where('estado',1)->orderBy('orden','asc')->get();
        $this->preg_prems = PlanPregunts::where('estado',0)->orderBy('orden','asc')->get();
    }
    public function readMoney(){
        session_start();
        $this->money = Pais::find(isset($_SESSION['money_user']) ? $_SESSION['money_user'] : 13);
        $this->simbolo = $this->money->simbolo;
        $this->cambio = $this->money->cambio;
        $this->cod_iso = $this->money->cod_iso;
        $this->planes = ModelsPlanes::where('estado',1)->orderBy('orden','asc')->get();
        $this->preg_prems = PlanPregunts::where('estado',0)->orderBy('orden','asc')->get();
    }
    public function addPlan($tipo){
        foreach (Cart::content() as $item) {
            if ($item->options->type == 2) 
                Cart::remove($item->rowId);
        }
        $plan = ModelsPlanes::find($tipo);
        Cart::add([
            'id' => $tipo, 
            'name' => $plan->plan, 
            'qty' => 1, 
            'price' =>  $plan->precio,
            'weight' => 550,
            'options' => [
                'desc' => $plan->pre_normal,
                'img' => 'avatar_general.jpg',
                'type' => 2,
            ],
        ]);
        redirect()->route('checkout','IudnH6cXS9GR');
    }
    public function render()
    {
        return view('livewire.planes')->extends('layout');
    }
}
