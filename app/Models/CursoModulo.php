<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoModulo extends Model
{
    protected $table = 'curso_modulos';
    protected $primaryKey = 'idc';
	public $timestamps = false;

    protected $fillable = [
        'nom',
        'idasig',
        'estado',
    ];

    public function cursoAsignacion() {
        return $this->belongsTo(CursoAsignacion::class, 'idasig', 'idasig');
    }   

    public function cursoTareaModulos(){
        return $this->hasMany(CursoTareaContenido::class,'idc','idc');
    }

    public function cursoContenidos(){
        return $this->hasMany(CursoContenido::class,'idcon','idc');
    }

    public function cursoExamenPreguntas(){
        return $this->hasMany(CursoExamenPregt::class,'idc','idc');
    }

    public function cursoMateriales(){
        return $this->hasMany(CursoMaterial::class,'idc','idc');
    }

    
   


}
