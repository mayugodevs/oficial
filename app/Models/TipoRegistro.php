<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoRegistro extends Model
{
    use HasFactory;
    protected $table = 'tipo_registro';
    // protected $primaryKey='id';

    public function alumnos(){
        return $this->hasMany(Alumno::class,'tipo_reg');
    }
}
