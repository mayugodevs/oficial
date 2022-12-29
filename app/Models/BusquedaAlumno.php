<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusquedaAlumno extends Model
{
    use HasFactory;
    protected $table = 'busqueda_alumn';
    // protected $primaryKey='id';

    public function alumno(){
        return $this->belongsTo(User::class,'alumno_id','idalum');
    }
}
