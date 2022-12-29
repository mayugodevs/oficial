<?php

namespace App\Http\Controllers;

use App\Models\Diplomado as ModelsDiplomado;
use App\Models\DiplomadoComentarios;
use App\Models\DiplomadoGrupo;
use App\Models\DiplomadoPagos;
use App\Models\DiplomadoSoporte;
use App\Models\PreguntaFrecuente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Diplomado extends Controller
{
    public function index(DiplomadoGrupo $id)
    {
        // verificar que este alumno este en este diplomado
        // check this user this here diplomado
        $user = Auth::user();
        $inscDiplomado = DiplomadoPagos::where('alumno_id',$user->idalum)->where('diplomados_id',$id->iddiplomado)->first();
        if($inscDiplomado){
            if ($id->tipo_producto == 'Vivo'){
                $cursos = [];
                $cursos_asig = [];
                $soportes = DiplomadoSoporte::all();
                
                foreach ($id->diplCursos as $cursoAsi) {
                    array_push($cursos, $cursoAsi->cursoAsign->curso);
                }
                foreach ($user->cursoInscripciones as $inscripcion) {
                    array_push($cursos_asig,$inscripcion->cursoAsignacion->curso_idcur);                
                }    
                return view('diplomado.curso', [
                    'diplomado_grupo' => $id, 
                    'cursos' => $cursos,
                    'cursos_asig' => $cursos_asig,
                    'inscDiplomado' => $inscDiplomado,
                    'soportes' => $soportes,
                    // 'tipo' => $id->where('tipo_producto','Vivo')->first(), 
                ]);
            } else return redirect('');
        }else return redirect('');
        
    }
    public function grabado(DiplomadoGrupo $id)
    {       
        if ($id->tipo_producto == 'Diplomado'){
            return view('diplomado.grabado', [
                'diplomado_grupo' => $id,
            ]);
        } else return redirect('');
    }
    public function live(DiplomadoGrupo $id)
    {
        $diplomado = $id->diplomado;
        $empresas = $id->diplomadoEmpresas;
        $preguntasFrec = PreguntaFrecuente::where('tipo_servic_id',4)->get();
        $docentes = $id->diplomadoDocentes;
        $modulos = $id->diplomadoModulos;
        return view('diplomado.cursolive', [
            'diplomado_grupo' => $id, 
            'diplomado' => $diplomado, 
            'docentes' => $docentes, 
            'modulos' => $modulos, 
            'preguntasFrec' => $preguntasFrec, 
            'empresas' => $empresas, 
        ]); 
    }
    public function taller(DiplomadoGrupo $id)
    {
        if ($id->tipo_producto == 'free') {
            return view('diplomado.taller', [
                'diplomado_grupo' => $id, 
                
            ]);
        }
        else  return redirect('');
    }
 
    public function show(){
    
        $diplomado = ModelsDiplomado::find(9);
        $clases = $diplomado->modulos;
        $cursos = $diplomado->diplomado_cursos;
        $instructores = $diplomado->diplomado_instructores;
        $empresas = $diplomado->diplomado_empresas;
        $comentarios = DiplomadoComentarios::select('idcomentario','comentario', 'fecha', 'iduser','iddiplomado')->get();
        
        return view('diplomado', [
            'clases' => $clases,
            'cursos' => $cursos,
            'instructores' => $instructores,
            'comentarios' => $comentarios,
            'empresas' => $empresas,
        ]);
    }

    public function cursovivo(){
        $diplomados = DiplomadoGrupo::where('estado',1)->get();
        $inscripciones = [];
        if(Auth::user()){
            foreach (DiplomadoPagos::where('alumno_id',Auth::user()->idalum)->get() as $diplomado) {
                array_push($inscripciones,$diplomado->diplomados_id);
            }
        }
        return view('diplomado.cursoslista',[
            'diplomados' => $diplomados,
            'inscripciones' => $inscripciones,
        ]);
    }
}
