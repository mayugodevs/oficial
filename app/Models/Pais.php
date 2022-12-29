<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    protected $table = 'paises';
    // protected $primaryKey='id';

    public function alumnos(){
        return $this->hasMany(User::class,'pais');
    }

    public function trabajadores(){
        return $this->hasMany(Trabajador::class,'pais');
    }
}
