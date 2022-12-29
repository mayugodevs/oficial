<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    
    protected $table = 'trabajadores';
    protected $primaryKey = 'idtrab';
    public $timestamps = false;
    protected $fillable = [
        'telf',
        'nombres',
        'especialidad',
        'experiencia',
    ];
    public function alumno(){
        return $this->belongsTo(User::class,'idalum','idalum');
    }

    public function pais(){
        return $this->belongsTo(Pais::class,'pais');
    }

    public function grado(){
        return $this->belongsTo(Grado::class,'rol');
    }

    public function diplomadoTrabajadores(){
        return $this->hasMany(DiplomadoTrabajador::class,'idtrabajador','idtrab');
    }

    public function congresoAsignaciones(){
        return $this->hasMany(CongresoAsignacion::class,'trabajador_id','idtrab');
    }

    public function cursoAsignaciones(){
        return $this->hasMany(CursoAsignacion::class,'trabajadores_idtrab','idtrab');
    }

    public function mayuliveAsignaciones(){
        return $this->hasMany(MayuliveAsignacion::class,'trabajador_id','idtrab');
    }
    
    public function intereses(){
        return $this->hasMany(CategoriaPersona::class,'persona_id','idalum');
    }

    /* antiguo */
    public function CursoAsignacion() {
        return $this->belongsTo(CursoAsignacion::class,'trabajadores_idtrab');
    }
}
