<?php

namespace App\Http\Livewire;

use App\Models\PostAlumno;
use App\Models\PostAlumnoLike;
use App\Models\PostAlumnoResp;
use App\Models\User;
use Livewire\Component;

class BodyPost extends Component
{
    public $user_id;
    public $tipo;
    public $posts;
    public $user;
    public $answerss = [];
    public $idPost;
    public $idUser;
    public $cant = 0;


    public $post; /* INPUT ENTRANTE */
    public $answer; /* INPUT ENTRANTE */
    public $postTitle = 'hhhh'; /* INPUT ENTRANTE */


    // public function mount(){
        
    // }
    
    public function render()
    {        
        $this-> user = User::find($this->user_id);
        $this-> posts = $this->user->posts;
        $this-> cant += 1;
        return view('livewire.body-post');
    }

    public function createPost(){
        // $this->validate([
        //     'post' => 'required',
        //     'postTitle' => 'required',
        // ]);

        PostAlumno::create([
            'titulo' => '',
            'contenido' => $this->post,
            'estado' => 1,
            'alumnos_id' => $this-> user->idalum,
        ]);
        $this->post = '';
    }

    public function mostrarAnswers($id){
        $this->idPost = $id;
        $pots =PostAlumno::find($id);
        $this->answerss = $pots->postRespts;
        $this->postTitle = substr($pots->contenido,0,30).'....';
    }
    public function likePost($id, $tipooo){
        if ($tipooo) {
            PostAlumnoLike::create([
                'alumnos_id' => $this-> user->idalum,
                'tipo' => 'post',
                'tipo_id' => $id,
            ]);
        }else{
            PostAlumnoLike::where('alumnos_id',$this-> user->idalum)->where('tipo','post')
                ->where('tipo_id',$id)->delete();
        }
    }
    public function likeAnswer($id, $tipooo){
        if ($tipooo) {
            PostAlumnoLike::create([
                'alumnos_id' => $this-> user->idalum,
                'tipo' => 'resp',
                'tipo_id' => $id,
            ]);
        }else{
            PostAlumnoLike::where('alumnos_id',$this-> user->idalum)->where('tipo','resp')
            ->where('tipo_id',$id)->delete();
        }
        $this->mostrarAnswers($this->idPost);
    }

    public function createAnswer(){
        $this->validate([
            'answer' => 'required',
        ]);

        PostAlumnoResp::create([
            'alumnos_id' => $this-> user->idalum,
            'post_alumn_id' => $this->idPost,
            'contenido' => $this->answer,
            'estado' => 1,
        ]);
        $this->answer = '';
        $this->mostrarAnswers($this->idPost);
    }
}
