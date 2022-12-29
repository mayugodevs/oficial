<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class CursoTarea extends Model
{
    protected $table = 'curso_tarea_contenido';
    protected $primaryKey='idtarea';
    public $timestamps=false;

    protected $fillable = [
        // 'idtarea',
        'tarea',/*  */
        'instruccion',/*  */
        'puntuacion',/*  */
        'archivo',/*  */
        'estado',
        'fecha',
        'idc',/*  */
        'tipo',/*  */
        'val_proyecto',
        'val_practica',
    ];
    public function getCompletetAttribute()
    {
        return $this->entrega_tarea->contains(Auth::user()->idalum);
    }
    public function tareaEntregas()
    {
        // return $this->hasOne(CursoTareaEntrega::class, 'idtarea','idtarea')->where('idalumno',Auth::user()->idalum);
        return $this->hasMany(CursoTareaEntrega::class, 'idtarea','idtarea')->where('idalumno',Auth::user()->idalum);
    }
    public function tarea_entre_gen()
    {
        // return $this->hasOne(CursoTareaEntrega::class, 'idtarea','idtarea')->where('idalumno',Auth::user()->idalum);
        return $this->hasMany(CursoTareaEntrega::class, 'idtarea','idtarea');
    }
    public function nota_tarea()
    {
        return $this->hasMany(CursoTareaEntrega::class, 'idtarea','idtarea')->select('nota')->where('idalumno','=',Auth::user()->idalum);
    }
    public function entrega_tarea()
    {
        return $this->belongsToMany(User::class,'entrega','idtarea','idalumno','idtarea','idalum');
        //
    }
}
