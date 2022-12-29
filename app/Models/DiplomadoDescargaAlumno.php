<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoDescargaAlumno extends Model
{
    use HasFactory;
    protected $table = 'diplomado_descarga_alumno';
    // protected $primaryKey='idsub';

    public function alumno(){
        return $this->belongsTo(Alumno::class,'alumno_id','idalum');
    }

    public function diplomado(){
        return $this->belongsTo(Diplomado::class,'diplomados_id','iddiplomado');
    }
}