<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoGrupo extends Model
{
    protected $table = 'diplomado_grupo';
    protected $primaryKey = 'iddiplomado';
    public $timestamps = false;

    protected $fillable = [
        'titulo',
        'inicio',
        'precio_venta',
        'slug',
        'horario',
        'fecha_termino',
        'estado',
        'tipo_producto',
    ];
    protected $dates = ['inicio'];
    public function diplomado(){
        return $this->belongsTo(Diplomado::class,'diplomados_id','iddiplomado');
    }
    public function diplomadopago(){
        return $this->hasOne(DiplomadoPagos::class,'diplomados_id','iddiplomado');
    }
    public function diplomadopagos(){
        return $this->hasMany(DiplomadoPagos::class,'diplomados_id','iddiplomado');
    }

    public function diplomadoComentarios(){
        return $this->hasMany(DiplomadoComentario::class,'iddiplomado','iddiplomado');
    }

    public function diplomadoModulos(){
        return $this->hasMany(DiplomadoModulo::class,'iddiplomado','iddiplomado');
    }    
    public function diplCursos(){
        return $this->hasMany(DiplomadoCurso::class,'iddiplomado','iddiplomado');
    }    

    public function diplomadoSemanas(){
        return $this->hasMany(DiplomadoSemana::class,'idiplomado','iddiplomado');
    }

    public function diplomadoInteresados(){
        return $this->hasMany(DiplomadoInteresado::class,'diplomado_id','iddiplomado');
    }   
    
    public function diplomadoEmpresas(){
        return $this->hasMany(DiplomadoEmpresa::class,'iddiplomado','iddiplomado');
    }  

    public function diplomadoDescargAlumnos(){
        return $this->hasMany(DiplomadoDescargaAlumno::class,'diplomados_id','iddiplomado');
    } 

    public function diplomadoDocentes(){
        return $this->hasMany(DiplomadoTrabajador::class,'idiplomado','iddiplomado');
    } 

    public function diplomadoTareas(){
        return $this->hasManyThrough(DiplomadoTarea::class, DiplomadoSemana::class,'iddiplomado','idsemana', 'idiplomado','id_diplo_sem');
    }   

    public function getRouteKeyName(){
        return 'slug';
    }
}
 