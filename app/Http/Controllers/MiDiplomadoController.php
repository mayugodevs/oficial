<?php

namespace App\Http\Controllers;
use App\Models\DiplomadoPagos;
use Illuminate\Support\Facades\Auth;
class MiDiplomadoController extends Controller
{ 
//   use Datatables
    public function index()
    {
        // return Da
       
        $diplomadosPagos =DiplomadoPagos::where('estado', '=', 1)
        ->where('alumno_id', '=', Auth::user()->idalum)
       ->get();
        return view('midiplomado',compact('diplomadosPagos'));
        //return view('menu.head', );
    }
}
