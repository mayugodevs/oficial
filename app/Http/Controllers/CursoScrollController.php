<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CursoScrollController extends Controller
{
    public function scroll(){
        $page2 = $_GET['page'];/* RECOGER DE LA URL LA PAGE */
        $datosCurso = Curso::orderBy('idcur','desc')->where('estado',1);
        $cursos_asig_id = [];
        //si el usuario esta logueado,leeremos sus cursos y otros relacionados 
        if (Auth::user()) {
            $user = Auth::user();
            foreach ($user->cursoInscripciones as $inscripcion) {
                array_push($cursos_asig_id,$inscripcion->cursoAsignacion->curso_idcur);                
            }    
        }
        $cantTotal = 8*$page2;
        $cursos = $datosCurso->take($cantTotal)->get();
        return view('cursos-scroll', [
            'cursos' => $cursos,
            'cursos_asig_id' => $cursos_asig_id,
        ]);
    }
}
