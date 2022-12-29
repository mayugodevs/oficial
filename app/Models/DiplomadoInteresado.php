<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoInteresado extends Model
{
    use HasFactory;
    protected $table = 'diplomado_interesados';
    // protected $primaryKey='idcontenido';

    public function alumno(){
        return $this->belongsTo(Alumno::class,'alumno_id','idalum');
    }

    public function diplomado(){
        return $this->belongsTo(Diplomado::class,'diplomado_id','iddiplomado');
    }
}