<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'cursos'; 
    protected $primaryKey='idcur';
    public $timestamps = false;
    protected $dates = ['prom_fecha'];
    protected $fillable = [
        'img',
        'nom',
        'descrip',
        'estado',
        'objetivos',
        'gws',
        'temario',
        'precio',
        'predsct',
        'prom',
        'idc',
        'prom_fecha',
        'url_certificado',
        'slug',
    ];


    public function categoria(){
        return $this -> belongsTo(Categoria::class,'idc','idc');
    }
    public function validarCurso($id_asig){
        $inscr = CursoInscripcion::where('asignados_idasig',$id_asig)->where('idalum',16312)->first();
        if($inscr){
            if( $inscr->fecha_fin === null) return true; /* si pertenece a un curso unidad */
            if($inscr->fecha_fin > Carbon::now()) return true; /* si tiene un plan y esta en el tiempo correcto */
        }        
        return false;
    }

    public function cursoAsignacion(){
        return $this-> hasOne(CursoAsignacion::class,'curso_idcur','idcur');
    }

    public function cursoModulos(){
        return $this->hasManyThrough(CursoModulo::class, CursoAsignacion::class,'curso_idcur','idasig','idcur','idasig');
    }

    public function cursoInscripcion(){
        return $this->hasManyThrough(CursoInscripcion::class, CursoAsignacion::class,'curso_idcur','asignados_idasig','idcur','idasig');
    }
    

    public function getRouteKeyName(){
        return 'slug';
    }
}
