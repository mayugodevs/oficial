<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;
    protected $table = 'grados';
    // protected $primaryKey='id';

    public function alumnos(){
        return $this->hasMany(User::class,'nivel_edu');
    }

    public function trabajadores(){
        return $this->hasMany(Trabajador::class,'rol');
    }
}
