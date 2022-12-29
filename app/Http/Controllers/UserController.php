<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(User $user)
    {
        // le rebota si es el mismo usuario
        if(selfUser($user->idalum)){
            return redirect('');
        }
        $userLogueado = Auth::user(); 
        $cursos_asig=[];
        $cursos=[];
        
        $usuario = $user;

        session_start();
        $money = Pais::find(isset($_SESSION['money_user']) ? $_SESSION['money_user'] : 13);
        $simbolo = $money->simbolo;
        $cambio = $money->cambio;
        $cod_iso = $money->cod_iso;
        
        foreach ($usuario->cursoInscripciones as $inscripcion) {
            array_push($cursos,$inscripcion->cursoAsignacion->curso);                   
        }
        if ($userLogueado) {
            foreach ($userLogueado->cursoInscripciones as $inscripcion) {
                array_push($cursos_asig,$inscripcion->cursoAsignacion->curso_idcur);                    
            }    
        }
        $certificados = $usuario->certificados;       
        
        return view('users', [
            'usuario' => $usuario,
            'cursos' => $cursos,
            'cursos_asig' => $cursos_asig,
            'certificados' => $certificados,
            'simbolo' => $simbolo,
            'cambio' => $cambio,
            'cod_iso' => $cod_iso,
        ]);

    }
    public function perfil(){
        return view('perfil-edit');
    }
}
