<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use App\Models\DiplomadoGrupo;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Buscador extends Component
{
    public $filtro = '';
    public $curso_estado = true;
    public $dipl_estado = true;
    public $cursos = [];
    public $espect = []; 

    public function render()
    {
        if(strlen($this->filtro) >= 4){
            $this->cursos =Curso::join('categorias', 'categorias.idc', '=', 'cursos.idc')
                ->join('curso_asignaciones', 'cursos.idcur', '=', 'curso_asignaciones.curso_idcur')
                ->join('curso_modulos', 'curso_asignaciones.idasig', '=', 'curso_modulos.idasig')
                ->join('curso_material', 'curso_modulos.idc', '=', 'curso_material.idc')
                ->join('curso_contenidos', 'curso_modulos.idc', '=', 'curso_contenidos.idcon')
                ->select('cursos.nom', 'cursos.slug')
                ->distinct('cursos.idcur')
                ->where('cursos.nom','like','%'.$this->filtro.'%')
                ->orWhere('categorias.nombre','like','%'.$this->filtro.'%')
                ->orWhere('curso_modulos.nom','like','%'.$this->filtro.'%')
                ->orWhere('curso_material.material','like','%'.$this->filtro.'%')
                ->orWhere('curso_contenidos.modulo','like','%'.$this->filtro.'%')
                ->get();
            $this->curso_estado = true;
            if(count($this->cursos) <= 0){
                $this->curso_estado = false;
                $this->cursos = Curso::select('curso_asignaciones.idasig','cursos.idcur', 'cursos.img', 'cursos.nom', 'cursos.slug','cursos.precio','cursos.predsct',DB::raw('count(curso_asignaciones.idasig) as total'))
                    ->join('curso_asignaciones','cursos.idcur', '=', 'curso_asignaciones.curso_idcur')
                    ->join('curso_inscripcion','curso_asignaciones.idasig','=','curso_inscripcion.asignados_idasig')
                    ->distinct('cursos.idcur')
                    ->where('curso_inscripcion.tipo','!=','Premium')
                    ->where('curso_inscripcion.tipo','!=','Profesional')
                    ->where('curso_inscripcion.tipo','!=','Básico')
                    ->where('curso_inscripcion.tipo','!=','Diplomado')
                    ->where('curso_inscripcion.monto','>',0)
                    ->groupBy('curso_asignaciones.idasig','cursos.idcur', 'cursos.img', 'cursos.nom', 'cursos.slug','cursos.precio','cursos.predsct')
                    ->orderBy('total','DESC')
                    ->get()->take(12);
            }
            $this->espect = DiplomadoGrupo::select('diplomado_grupo.iddiplomado','diplomado_grupo.titulo')
            ->where('diplomado_grupo.titulo','like','%'.$this->filtro.'%')
            // ->where('diplomados.inicio','>', date('Y-m-d'))
            ->get();
            $this->dipl_estado = true;
            if(count($this->espect) <= 0){
                $this->dipl_estado = false;
                $this->espect = DiplomadoGrupo::all();
            }
        }
        return view('livewire.buscador');
    }
    public function btn_submit(){
        if(strlen($this->filtro) >= 4) redirect()->route('buscador', ['txt' => $this->filtro]);
        else $this->dispatchBrowserEvent('reject',['message' =>'Algunas letritas mas compa']);
    }
}

