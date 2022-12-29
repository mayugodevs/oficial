<?php

namespace App\Http\Livewire;

use App\Models\DiplomadoGrupo;
use App\Models\DiplomadoPagos;
use App\Models\Pais;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DiplomadoList extends Component
{
    public $diplomados;    
    public $cambio=1;
    public $simbolo='USD';   
    public $cod_iso='$';   
    public $inscripciones = [];
    public function mount(){
        $this->diplomados = DiplomadoGrupo::where('estado',1)->get();
        if(Auth::user()){
            foreach (DiplomadoPagos::where('alumno_id',Auth::user()->idalum)->get() as $diplomado) {
                array_push($this->inscripciones,$diplomado->diplomados_id);
            }
        }
        session_start();
        $money = Pais::find(isset($_SESSION['money_user']) ? $_SESSION['money_user'] : 13);
        // if($this->money){
        $this->simbolo = $money->simbolo;
        $this->cambio = $money->cambio;
        $this->cod_iso = $money->cod_iso;
        // }
    }
    public function addDiplomado($diplomado_id){
        foreach (Cart::content() as $item) {
            if ($item->options->type == 3)
                Cart::remove($item->rowId);
        }
        $diplomado = DiplomadoGrupo::find($diplomado_id);
        Cart::add([
            'id' => $diplomado_id, 
            'name' => $diplomado->titulo, 
            'qty' => 1, 
            'price' => $diplomado->diplomado->precio_venta,
            'weight' => 550,
            'options' => [
                'desc' => $diplomado->diplomado->precio_normal,
                'img' => 'avatar_general.jpg',
                'type' => 3,
            ],
        ]);
        return redirect()->route('checkout','IVjIKRCh1gkg');
    }
    public function render()
    {
        return view('livewire.diplomado-list')
            ->extends('layout');
    }
}
