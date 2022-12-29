<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoContenido extends Model
{
    protected $table = 'curso_contenidos';
    protected $primaryKey = 'idmod';
	public $timestamps = false;

    protected $fillable = [ 
        'modulo',
        'estado',
        'asignados_idasig',
        'idcon',
    ];
    public function cursoModulo(){
        return $this->belongsTo(CursoModulo::class,'idcon','idc');
    }    
    public function curso_materiales(){
        return $this ->hasMany(CursoMaterial::class,'idc', 'idc');
    }
    public function contenido_tareas(){
        return $this->hasMany(CursoTarea::class, 'idc','idc');
    }
    

}
