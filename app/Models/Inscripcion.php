<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Inscripcion extends Model
{
    protected $table = 'inscripcion';
    protected $primaryKey='idinsc';
	public $timestamps=false;

    protected $fillable = [
        'idinsc',
        'estado',
        'idalum',
        'asignados_idasig',
        'tipo_pago',
        'monto',
        'fecha',
        'fecha_inicio', 
        'fecha_fin', 
        'tipo',
        'idpremium',  
    ];
 //no borrar(deberia ser asignado)
    public function inscrito()
    {
        return $this->belongsTo(Asignado::class, 'asignados_idasig', 'idasig');
    }
    public function studiante()
    {
        return $this->belongsTo(User::class, 'idalum','idalum');
    }
    //alumnos inscritos al curso
    public function asignado(){        
        return $this->belongsTo(Asignado::class,'asignados_idasig', 'idasig');
    }
    // relacion muchos a mucho para historial de video
    public function user_inscripcion(){
        return $this->belongsToMany(CursoMaterial::class,'historial_video_alumn','idinsc','idinscripcion');
    }

    public function historialVideos(){
        return $this->hasMany(HistorialVedeo::class,'idinscripcion','idinsc');
    }

    public function certificado(){
        return $this->hasOne(Certificado::class,'idinsc','idinsc');
    }

    public function entregas(){
        return $this->hasMany(TareaEntrega::class, 'idins', 'idinsc');
    }
    
}
