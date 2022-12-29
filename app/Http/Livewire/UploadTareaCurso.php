<?php

namespace App\Http\Livewire;
use App\Models\CursoTarea;
use Livewire\Component;

class UploadTareaCurso extends Component
{
    public $open = false;
    public $tarea;
    public function mount(CursoTarea $tarea)
    {
        $this->tarea=$tarea;
    }
    public function render()
    {
        return view('livewire.upload-tarea-curso');
    }
}
