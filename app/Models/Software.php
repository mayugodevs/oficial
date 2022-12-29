<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;
    protected $table = 'software';
    // protected $primaryKey='id';
    
    // public function alumnos(){
    //     return $this->hasMany(Alumno::class,'publicidad_id');
    // }
}
