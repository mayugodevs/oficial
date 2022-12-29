<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Curso;
use App\Models\Cursos;
use Illuminate\Support\Facades\Auth;

class EspController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos_asig_id = [];
        
        //si el usuario esta logueado,leeremos sus cursos y otros relacionados 
        $user = Auth::user();
        if ($user) {
            foreach ($user->cursoInscripciones as $inscripcion) {
                array_push($cursos_asig_id,$inscripcion->cursoAsignacion->curso_idcur);                
            }    
        }

        $especialidades = Categoria::select('idc','nombre','precio','slug','img')->get();
        $cursos = Curso::orderBy('idcur','desc')->where('estado',1)->take(20)->get();
        return view('home', [
            'especialidades' => $especialidades,
            'cursos' => $cursos,
            'cursos_asig_id' => $cursos_asig_id,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */   
} 
 