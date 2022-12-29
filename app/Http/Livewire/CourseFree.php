<?php

namespace App\Http\Livewire;

use App\Models\CursoInscripcion;
use App\Models\Singup;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class CourseFree extends Component
{
    public $user = false;
    public $user_id = false;
    public $type = false;
    public $registerModal = false;
    public $lists; 
    public $name_r; 
    public $last_r; 
    public $phone_r; 
    public $email_r; 
    public $pass1_r; 
    public $pass2_r; 
    public $id_asing=false;//seleccionado por el user  
    public $cursos_acceso = [];
    public $cursos_asig = [];
    public $cursos_asig_vencidos = [];
    public $cursos_asig_free = [];
    // public $email, $password;
    // public $form = [
    //     'email'   => '',
    //     'password'=> '',
    // ];
    protected $listeners = ['registerUser'];
    public function mount(){
        // $user = 
        $this->user =  Auth::user() ? Auth::user() : false;
        $this->user_id = $this->user ?  $this->user->idalum  : false;
        $this->type =  $this->user ? $this->user->tipo : false;
        // $this->lists =  Singup::where('tipo_id',5)->whereBetween('fecha_inicio', [$this->dias(0), $this->dias(1)])->get(); //5 es free
        $this->lists =  Singup::where('tipo_id',5)->where('fecha_inicio', $this->dias(0))->get(); //5 es free
        $this->statusCourses();
    }
    public function dias($tipo){
        // $this->lists =  Singup::where('tipo_id',5)->where('fecha_inicio','>', $this->dias(0))->get(); //5 es free
        $diaSemana = date("w")-1; 
        # Calcular el tiempo (no la fecha) de cuándo fue el inicio de semana
        $tiempoDeInicioDeSemana = strtotime("-" . $diaSemana . " days"); # Restamos -X days
        # Y formateamos ese tiempo
        $fechaInicioSemana = date("Y-m-d", $tiempoDeInicioDeSemana);
        # Ahora para el fin, sumamos
        $tiempoDeFinDeSemana = strtotime("+" . (7-$diaSemana) . " days", $tiempoDeInicioDeSemana); # Sumamos +X days, pero partiendo del tiempo de inicio
        # Y formateamos
        $fechaFinSemana = date("Y-m-d", $tiempoDeFinDeSemana);
        return $tipo ? $fechaFinSemana :  $fechaInicioSemana;
    }
    public function registerUser(){
        $user = User::create([
            'nombres' => $this->name_r,
            'apellidos' => $this->last_r,
            'telf' => $this->phone_r,
            'email' => $this->email_r,
            'pass' => Hash::make($this->pass1_r), 
            'pais' => 1, 
        ]);
        CursoInscripcion::create([
            'idalum' => $user->idalum,
            'asignados_idasig' => $this->id_asing,
            'tipo_pago' => 'Regalo',
            'estado' => 1,
            'monto' => 0,
            'tipo' => 'free',
            'fecha' => Carbon::now(),
            'fecha_inicio' => Carbon::now(),
            'fecha_fin' => Carbon::now()->addDay(),
        ]); 
        Auth::loginUsingId($user->idalum);
        return redirect()->route('inicio');/* llevar al curso  */

    }
    public function InscribCourse($id_asing){
        $this->id_asing = $id_asing;
        if($this->user){
            CursoInscripcion::create([
                'idalum' => $this->user_id,
                'asignados_idasig' => $id_asing,
                'tipo_pago' => 'Regalo',
                'estado' => 1,
                'monto' => 0,
                'tipo' => 'free',
                'fecha' => Carbon::now(),
                'fecha_inicio' => Carbon::now(),
                'fecha_fin' => Carbon::now()->addDay(),
            ]);
            // return redirect()->route('inicio');
        }else {//Primero loguearse
            $this->id_asing = $id_asing;
            $this->registerModal = true; 
        }
    }
    public function statusCourses(){
        if ($this->user) {
            foreach ($this->user->cursoInscripciones as $inscripcion) { 
                // courses con acceso
                if($inscripcion->fecha_fin > Carbon::now() && $inscripcion->tipo != 'free'){                
                    array_push($this->cursos_acceso,$inscripcion->cursoAsignacion->idasig);               
                }
                // courses vencidos
                if($inscripcion->fecha_fin < Carbon::now() && $inscripcion->tipo != 'free'){                
                    array_push($this->cursos_asig,$inscripcion->cursoAsignacion->idasig);               
                }
                // free but vencidas
                if($inscripcion->fecha_fin < Carbon::now() && $inscripcion->tipo == 'free'){
                    array_push($this->cursos_asig_vencidos,$inscripcion->cursoAsignacion->idasig);    
                }
                // courses free y llevando
                if($inscripcion->tipo == 'free' && $inscripcion->fecha_fin > Carbon::now() /* && $inscripcion->fecha_inicio < Carbon::now() */){  
                    array_push($this->cursos_asig_free,$inscripcion->cursoAsignacion->idasig);
                }
            }    
        }
    }
    public function render()
    { 
        
        return view('livewire.course-free')->extends('layout');
    }

    // pedir loguearse cuando no lo esta
    // impedir si ya llevo el curso anteriormente y su fecha esta vencida tendra que comprarlo}
    
}
