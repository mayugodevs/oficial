<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DashboardTareas extends Component
{
    public function render()
    {
        return view('livewire.dashboard-tareas')
        ->extends('layout');
    }
}
