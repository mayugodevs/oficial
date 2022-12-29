<?php

namespace App\Http\Livewire;

use App\Models\DiplomadoCertificado;
use App\Models\DiplomadoConstancia;
use App\Models\DiplomadoGrupo;
use App\Models\DiplomadoPay;
use App\Models\DiplProyFin;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class HistorialCursovivo extends Component
{
    use WithPagination;
    use WithFileUploads;
    // public $tipo;   
    public $datos = 0;   
    public $search = '';   
    public $idpay;   
    public $filesaaa = [];
    public $grupos;   
    public $tareas = [];   
    public $proyectos = [];   
    protected $listeners = ['save_certif', 'delete_cert_const'];
    // public function mount($tipo){
    //     // $this->grupos = DiplomadoGrupo::where('tipo_producto', 'Vivo')->paginate(10);
    // }
    public function show_notas($idpay, $dip_grupo){
        $this->tareas = [];
        $this->datos = 1;
        $this->proyectos = [];
        $this->idpay = $idpay;
        // $this->tareas = DiplomadoGrupo::find($dip_grupo)->diplomadoTareas;
        foreach (DiplomadoGrupo::find($dip_grupo)->diplomadoSemanas as $semana) {
            foreach ($semana->diplomadoTareas as $tarea) {
                array_push($this->tareas, $tarea);
            }
        }
        foreach (DiplProyFin::where('dipl_grp_id',$dip_grupo)->get() as $proyet) {
            array_push($this->proyectos, $proyet);
        }
    }
    public function save_certif($tipo, $id_pay){
        foreach ($this->filesaaa as $file) {
            $arch = 'certif_'.$file->getClientOriginalName();
            $file->storeAs('files/certificado/',$arch,'public_uploads');
            if ($tipo === 1 ) {
                DiplomadoConstancia::create([
                    'idpay_diplomado' =>  $id_pay,
                    'url' => $arch,
                    'fecha' => Carbon::now(),
                ]);
            } else {
                DiplomadoCertificado::create([
                    'idpay_diplomado' =>  $id_pay,
                    'url' => $arch,
                    'fecha' => Carbon::now(),
                ]);
            }            
        }
        $this->reset('filesaaa');
        $this->dispatchBrowserEvent('resolve', ['message' => 'llego bien']);
    }
    public function delete_cert_const($id,$tipo){
        if ($tipo) { /* certificado */
            DiplomadoCertificado::where('id', $id)->first()->delete();
        } else { # constancia
            DiplomadoConstancia::where('id', $id)->first()->delete();
        }
        
    }
    public function render()
    {
        if ($this->search !== '' ) {
            $grupos = DiplomadoPay::whereHas('alumno', function ($query) {
                $query->where('user_web.email', 'LIKE','%'.$this->search.'%')->orwhere('user_web.nombres', 'LIKE','%'.$this->search.'%')->orwhere('user_web.apellidos', 'LIKE','%'.$this->search.'%');
            })->paginate(10);
        } else {
            $grupos = DiplomadoPay::whereHas('diplomado_grupo', function ($query) {
                $query->where('diplomado_grupo.tipo_producto', 'vivo');
            })->paginate(10);
        }
        
        return view('livewire.historial-cursovivo',[            
            'grups' => $grupos,
        ])->extends('layout');
    }
}
