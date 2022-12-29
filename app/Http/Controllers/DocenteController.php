<?php

namespace App\Http\Controllers;

use App\Models\CategoriaEmpresa;
use App\Models\TalkCategoria;
use Illuminate\Http\Request;

class DocenteController extends Controller
{ 
    public function talks(){
        $categorias = TalkCategoria::where('estado',1)->get();
        return view('talks',compact('categorias'));
    } 
}
