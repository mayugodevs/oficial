<?php

namespace App\Http\Livewire;

use App\Models\CertificadoCheck;
use App\Models\CursoCertificado;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class RevisarCertificados extends Component
{   use WithPagination;
    use WithFileUploads;
    public $filesaaa;
    public $alumno = false;
    protected $listeners = ['render','save_certificado'];
    
    public function save_certificado($inscripc_id, $certi_check_id, $slug){
        CursoCertificado::create([
            'idinsc' => $inscripc_id,
            'url' => 'mayu-certificado/'.$slug.'/'.$this->filesaaa->getClientOriginalName(),
            'fecha' => Carbon::now(),
            'id_certificado' => substr($this->filesaaa->getClientOriginalName(), 0, -4),
        ]);

        CertificadoCheck::find($certi_check_id)->update([
            'estado' => 1,
        ]); 
        $this->dispatchBrowserEvent('resolve', ['message' => 'Certificado subido']);
    }
    public function datos_user($alumno_id){
        $this->alumno = User::find($alumno_id);
    }
    public function render()
    {
        $certificados = CertificadoCheck::where('estado', 0)->get();
        return view('livewire.revisar-certificados',[
            'certificados' => $certificados,
        ]);
    }
}
