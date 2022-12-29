<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Congreso extends Model
{
    use HasFactory;
    protected $table = 'congreso';
    // protected $primaryKey='id';

    public function congresosPagos(){
        return $this->hasMany(CongresoPago::class,'congreso_id');
    }

    public function congresosCategoria(){
        return $this->belongsTo(CongresoCategoria::class,'congr_cat_id');
    }

    public function congresosAsignaciones(){
        return $this->hasMany(CongresoAsignacion::class,'congreso_id');
    }
    
    

}
