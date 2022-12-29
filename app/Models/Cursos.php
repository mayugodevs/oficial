<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $table = 'cursos';
    // protected $table = 'curso';
    protected $primaryKey = 'idcur';
    public $timestamps = false;

    protected $fillable = [
        'idcur',
        'nom',
        'descrip',
        'precio',
        'idc',
        'slug',
        'predsct',
        'prom',
    ];

    /* SACAR LOS CURSOS DE ESTA CATEGORIA */
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'idc');
    } 

    public function asignado(){
        return $this->belongsTo(Asignado::class,'idcur','curso_idcur');
    }

    public function contenidos(){
        return $this->hasManyThrough(Contenido::class, Asignado::class,'curso_idcur','idasig','idcur','idasig');
    } 

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
} 