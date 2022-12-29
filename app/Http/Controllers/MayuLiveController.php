<?php

namespace App\Http\Controllers;

use App\Models\Mayulive;
use Illuminate\Http\Request;

class MayuLiveController extends Controller
{
    public function index($idLive){
        $detalle = Mayulive::find($idLive);
        if($detalle){
            return view('mayulive.live',[
                'detalle' => $detalle,
                'idLive' => $idLive,
            ]);
        }else{
            return redirect('/');
        }
    }

}
