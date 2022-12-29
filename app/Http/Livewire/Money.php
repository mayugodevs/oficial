<?php

namespace App\Http\Livewire;

use App\Models\Pais;
use Livewire\Component;

class Money extends Component
{
    public $money_id2 = 0;
    public $paises;
    protected $listeners = ['changeMoney','changeMoneyIp'];
    public function mount(){  
        $this->paises = Pais::where('estado',1)->get();
        $this->changeMoney();
    }
    public function changeMoney($money=false){         
        
        if ($money) {
            session_start();  
            $_SESSION["money_user"] = $money;
            $this->money_id2 = $_SESSION["money_user"];
            $this->dispatchBrowserEvent('reload');
        }else $this->money_id2 = isset($_SESSION["money_user"]) ? $_SESSION["money_user"] : 13; 
    }
    public function changeMoneyIp($country_code){        
        $pais = Pais::where('pais_codigo', $country_code)->first();
        $this->changeMoney($pais->id);
    }
    public function render(){
        return view('livewire.money');
    }
}