<?php

namespace App\Http\Livewire;

use App\Models\LinkGenerador;
use App\Models\LinkPay as ModelsLinkPay;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

use function PHPUnit\Framework\returnSelf;

class LinkPay extends Component
{
    use WithPagination;
    public $user;
    public $tipo = 0; /* 0 => 10 last links, 1 => all links of user */
    public $titulo;
    public $concepto;
    public $prec_normal;
    public $prec_venta;
    public $fecha;
    public $pays = [];
    public $max_veces = 1;
    protected $listeners = ['crear_link'];
    public function mount(){
    //     if(Auth::user()->tipo == 2){
            $this->user = Auth::user()->idalum;
            $this->fecha = Carbon::now()->addDay();
    //     }else return redirect()->route('inicio');        
    }
    public function user_pago($link_id){
        $this->pays = ModelsLinkPay::where('link_gen_id', $link_id)->get();
    }
    public function crear_link(){
        LinkGenerador::create([
            'titulo' => $this->titulo,
            'precio_normal' => $this->prec_normal,
            'precio_venta' => $this->prec_venta,
            // 'logo' => $this->,
            'fecha_expiracion' => $this->fecha,
            'generado_por' => $this->user,
            'concepto' => $this->concepto,
            'maxveces' => $this->max_veces,
        ]);
        $this->dispatchBrowserEvent('resolve', ['message' => 'Link creado']);
    }
    public function render()
    {
        if ($this->tipo) {
            $links_generados = LinkGenerador::where('generado_por', $this->user)->orderBy('id', 'DESC')->paginate(3);
        }else{
            $links_generados = LinkGenerador::where('generado_por', $this->user)->orderBy('id', 'DESC')->take(10)->get();
        }
        return view('livewire.link-pay',[
            'links_generados' => $links_generados,
        ])->extends('layout');
    }
}
