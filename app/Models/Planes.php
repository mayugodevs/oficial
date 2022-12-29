<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planes extends Model
{
    use HasFactory;
    protected $table = 'planes';
    // protected $primaryKey='idhistorial';
    
    public function planAlumnos(){
        return $this->hasMany(PlanesAlumno::class,'idplan');
    }
    public function plan_detalles(){
        return $this->hasMany(PlanDetalles::class,'planes_id');
    }
    // public function changePrice($precio){
        
    //     return 
    // }
}
