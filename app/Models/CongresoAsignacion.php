<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CongresoAsignacion extends Model
{
    use HasFactory;
    protected $table = 'congreso_asignaciones';
    // protected $primaryKey='id';

    public function congreso(){
        return $this->belongsTo(Congreso::class,'congresos_id');
    }

    public function trabajador(){
        return $this->belongsTo(Trabajador::class,'trabajador_id','idtrab');
    }
}
