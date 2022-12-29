<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Grado;
use App\Models\Pais;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilController extends Controller
{
    public function index(){
        $user = Auth::user();
        $grados = Grado::get();
        $paises = Pais::where('estado',1)->get();
        $categorias = Categoria::select('idc','nombre')->get();
        $intereses = [];
        foreach ($user->intereses as $interes) {
            array_push($intereses, $interes->categoria_id);
        }
        return view('user.edit',[
            'user' => $user,
            'paises' => $paises,
            'categorias' => $categorias,
            'intereses' => $intereses,
            'grados' => $grados,
        ]);
    }
    public function show(){
        return view('perfil');
    }
    public function miperfil($slug){
        $lista = [
            'miperfil',
            'micursos',
            'midiplomado',
            'mifavorito',
            'reciente',
            'micertificado',
            'comunidad',
        ];
        if(in_array($slug, $lista)){
            return view('usuario',compact('slug'));
        }else{
            return redirect('');
        }
    }
    public function update(Request $request,$id){
        // $request->validate([
        //     'title' => 'required|unique:posts|max:255',
        //     'author.name' => 'required',
        //     'author.description' => 'required',
        // ]);
        // return $request;
        $user = User::find(Auth::user()->idalum);
        $user->update($request->all());
    
        // return redirect()->route('posts.index')
        //                 ->with('success','Post updated successfully');
    
        // return response()->json(['code'=>200, 'message'=>'Tu perfil se edito correctamente','data' => $user], 200);
        
        
        // return $request->intereses;
       
        // foreach ($request->intereses as $interes) {
        //     $notaNueva = new Interest();
            
        //     $user = Auth::user()->idalum;
        //     $notaNueva->user_id = $user ;
        //     $notaNueva->category_id = $interes;

        //     $notaNueva->save();
        // }
        return response()->json(
            ['message'=>'Tu perfil se edito correctamente'], 
            200);
    }
}

// "intereses":[2,3,4]}"
