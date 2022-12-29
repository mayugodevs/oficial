<?php

namespace App\View\Components;

use App\Models\Planes as ModelsPlanes;
use Illuminate\View\Component;

class Planes extends Component
{
    public $planes;
    public function __construct() {
        $this->planes = ModelsPlanes::where('estado',1)->get();
    } 
    public function render() {
        return view('components.planes');
    }
}
