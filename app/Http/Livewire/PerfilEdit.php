<?php

namespace App\Http\Livewire;

use App\Models\CursoAsignacion;
use App\Models\CursoCertificado;
use Livewire\Component;
use Livewire\WithFileUploads;


class PerfilEdit extends Component
{
    use WithFileUploads;
    public $user;
    public $fotoTemporal= NULL;

    public $nombre, $img, $apellidos, $telf, $about_me, $genero, $pais, $fecha_nac, $estud;
    
    public $perfil_inst, $perfil_face, $perfil_tikt, $perfil_link;

    public $grados, $paises, $categorias, $mismoGradoPais = 0, $mismoGrado = 0, $cursosTerminados = 0, $cursosCertificados = 0;

    public $cursos_asig = [], $cursos_llevando = [], $userPremiu = [], $usersParecid = [], $lastCourse = [];

    public $plan_referidos = [];

    protected $listeners = ['saveDatosUser'];
    protected $rules = [
        'fotoTemporal' => [
            // 'required',
            'mimes:jpg,png,jpeg',
            'max:4096',
        ],
    ];
    protected $messages = [
        'fotoTemporal.mimes' => 'Solo imagen',
        'fotoTemporal.max' => 'Menos de 4MB la imagen ',
    ];

    public function mount(){
        // $this->userPremiu = PlanesAlumno::where('idplan',2)->orderByDesc('fecha_pago')->get()->take(10);
        // $this->usersParecid = User::where('pais',$this->user->pais)->where('nivel_edu',$this->user->nivel_edu)->get()->take(5);
        
        session_start();
        $this->user = getUser();  
        $this->grados = getGrados();
        $this->paises = getCountries();
        $this->categorias = getCategories();
        $this->mismoGradoPais = count($this->user->paisU->alumnos) + rand(400,500);
        $this->mismoGrado = count($this->user->grado->alumnos->where('nivel_edu',$this->user->nivel_edu)) + rand(400,500);
        $this->plan_referidos = plan_referidos($this->user->idalum);
        $this->lastCourse = lastCourse(); 
        $this->setDatosUser();
        
        foreach ($this->user->cursoInscripciones as $inscripcion) { 
            array_push($this->cursos_asig,$inscripcion->cursoAsignacion->curso_idcur);                    
            $this->cursosTerminados += $this->porcentajeCurso($inscripcion->cursoAsignacion->idasig);
            $this->cursosCertificados += $this->verificarCertificado($inscripcion->idinsc);                  
        }
        $this->cursos_llevando = $this->user->cursoInscripciones->where('estado',1)->take(3); 
        
    }
    public function cambioPaisUser(){
        $this->user->update([
            'pais' => $this->pais
        ]);
        $this->dispatchBrowserEvent('resolve', ['message' => 'País cambiado']);
    }
    public function cambioGradoUser(){
        $this->user->update([
            'nivel_edu' => $this->estud
        ]);
        $this->dispatchBrowserEvent('resolve', ['message' => 'Grado cambiado']);
    }
    public function porcentajeCurso(int $idasig) :int{
        $asignado = CursoAsignacion::find($idasig);
        $mat = 0;
        $vist = 0;
        foreach ($asignado->cursoModulos as $contenido) {
            foreach ($contenido->cursoMateriales as $value) {
                $vist += count($value->historialVideos->where('iduser',$this->user->idalum));              
            }
            $mat += count($contenido->cursoMateriales);
        }
        $porc = round(($vist/$mat)*100) == 100 ? 1 : 0;
        return $porc;
    }
    public function verificarCertificado($idinsc){
        $existe = CursoCertificado::where('idinsc',$idinsc)->count();
        return $existe;
    }   
    public function saveFoto(){
        if ($this->fotoTemporal) {
            if($this->validate()){
                $urlImg ='avatar'.rand().'.'.$this->fotoTemporal->getclientOriginalExtension();
                $this->fotoTemporal->storeAs('images/picture/',$urlImg,'public_uploads');
                $this->user->update([
                    'avatar' => 'images/picture/'.$urlImg
                ]);
                $this->avatar = 'images/picture/'.$urlImg;  
                $this->dispatchBrowserEvent('resolve', ['message' => 'Foto edita correctamente']);
            }   
            else $this->dispatchBrowserEvent('resolve', ['message' => 'no pasa fot']);            
        }else $this->dispatchBrowserEvent('reject', ['message' => 'Escoge alguna imagen']);
    }
    public function saveDatosUser(){
        $this->user->update([
            'nombres' => $this->nombre,
            'apellidos' => $this->apellidos,
            'fecha_nac' => $this->fecha_nac,
            'telf' => $this->telf,
            'genero' => $this->genero,
            'about_me' => $this->about_me,
            'perfil_face' => $this->perfil_face,
            'perfil_link' => $this->perfil_link,
            'perfil_inst' => $this->inst,
            'perfil_tiktok' => $this->tikt,
        ]);
        $this->dispatchBrowserEvent('resolve', ['message' => '¡Datos editados correctamente!']);
    }
    public function setDatosUser(){
        $this->nombre = $this->user->nombres;
        $this->apellidos = $this->user->apellidos;
        $this->img = $this->user->avatar; 
        $this->telf = $this->user->telf;
        $this->genero = $this->user->genero;
        $this->fecha_nac = $this->user->fecha_nac;
        $this->perfil_face = $this->user->perfil_face;
        $this->perfil_link = $this->user->perfil_link;
        $this->inst = $this->user->perfil_inst;
        $this->tikt = $this->user->perfil_tiktok;
        $this->pais = $this->user->pais;
        $this->estud = $this->user->nivel_edu;
        $this->about_me = $this->user->about_me;
    }
    public function render()
    {            
        if($this->fotoTemporal !== NULL){
            $this->saveFoto();
            $this->reset('fotoTemporal'); 
        } 
        return view('livewire.perfil-edit')->extends('layout');
    }  

    
}
