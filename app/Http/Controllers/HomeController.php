<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\CursoAsignacion;
use App\Models\DiplomadoGrupo;
use App\Models\Pais;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{ 
    public function index(){
        session_start();
        $money = Pais::find(isset($_SESSION['money_user']) ? $_SESSION['money_user'] : 13);
        $simbolo = $money->simbolo;
        $cambio = $money->cambio;
        $cod_iso = $money->cod_iso;

        $cursos_asig = [];
        $cursos = [];

        //si el usuario esta logueado,leeremos sus cursos y otros relacionados 
        $user = Auth::user();
        // dd($user);
        if ($user) {
            foreach ($user->cursoInscripciones as $inscripcion) {
                array_push($cursos_asig, $inscripcion->cursoAsignacion->curso_idcur);
            }
        }

        $asignaciones = CursoAsignacion::where('estado', 1)->orderBy('fecha', 'DESC')->take(4)->get();
        foreach ($asignaciones as $asignacion) {
            array_push($cursos, $asignacion->curso);
        }

        $diplomados = DiplomadoGrupo::where('estado', 1)->orderBy('inicio', 'DESC')->get();

        $especialidades = Categoria::select('idc', 'nombre', 'precio', 'slug', 'img')->where('estado', 1)->get();

        return view('home', [
            'especialidades' => $especialidades,
            'cursos' => $cursos,
            'simbolo' => $simbolo,
            'cambio' => $cambio,
            'cod_iso' => $cod_iso,
            'diplomados' => $diplomados,
            'cursos_asig' => $cursos_asig,
            'carr' => showCarts(1),
        ]);
    }
}
