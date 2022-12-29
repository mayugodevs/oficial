<?php

namespace App\View\Components;

use App\Models\Software;
use Illuminate\View\Component;

class ListaSoftware extends Component
{
    public $softwares;
    public function __construct()
    {
        
    }
    public function render()
    {
        $this->softwares = Software::where('estado',1)->get();
        return view('components.lista-software');
    }
}
 