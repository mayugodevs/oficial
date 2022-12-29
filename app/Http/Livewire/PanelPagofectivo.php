<?php

namespace App\Http\Livewire;

use App\Models\CursoInscripcion;
use App\Models\DiplomadoPagos; 
use App\Models\PlanesAlumno;
use Carbon\Carbon;
use Livewire\Component;

class PanelPagofectivo extends Component
{
    public $datos = [];
    public $inicio;
    public $fin;
    public $tipo = 2;
    public function mount(){
        $this->fin = Carbon::now();
        // $this->inicio = Carbon::now()->subDays(9);
        $this->inicio = Carbon::now()->subMonths(3);
    }
    public function render()
    {
        $this->reset('datos');
        if ($this->tipo == 1) {/* ->where('tipo_pago','') */
            foreach (CursoInscripcion::where('tipo', 'unidad')->whereBetween('fecha',[$this->inicio, $this->fin])->orderBy('idinsc', 'DESC')->get() as $pag1) {
                array_push($this->datos, $pag1);
            }    
            foreach (DiplomadoPagos::whereBetween('fecha',[$this->inicio, $this->fin])->orderBy('idpay', 'DESC')->get() as $pag2) {
                array_push($this->datos, $pag2);
            }    
            foreach (PlanesAlumno::whereBetween('fecha_pago',[$this->inicio, $this->fin])->orderBy('idpremium', 'DESC')->get() as $pag3) {
                array_push($this->datos, $pag3);
            }
        } else if($this->tipo == 2) {
            foreach (CursoInscripcion::where('tipo', 'unidad')->where('tipo_pago','Culqi')->whereBetween('fecha',[$this->inicio, $this->fin])->orderBy('idinsc', 'DESC')->get() as $pag1) {
                array_push($this->datos, $pag1);
            }  
            foreach (DiplomadoPagos::where('tipo_pago','Culqi')->whereBetween('fecha',[$this->inicio, $this->fin])->orderBy('idpay', 'DESC')->get() as $pag2) {
                array_push($this->datos, $pag2);
            }
            foreach (PlanesAlumno::where('tipo_pago','Culqi')->whereBetween('fecha_pago',[$this->inicio, $this->fin])->orderBy('idpremium', 'DESC')->get() as $pag3) {
                array_push($this->datos, $pag3);
            }
        }
        
        $this->dispatchBrowserEvent('table');

        return view('livewire.panel-pagofectivo')
            ->extends('layout');
    }
}
