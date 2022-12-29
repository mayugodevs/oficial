<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\CategoriaPersona;
use App\Models\Pais;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserRegistro extends Component
{
    public $inp_email;
    public $inp_pass;
    public $inp_name;
    public $inp_last;
    public $inp_celphone;
    public $inp_country;
    public $countries;
    public $categories;
    public $listeners = ['saveUser'];
    public function mount(){
        $this->countries =  Pais::where('estado',1)->get();
        $this->categories =  Categoria::where('estado',1)->get();
    }
    public function saveUser($categories_users, $ip_user, $country_code){
        $pais = Pais::where('pais_codigo', $country_code)->first();     
        $user = User::create([
            'nombres' => $this->inp_name,
            'apellidos' => $this->inp_last,
            'telf' => $this->inp_celphone,
            'email' => $this->inp_email,
            'tipo' => 1,
            'estado' => 1,
            'pass' => Hash::make($this->inp_pass),
            'pais' => $pais->id,
            'user' => substr($this->inp_name, 0, 3).rand(1,1000),
            'avatar' => 'images/picture/avatar_general.jpg',
            'fechareg' => Carbon::now(),
            'ip' => $ip_user,
            'ip_pais' => $pais->pais,   
        ]);

        foreach ($categories_users as $category) {
            CategoriaPersona::create([
                'persona_id' => $user->idalum,
                'categoria_id' => $category,
                'tipo' => 'ALUMNO',
            ]);
        }
        $this->dispatchBrowserEvent('resolve', ['message' => 'Tu cuenta fue creado']);
        Auth::loginUsingId($user->idalum);
        return redirect()->route('inicio');/* llevar al curso  */
    }
    public function render()
    {
        return view('livewire.user-registro')
            ->extends('layout');
    }
}
