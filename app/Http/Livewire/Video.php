<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Video extends Component
{
    public $idm;
    // protected $listeners = ['updateN'];
    // public function updateN($value){
    //     $this->idv = $value;
    // }
    public function render()
    {
        return view('livewire.video');
    }
}
