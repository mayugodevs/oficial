<?php

namespace App\Http\Livewire;

use App\Models\CursoAsignacion;
use App\Models\CursoContPregCom;
use App\Models\CursoContPregComLike;
use App\Models\CursoContPregComResp;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CommentVideo extends Component
{
    use WithFileUploads;
    public $id_material;
    public $inp_img;
    public $curs_asign;
    public $user;
    public $coments = [];
    public $answers = [];
    public $id_post;
    public $files = false; 

    protected $listeners = ['saveComent'];

    public function mount(CursoAsignacion $curs_asign, $id_material){
        $this->user = Auth::user(); 
    }
    public function getComments(){
        foreach (CursoAsignacion::find($this->curs_asign->idasig)->cursoMateriales as $material) {
          foreach ($material->cursoModPregComents->where('estado',1) as $coment) {
            array_push($this->coments, $coment);
          }
        }
        $this->coments = array_reverse($this->coments);
      }
    public function showAnswer($id_comentario){
        $this->coments = [];
        $this->getComments();
        $this->id_post = $id_comentario;
        $this->answers = CursoContPregComResp::where('idpreguntas',$id_comentario)->where('estado',1)->orderBy('idrespuestas','DESC')->get(); 
        $this->dispatchBrowserEvent('showRes',['id_c' => $id_comentario]);
      }
    public function saveComent($inp_coment, $type =0){     
        if ($type) {//para response
          CursoContPregComResp::create([
            'respuesta' => $inp_coment,
            'estado' => 1,
            'idpreguntas' => $this->id_post,
            'idalumno' => $this->user->idalum,
          ]);
          $this->showAnswer($inp_coment); 
        } else {//para comment 
          if($this->files != false){
            $this->inp_img = rand().'_comment.'.$this->files->getclientOriginalExtension();
            $this->files->storeAs('images/comments/',$this->inp_img,'public_uploads');
          }       
          CursoContPregCom::create([
            'comentario' => $inp_coment,
            'fecha' => Carbon::now(),
            'idmaterial' => $this->id_material,
            'idcliente' => $this->user->idalum,
            'img' => $this->inp_img,
          ]);
          $this->reset(['files','coments','answers','id_post']);
          $this->getComments(); 
        }
    
        $this->dispatchBrowserEvent('resolve',['message' => 'Comentado...']);
    }
    public function likeComment($inp_coment){
        $like = CursoContPregComLike::where('tipo_id', $inp_coment)->where('alumno_id', $this->user->idalum)->first();
        if ($like) {//delete
          $like->delete();
        } else {
          CursoContPregComLike::create([
            'tipo_id' => $inp_coment,
            'alumno_id' => $this->user->idalum,
            'like' => 1,
            'tipo' => 'PREGUNTA',
          ]);
        }
        $this->coments = [];
        $this->getComments();    
    }
    public function removeComment($id_comentario, $type=0){
        if($type){
          $comment = CursoContPregCom::find($id_comentario);
          if(count(CursoContPregComResp::where('idpreguntas',$id_comentario)->get()) > 0){
            $comment->update([
              'estado' => 0,
            ]);
          }else $comment->delete();
          $this->coments = [];
          $this->getComments();
        }else{
          CursoContPregComResp::find($id_comentario)->update(['estado' => 0]);
          $this->showAnswer($id_comentario);
        }
        
    }
    public function render()
    {
        $this->reset(['coments']);
        $this->getComments(); //get all comments of course
        return view('livewire.comment-video');
    }
}
