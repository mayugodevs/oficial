<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\CursoAsignacion;
use App\Models\CursoExamenPregt;
use App\Models\CursoExamenRespt;
use App\Models\CursoInscripcion; 
use App\Models\ExamenHistorial;
use App\Models\ExamenTerminos;
use App\Models\Pais;
use App\Models\User;
use App\Models\UserW;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\DB; 

class CursosController extends Controller
{
    public $cursos = [];

    public function index(Curso $id)
    {
        session_start();
        $cursos_asig =[];
        if (Auth::user()) {
            foreach (Auth::user()->cursoInscripciones as $inscripcion) {
                array_push($cursos_asig,$inscripcion->cursoAsignacion->curso_idcur);
            }    
        }
        // *****
        $curso = Curso::find($id->idcur); 

        $curso_tipo = in_array($curso->idcur, $cursos_asig) ? 'fas fa-star' : 'fas fa-lock';
        $trabajadores = $curso->cursoAsignacion->trabajador;
        $cursos = $curso->categoria->cursos->where('estado',1)->where('idcur','!=',$id->idcur);
        $modulos = $curso->cursoModulos;
        $money = Pais::find(isset($_SESSION['money_user']) ? $_SESSION['money_user'] : 13);
        $simbolo = $money->simbolo;
        $cambio = $money->cambio;
        $cod_iso = $money->cod_iso;
        return view('curso', [
            'curso' => $id,   
            'curso_tipo' => $curso_tipo,   
            'trabajadores' => $trabajadores,
            'cursos' => $cursos, 
            'modulos' => $modulos,
            'cursos_asig' => $cursos_asig,
            'simbolo' => $simbolo,
            'cambio' => $cambio,
            'cod_iso' => $cod_iso,
        ]); 
    }
    // terminado 
    public function informeExamen($id){
        $idAlumn = Auth::user()->idalum;
        if(CursoInscripcion::where('asignados_idasig',$id)->where('idalum',$idAlumn)->first()){ 
            $examenHistorial = ExamenHistorial::where('curs_asign_id',$id)
                ->where('alumno_id',$idAlumn)->get(); 
            $fechaInicio='';
            $fechaFin='';
            $fechaReinicio='';
            $respuestaA = 0;
            $now  = Carbon::now();
            $result =0; /* 'MOSTRAR EL CHECK PARA ACEPTAR'; */
            if($examenHistorial->count()>0){  
                foreach ($examenHistorial as $examDetalle) {
                    $fechaInicio=$examDetalle->fecha_inicio;
                    $fechaFin=$examDetalle->fecha_fin;
                    $fechaReinicio=$examDetalle->reinicio;
                }
                
                if($now < $fechaFin){
                    $result = 1; /*  'ESTA DENTRO DEL EXAMEN';*/
                    $cursoModulos = CursoAsignacion::find($id)->cursoModulos; 
                    
                    foreach ($cursoModulos as $modulo) {
                        foreach ($modulo->cursoExamenPreguntas as $pregunta) {
                            foreach ($pregunta->cursoExamPregResp as $respuesta) {
                                if($respuesta->fecha < $fechaFin && $respuesta->fecha > $fechaInicio){
                                    $respuestaA +=1;
                                }                                
                            }            
                        }
                    }

                }else{
                    if($now < $fechaReinicio) $result =-1;/*  'EN POCAS HORAS PODRAS TOMAR NUEVAMNETE'; */
                }
            }

            $cursoDet = CursoAsignacion::find($id);
            $cursoNombre = $cursoDet->curso->nom;
            $cantPreg = 0;
            foreach ($cursoDet->cursoModulos as $modulo) {
                foreach ($modulo->cursoExamenPreguntas as $pregunta) {
                    $cantPreg +=1;
                }
            }
            $termino = $cantPreg == $respuestaA ? true : false;
            return view('curso/examen-informe', [
                'datos_curso' => $cursoNombre,
                'id_curso' => $id,
                'cantPreg' => $cantPreg,            
                'result' => $result,
                'fechaReinicio' => $fechaReinicio,
                'fechaFin' => $fechaFin,
                'termino' => $termino,
    
            ]);
        }else{
            return redirect('');
        }
        
    }

    public function examenTermino($id){   
        if(User::find(16312)->cursoInscripciones->where('asignados_idasig',$id)->where('estado',1)->first()){

            $examenExiste = ExamenTerminos::where('curs_asign_id',$id)->where('alumno_id',16312)->first();
            if ($examenExiste) {
                if($examenExiste->fecha_fin > Carbon::now()){
                    return redirect()->route('checkout');/* Mandar a la vista de examen tomando */
                }
            } else {
                return view('curso.examentermino',[
                    'examen' => 'aceptar el termino y update las fechas que tiene y estado',
                    'id_asig' => $id
                ]);
            }
        }else{
            return redirect()->route('inicio');
        }        
    }

    public function tomarExamen($id){
        $idAlumn = Auth::user()->idalum;
        $cursoExis = 0;
       
        $cursoInscripciones = User::find($idAlumn)->cursoInscripciones;
        foreach ($cursoInscripciones as $cursoInscripcion) {            
            if($id == $cursoInscripcion->cursoAsignacion->idasig) $cursoExis += 1;
        }
        if($cursoExis ==1){ // verificar si el alumno tiene ese curso asignado

            $examenHistorial = ExamenHistorial::where('curs_asign_id',$id)
                ->where('alumno_id',$idAlumn)->get();
         
            $fechaInicio='';
            $fechaFin='';
            $fechaReinicio='';
            $respuestResp = 0;
            $now  = Carbon::now();
            $result =0; /* 'MOSTRAR EL CHECK PARA ACEPTAR'; */
            if($examenHistorial->count()>0){  
                foreach ($examenHistorial as $examDetalle) {
                    $fechaInicio=$examDetalle->fecha_inicio;
                    $fechaFin=$examDetalle->fecha_fin;
                    $fechaReinicio=$examDetalle->reinicio;
                }
                
                if($now < $fechaFin){
                    $result = 1; /*  'ESTA DENTRO DEL EXAMEN';*/
                    $cursoModulos = CursoAsignacion::find($id)->cursoModulos; 
                    
                    foreach ($cursoModulos as $modulo) {
                        foreach ($modulo->cursoExamenPreguntas as $pregunta) {
                            foreach ($pregunta->cursoExamPregResp as $respuesta) {
                                if($respuesta->fecha < $fechaFin && $respuesta->fecha > $fechaInicio){
                                    $respuestResp +=1;
                                }                                
                            }            
                        }
                    }

                }else{
                    if($now < $fechaReinicio) $result =-1;/*  'EN POCAS HORAS PODRAS TOMAR NUEVAMNETE'; */
                }
            }
            $cursoModulos = CursoAsignacion::find($id)->cursoModulos;
            $preguntas = array();
            $respuestaA = array();
            foreach ($cursoModulos as $modulo) {
                foreach ($modulo->cursoExamenPreguntas as $pregunta) {
                    foreach ($pregunta->cursoExamPregResp as $respuesta) {
                        $respuesta->fecha < $fechaFin && $respuesta->fecha > $fechaInicio ? array_push($respuestaA,$respuesta->idpregunta) : 0;
                        
                    }                
                    foreach ($pregunta->cursoExamPregtOpcs as $opcion) {
                        array_push($preguntas, [
                            'estado' => in_array($pregunta->idpregunta, $respuestaA) ? 1: 0,
                            'idpregunta' => $pregunta->idpregunta,
                            'pregunta' => $pregunta->pregunta,
                            'instruccion' => $pregunta->instruccion,
                            'respuestas' => [
                                'idpregunta' => $opcion->idpregunta,
                                'texto' => $opcion->texto,
                                'tipo' => $opcion->tipo,
                            ]
                        ]);
                    }                
                }
            }
            $cursoModulos = CursoAsignacion::find($id)->cursoModulos;
            $cursoDet = CursoAsignacion::find($id);
            $cursoNombre = $cursoDet->curso->nom;
            $cantPreg = 0;
            foreach ($cursoDet->cursoModulos as $modulo) {
                foreach ($modulo->cursoExamenPreguntas as $pregunta) {
                    $cantPreg +=1;
                }
            }
            
            $termino = $cantPreg == $respuestResp ? true : false;
            if($result != 0){
                return view('curso/tomar-examen', [
                    'id_curso' => $id,
                    'result' => $result,
                    'termino' => $termino,
                    'fechaFin' => $fechaFin,
                    'fechaReinicio' => $fechaReinicio,
                    'preguntas' => $preguntas,
                    'cursoNombre' => $cursoNombre,
    
                ]);
            }else{
                return redirect('');
            }
            
        }else return redirect('');
    }

    public function resultados($id){
        $idAlumn = Auth::user()->idalum;
        $cursoExis = 0;
        $idHistorial = 0;
        $cursoInscripciones = User::find($idAlumn)->cursoInscripciones;
        foreach ($cursoInscripciones as $cursoInscripcion) {            
            if($id == $cursoInscripcion->cursoAsignacion->idasig){
                $cursoExis += 1;
            }
        }
        if($cursoExis ==1){ // verificar si el alumno tiene ese curso asignado
            $examenHistorial = ExamenHistorial::where('curs_asign_id',$id)
                ->where('alumno_id',$idAlumn)->get();
            $fechaInicio='';
            $fechaFin='';
            foreach ($examenHistorial as $examDetalle) {
                $fechaInicio=$examDetalle->fecha_inicio;
                $fechaFin=$examDetalle->fecha_fin;
                $idHistorial = $examDetalle->id;
                $reinicio = $examDetalle->reinicio;
            }
            $curso = CursoAsignacion::find($id);
            $cursoNombre = $curso->curso->nom;
            $preguntas =array();
            foreach ($curso->cursoModulos as $modulo) {
                foreach ($modulo->cursoExamenPreguntas as $pregunta) {
                    $tipo = 0;
                    $respuestaa = 0;
                    foreach ($pregunta->cursoExamPregResp as $respuesta) {
                        $tipo = 1;  
                        $respuestaa = $respuesta;  

                    }
                    array_push($preguntas, [
                        'estado' => $respuestaa->fecha > $fechaInicio && $respuestaa->fecha < $fechaFin  ? 1 : 0,/* SIGNIFICA QUE ESTAN EN LA HORA CORRECTA */
                        'idResp' => $respuesta->identregap ,
                        'idpregunta' => $respuesta->idpregunta,
                        'pregunta' => $pregunta->instruccion,
                        'nota' => $tipo == 0 ? 0 : $respuesta->nota,
                    ]);
                    $tipo = 0;
                    $respuestaa = 0;
                    
                }
            }
            $a = count($preguntas);
            $puntaje = 0;

            return view('curso/resultados',[
                'idAsign' => $id,
                'cursoNombre' => $cursoNombre,
                'preguntas' => $preguntas,
                'cant' => $a,
                'puntaje' => $puntaje,
                'idHistorial' => $idHistorial,
                'reinicio' => $reinicio,
            ]);
        }else{
            return redirect('');
        }
    }

    public function categoriaCurso($slug){
        return view('categoria-curso',compact('slug'));
    }

    public function saveRespuesta(Request $request){
        $idAlumn = Auth::user()->idalum;
        $idPregunta = $request ->input('idPregunta');
        $option = $request ->input('option');
        $d = CursoExamenPregt::find($idPregunta)->val_proyecto;
        $nota = $option == CursoExamenPregt::find($idPregunta)->val_proyecto ? 100 : 0;
        CursoExamenRespt::create([
            'valor' => $option,
            'idalumno' => $idAlumn,
            'idpregunta' => $idPregunta,
            'nota' => $nota,
        ]);
        return response()->json(
            ['resultado'=>[$d,$nota]], 
        200);
    }
    public function saveNota(Request $request)
    {
        $notaFinal = $request->input('notaFinal');
        $idHistorial = $request->input('idHistorial');

        ExamenHistorial::find($idHistorial)->update([
            'aprobo' => $notaFinal,
            'estado' => 0,
        ]);          

        return response()->json(
            ['message'=> 'ok'], 
        200);
    }
    
    public function validarTerminos(Request $request){
        $idAsig = $request ->input('idAsig');
        $fechaFin = $request ->input('fechaFin');
        $now = Carbon::now();
        $sumado = Carbon::now();
        $reinicio = Carbon::now();

        $idAlumno = Auth::user()->idalum;
        $ExamenHistorial= ExamenHistorial::where('alumno_id',$idAlumno)
        ->where('curs_asign_id',$idAsig);
        $resul = $ExamenHistorial->count();
        if($resul > 0){
            $ExamenHistorial->update([
                'fecha_inicio' => $now,
                'fecha_fin' => $sumado->addMinutes($fechaFin),
                'estado' => 1,
                // 'aprobo' => 0,
                'reinicio' => $reinicio->addHours(6),
            ]);
        }else{
            ExamenHistorial::create([
                'fecha_inicio' => $now,
                'fecha_fin' => $sumado->addMinutes($fechaFin),
                'alumno_id' => $idAlumno,
                'curs_asign_id' => $idAsig,
                'estado' => 1,
                'aprobo' => 0,
                'reinicio' => $reinicio->addHours(6),
            ]);
        }
        return route('tomar.examen', ['id'=>$idAsig]);
    }

    public function cursoGestion($idAsig){
        return view('admin/curso-gestion',compact('idAsig'));  
    }
    public function allCourses(){
        $cursos = Curso::where('estado',1)->paginate(10);
        return view('admin.curso-all',compact('cursos'));
    } 

    public function paisip(){
        $alums =DB::table('user_web22')->where('estado','Activo')->get();
        return view('paisipip',compact('alums'));
    }

    public function savePais(Request $request){
        $idAlumno = $request->input('idAlumno');
        $ip = $request->input('ip');
        $pais = $request->input('pais');

        UserW::find($idAlumno)->update([
            'pais' => $pais
        ]);

        return response()->json([
                'resultado'=>[$idAlumno,$pais],
            ], 
        200);
    }

}
