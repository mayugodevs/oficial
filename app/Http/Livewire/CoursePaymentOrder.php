<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Asignado;
class CoursePaymentOrder extends Component
{
    public $asignado;
    protected $listeners=['payOrder'];
    public function mount(Asignado $asignado)
    {
        $this->asignado=$asignado;
    }
    public function payOrder(){
     dd('bien');
     return redirect()->route('perfil');
    }
    public function render()
    {
       
        return view('livewire.course-payment-order');
    }
}
