<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanDetalles extends Model
{
    use HasFactory;
    protected $table = 'plan_detalles';
    
    public function planAlumnos(){
        return $this->hasMany(PlanesAlumno::class,'idplan');
    }
}
