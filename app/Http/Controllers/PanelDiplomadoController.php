<?php

namespace App\Http\Controllers;

use App\Models\Diplomado;
use App\Models\DiplomadoGrupo;
use App\Models\DiplomadoPagos;
use Illuminate\Support\Facades\Auth; 

class PanelDiplomadoController extends Controller
{ 
    public function student(DiplomadoGrupo $id)
    {
        $cursos = array();
        $metricas = $this->metricas($id, Auth::user()->idalum);
        return view('panel-diplomado',[
            'slug' => $id,
            'porcCert' => $metricas[0],
            'porceMart' => $metricas[1],
            'porcPreg' => $metricas[2],
            'porcTar' => $metricas[3],
            'cursos' => $cursos,
        ]);
    } 

    public function metricas($id, $user){
        $cursosTot = 0;
        $cert = 0;

        $materTot = 0;
        $matervist = 0;

        $pregTot= 0;
        $pregResp=0;

        $tarTot=0;
        $entrTot=0;
        $cursosTot = count($id->diplCursos);
        foreach ($id->diplCursos as $key => $diplomado_curso) {
            foreach ($diplomado_curso->cursoAsign->cursoInscripcion->where('idalum',$user)->where('asignados_idasig',$diplomado_curso->cursoAsign->idasig)->get() as $item) {
                if ($item->cursoCertificado) $cert +=1;
                $matervist += count($item->historialVideos);
                $entrTot += count($item->cursoTareaEntregas); 
            }
            foreach ($diplomado_curso->cursoAsign->cursoModulos as $modulo) {
                $materTot +=count($modulo->cursoMateriales);
                $pregTot +=count($modulo->cursoExamenPreguntas);
                $tarTot += count($modulo->cursoTareaModulos);

                foreach ($modulo->cursoExamenPreguntas as $pregunta) {
                    $pregResp = $pregunta->cursoExamPregResp
                        ->where('idalumno', $user)->count();
                }
            }
        } 
        $porcCert = round(($cert/$cursosTot)*100);
        $porceMart = round(($matervist/$materTot)*100);
        $porcPreg = round(($pregResp/$pregTot)*100);
        $porcTar = round(($entrTot/$tarTot)*100);
        return [$porcCert,$porceMart,$porcPreg,$porcTar];
        
    }
     
    public function show()
    {   
        $cursosTot = 0;
        $cert = 0;
        $porcCert =0;

        $materTot = 0;
        $matervist = 0;
        $porceMart = 0;

        $pregTot= 0;
        $pregResp=5;
        $porcPreg=0;

        $tarTot=0;
        $entrTot=0;
        $porcTar=0;

        $eeee=0;

        $idDiplomado =1;
        $diplomado_cursos = Diplomado::find($idDiplomado)->diplomadoInscripcion;
        $cursosTot = count($diplomado_cursos);
        foreach ($diplomado_cursos as $key => $diplomado_curso) {
            foreach ($diplomado_curso->cursoAsignacion->cursoInscripcion->where('idalum',Auth::user()
                ->idalum)->where('asignados_idasig',$diplomado_curso->cursoAsignacion->idasig)->get() as $item) {
                if ($item->cursoCertificado) {
                    $cert +=1;
                }
                $matervist += count($item->historialVideos);
                $eeee += count($item->cursoTareaEntregas); 
            }
            foreach ($diplomado_curso->cursoAsignacion->cursoModulos as $contenido) {
                $materTot +=count($contenido->cursoMateriales);
                $pregTot +=count($contenido->cursoExamenPreguntas);
                $tarTot += count($contenido->cursoTareaModulos);

                foreach ($contenido->cursoExamenPreguntas as $pregunta) {
                    $pregResp = count($pregunta->cursoExamPregResp
                        ->where('idalumno', Auth::user()->idalum));
                }
            }
        }
        
        $porcCert = round(($cert/$cursosTot)*100);
        $porceMart = round(($matervist/$materTot)*100);
        $porcPreg = round(($pregResp/$pregTot)*100);
        $porcTar = round(($eeee/$tarTot)*100);

        return view('panel-diplomado',[
            'diplomado_cursos' => $diplomado_cursos,
            'porcCert' => $porcCert,
            'porceMart' => $porceMart,
            'porcPreg' => $porcPreg,
            'porcTar' => $porcTar,
        ]);

    } 
     
}
