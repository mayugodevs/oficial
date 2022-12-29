<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignado extends Model
{
    protected $table = 'curso_asignaciones';
    protected $primaryKey  = 'idasig';

    protected $fillable = [
        'idasig',
        'curso_idcur',
        'trabajadores_idtrab',
        'fecha',
    ];

    public function trabajadores(){
        // return $this->hasMany(Trabajador::class, 'idtrab', 'trabajadores_idtrab');
        return $this->belongsTo(Trabajador::class, 'trabajadores_idtrab', 'idtrab');
    }

    public function inscripciones(){
        return $this ->belongsTo(Inscripcion::class,'idasig', 'asignados_idasig');
    }
    public function curso(){        
        return $this->hasOne(Cursos::class,'idcur', 'curso_idcur');
    }
    public function cursos()
    {
        return $this->belongsTo(Cursos::class, 'curso_idcur', 'idcur');
    }
    public function curso_contenidos(){
        return $this->hasMany(Contenido::class,'idasig', 'idasig');
    }
    public function contenidos(){
        return $this->hasMany(Contenido::class, 'idasig','idasig');
    }
    public function materiales(){
        return $this->hasManyThrough(CursoMaterial::class,Contenido::class,'idasig','idc','idasig','idc');
    }
    public function curso_tareas()
    {
        return $this->hasManyThrough(CursoTarea::class,Contenido::class,'idasig','idc','idasig','idc');
    }

    public function certificados(){
        return $this->hasManyThrough(Certificado::class, Inscripcion::class,'idasig','idinsc','asignados_idasig','idinsc'); 
    }
    



}