<?php

namespace App\Http\Livewire;

use App\Models\Asignado;
use App\Models\Categoria;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\Especialidad;
use Illuminate\Support\Facades\DB;
class Curso extends Component
{
    public $id_categoria=0;
    public $cursos;
    public $especialidades;

    public $_idcursos_comprados;
    public $user;

    public function mount(){
        $this->user = Auth::user()->idalum;
    }
    public function render()
    {
        if ($this->id_categoria == 0) {
            
            $this->cursos =Asignado::whereHas('cursos', function ($query) {
                $query->where('estado', '=','Activo');
            })->get();


        }
        //  else {
        //     $this->cursos =Asignado::whereHas('cursos', function ($query) {
        //         $query->where('idc', '=', $this->id_categoria)->where('estado', '=','Activo');
        //     })->get();
        // }       
        
            $this->especialidades =Categoria::select('idc','nombre','img')->get();
            return view('livewire.curso')->extends('layout');
        }
    }

  
    
    

