<?php

namespace App\Http\Livewire;

use App\Models\PostCliente as ModelsPostCliente;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PostCliente extends Component
{
    public $user_id;
    public $posts;
    public $user;
    public $post;/* INPUT ENTRANTE */
    public $postTitle;/* INPUT ENTRANTE */

    public function mount(){
        $this->user = Auth::user();
        $this->user_id = $this->user->idalum;
    }
    
    public function render()
    {
        $this-> user = Auth::user();
        $this-> posts = $this->user->posts;
        return view('livewire.post-cliente');
    }

    public function createPost(){
        $this->validate([
            'post' => 'required',
            'postTitle' => 'required',
        ]);

        ModelsPostCliente::create([
            'user_id' => $this->user_id,
            'title' => $this->postTitle,
            'post' => $this->post,
            'estado' => 1,
        ]);
        $this->post = '';
        $this->postTitle = '';
    }
   
}
