<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoAsignacion extends Model
{
    use HasFactory;
    protected $table = 'curso_asignaciones';
    protected $primaryKey='idasig';
    public $timestamps = false;
    protected $fillable = [
        'curso_idcur',
        'trabajadores_idtrab',
        'fecha',
        'estado',
    ];
    // protected $guarded = [];

    public function trabajador() {
        return $this->belongsTo(Trabajador::class, 'trabajadores_idtrab', 'idtrab');
    }   

    public function examenTermino(){
        return $this-> hasOne(ExamenTerminos::class,'curs_asign_id','idasig');
    }

    public function curso() {        
        // return $this->hasOne(Cursos::class,'idcur', 'curso_idcur');
        return $this -> belongsTo(Curso::class,'curso_idcur','idcur');
    }

    public function cursoModulos(){
        return $this->hasMany(CursoModulo::class,'idasig','idasig');
    }
    

    public function cursoContenidos(){
        return $this-> hasManyThrough(CursoContenido::class,CursoModulo::class,'idasig','idcon','idasig','idc');
    }

    public function cursoMateriales(){
        return $this-> hasManyThrough(CursoMaterial::class,CursoModulo::class,'idasig','idc','idasig','idc');
    }
    public function cursoPreguntas(){
        return $this-> hasManyThrough(CursoExamenPregt::class,CursoModulo::class,'idasig','idc','idasig','idc');
    }

    public function cursoInscripcion() {
        return $this ->hasOne(CursoInscripcion::class,'asignados_idasig', 'idasig');
    }

    public function diplomadoInscripciones(){
        // return $this -> hasOne(DiplomadoInscripcion::class,'','');
        return $this -> hasMany(DiplomadoInscripcion::class,'idasig','idasig');
    }
    public function curso_tareas()
    {
        return $this->hasManyThrough(CursoTareaContenido::class,CursoModulo::class,'idasig','idc','idasig','idc');
    }
    public function curso_gratis(){
        return $this->hasOne(Singup::class, 'curs_idasig', 'idasig');
    }
}
