<?php

namespace App\Http\Livewire;

use App\Models\PostAlumno;
use App\Models\PostAlumnoLike;
use App\Models\PostAlumnoResp;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
class PostComunidad extends Component
{
    use WithFileUploads;
    public $posts;
    public $idPosts = [];
    public $postU;
    public $files = [];
    public $imagenes = [];
    public $usuario;/* 0 => de todos, 1 => usuario logueado, 2 => usuario especifico */
    public $id_u;
    public $user;
    public $iduser;
    
    public $lista_user=false;
    public $users = array();
    public $idPost;
    public $hora;
    public $answerss = [];
    // public $postTitle;
    public $respComun = '';
    // pára eliminar los post
    public $idd = 0;
    public $tipo = 0;
    protected $rules = [
        'files.*' => [
            'required',
            'mimes:jpg,png,jpeg',
            'max:4096',
        ],
    ];
    public function mount($id_u=0){
        $this->user = Auth::user();
        $this->iduser = $this->user->idalum;
        $this->hora = Carbon::now();
    } 
    protected $listeners = ['createPost','deletePostt','guardarResp'];
    public function render()
    {        
        $this->listPosts();
        return view('livewire.post-comunidad');
    }
    public function listPosts(){
        if($this->usuario ===  1){
            $this->posts = PostAlumno::where('estado',1)->where('alumnos_id',$this->iduser)
                ->orderBy('id','DESC')->get();
        }elseif($this->usuario === 0){
            $this->posts = PostAlumno::where('estado',1)->orderBy('id','DESC')->get();
        }else{
            $this->posts = PostAlumno::where('estado',1)->where('alumnos_id',$this->id_u)
                ->orderBy('id','DESC')->get();
        }
    }
    public function guardarResp($resp){
        PostAlumnoResp::create([
            'contenido' => $resp,
            'estado' => 1,
            'fecha' => now(),
            'post_alumn_id' => $this->idPost,
            'alumnos_id' =>  $this->iduser,
        ]);
        $this->dispatchBrowserEvent('resolve',['message'=>'GUARDANDO'.$this->idPost]);
        $this->showAnswers($this->idPost);    
         
    }
    public function confirmDelete($id,$type=0){
        $this->idd = $id;
        $this->tipo = $type;
        $this->dispatchBrowserEvent('confirmDelete',['message' => 'Respuesta eliminado']);
    }
    public function deletePostt(){

        if ($this->tipo) {
            PostAlumnoResp::find($this->idd)->update([
                'estado' => 0,
            ]);
            $this->showAnswers($this->idPost);
            $this->dispatchBrowserEvent('resolve',['message' => 'Respuesta eliminado']);
        } else {
            PostAlumno::find($this->idd)->update([
                'estado' => 0,
            ]);
            $this->dispatchBrowserEvent('resolve',['message' => 'Post eliminado']);
        }        
    }
    public function createPost($contenido){
        $this->validate([
            'files.*' => [
                'required',
                'mimes:jpg,png,jpeg',
                'max:4096',
            ],
        ]);
        $this->cantImg = true;
        if($contenido != '' ){
            if (count($this->files) <=2) {
                $this->dispatchBrowserEvent('errorr', ['message' => false]);
                foreach ($this->files as $files) {                
                    $urlImg ='post'.rand().'.'.$files->getclientOriginalExtension();
                    $files->storeAs('images/post/',$urlImg,'public_uploads');
                    array_push($this->imagenes,'images/post/'.$urlImg);
                }
                PostAlumno::create([
                    'titulo' => '',
                    'imagen' => implode(",", $this->imagenes),
                    'contenido' => $contenido,
                    'estado' => 1,
                    'alumnos_id' => Auth::user()->idalum,
                ]);
                $this->dispatchBrowserEvent('errorr', ['message' => true]);
                $this->dispatchBrowserEvent('resolve',['message' => 'Post creado']);
            } else {
                $this->dispatchBrowserEvent('reject',['message' => 'Maximo dos imagenes']);
            }
            $this->reset(['files','imagenes']);
            
        }else{
            $this->dispatchBrowserEvent('reject',['message' => 'Título vacio']);
        }
    }
    public function showAnswers($id){
        $this->idPost = $id;
        $pots = PostAlumno::find($id);
        $this->answerss = $pots->postRespts->where('estado',1)->sortByDesc('id');
        // if (count($this->answerss) > 0) {
        //     $this->reset('users');
        //     // $this->lista_user = true;
        //     foreach ($this->answerss as $answer) {
        //         array_push($this->users, $answer->alumno); 
        //     }
        // } 
        // $this->dispatchBrowserEvent('cambioIdPost',['id' => $this->idPost]);
    }
    public function likePost($id, $tipooo){
        if ($tipooo) {
            PostAlumnoLike::create([
                'alumnos_id' => Auth::user()->idalum,
                'tipo' => 'post',
                'tipo_id' => $id,
            ]);
        }else{
            PostAlumnoLike::where('alumnos_id', Auth::user()->idalum)->where('tipo','post')
            ->where('tipo_id',$id)->delete();
        }
    }
    public function likeAnswer($id, $tipooo){
        if ($tipooo) {
            PostAlumnoLike::create([
                'alumnos_id' => Auth::user()->idalum,
                'tipo' => 'resp',
                'tipo_id' => $id,
            ]);
        }else{
            PostAlumnoLike::where('alumnos_id',$this->iduser)->where('tipo','resp')
            ->where('tipo_id',$id)->delete();
        }
        $this->showAnswers($this->idPost);
    }
}
