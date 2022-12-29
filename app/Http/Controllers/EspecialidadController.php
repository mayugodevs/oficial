<?php

namespace App\Http\Controllers;

use App\Models\Especialidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Curso;
class EspecialidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $datos['especialidads']=Especialidad::paginate(10);
        //return view('menu.head',$datos);
        $especialidads =DB::table('especialidad')
        ->select('idc','nombre','precio')
        //->where('precio', '=',299)
        ->get();
       


        $curso =DB::table('curso')
        ->select('idcur','nom','img','precio','predsct')
        ->get();
        return view('menu.head', ['especialidads' => $especialidads],['curso' => $curso]);
        //return view('menu.head', );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function show(Especialidad $especialidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Especialidad $especialidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Especialidad $especialidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Especialidad  $especialidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Especialidad $especialidad)
    {
        //
    }
}
