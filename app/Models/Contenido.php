<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    use HasFactory;
    protected $table = 'contenido';
    protected $primaryKey='idc';
    public $timestamps=false;

    protected $fillable = [
        'idc',
        'nom',
        'idasig',
        'idprimer_material',
    ];
    // relacion 1 a muchos inverso
    /*public function contenido_asignado()
   {
    return $this->belongsTo(Asignado::class, 'idasig', 'idasig');
    }*/
    public function modulos(){
        return $this->hasMany(Modulo::class,'idcon','idc');
    }
    public function curso_materiales(){
        return $this ->hasMany(CursoMaterial::class,'idc', 'idc');
    }
    public function materiales(){
        return $this->hasMany(CursoMaterial::class, 'idc','idc');
    }

    public function preguntas(){
        return $this->hasMany(Pregunta::class, 'idc','idc');
    }

    public function tareas(){
        return $this->hasMany(Tareas::class,'idc','idc');
    }

    public function contenido_tareas(){
        return $this->hasMany(CursoTarea::class, 'idc','idc');
    }
}
