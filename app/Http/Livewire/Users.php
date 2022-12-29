<?php

namespace App\Http\Livewire;

use App\Models\AnswersPost;
use App\Models\PostCliente;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Users extends Component
{   
    public $user_log;
    public $perfil;
    public $estado = 1;
    public $mensaje;
    public $cursos_comprados_log = [];
    public $cursos_comprados = [];
    public $posts = [];
    public $idPost;
    public $answerss = [];
    public $answer;


    public $post = false;
    public $curso = true;

    public function mount($id){
        $this->perfil = User::find($id);
        $this->user_log = Auth::user();
        
    }

    public function render(){  
        if ($this->post) {            
            $this->mensaje = 'POST';
            $this->cursos_comprados_log = [];
            $this->cursos_comprados = [];
            $this->mostrarPosts();
        } elseif($this->curso) {            
            $this -> mensaje = 'CURSO';
            $this-> posts = [];
            $this->mostrarCursos();
        }        
        return view('livewire.users');
    }

    public function cursos(){
        $this->curso = true;
        $this->post = false;        
    }
    
    public function posts(){
        $this->curso = false;
        $this->post = true;       
    }

    public function mostrarCursos(){
        foreach ($this -> perfil->cursoInscripciones as $inscripcion) {
            array_push($this->cursos_comprados,$inscripcion->cursoAsignacion->curso);
        }
        foreach ($this -> user_log->cursoInscripciones as $inscripcion) {
            array_push($this->cursos_comprados_log,$inscripcion->cursoAsignacion->curso->idcur);
        }
    }

    public function mostrarPosts(){
        $this->posts = $this->perfil -> posts;
    }

    public function mostrarAnswers($id){
        $this->idPost = $id;
        $this->answerss = PostCliente::find($id)->answers;
    }

    public function createAnswer(){
        $this->validate([
            'answer' => 'required',
        ]);

        AnswersPost::create([
            'user_id' => Auth::user()->idalum,
            'post_id' => $this->idPost,
            'answer' => $this->answer,
            'estado' => 1,
        ]);
        $this->answer = '';
        $this->mostrarAnswers($this->idPost);
    }
}
