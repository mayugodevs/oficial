<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MayuliveAsignacion extends Model
{
    use HasFactory;
    protected $table = 'mayulive_asignaciones';
    // protected $primaryKey='idhistorial';

    public function trabajador(){
        return $this->belongsTo(Trabajador::class,'trabajador_id','idtrab');
    }

    public function mayulive(){
        return $this->belongsTo(Mayulive::class,'mayulive_id');
    }


}
