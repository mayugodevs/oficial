<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class Acceso extends Component
{ 
    public $email, $password;
    public $form = [
        'email'   => '',
        'password'=> '',
    ];

    public function submit()
    {
        $this->validate([
            'form.email'    => 'required|email',
            'form.password' => 'required',
        ]);
        
       Auth::attempt($this->form);
        // return redirect(route('/'));
        return redirect(route('inicio'));
    }
    public function render()
    {
        return view('livewire.acceso')->extends('layout');
    }
} 