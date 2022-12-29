<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavegacionPersona extends Model
{
    use HasFactory;
    protected $table = 'navegacion_persona';
    // protected $primaryKey='idhistorial';

    public function alumno(){
        return $this->belongsTo(Alumno::class,'alumno_id','idalum');
    }
}
