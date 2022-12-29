<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mayulive extends Model
{
    use HasFactory;
    protected $table = 'mayulive';
    // protected $primaryKey='idhistorial';

    public function mayuliveAsignaciones(){
        return $this->hasMany(MayuliveAsignacion::class,'mayulive_id');
    }

    public function mayuliveComentarios(){
        return $this->hasMany(MayuliveComentario::class,'mayulive_id');
    }

    public function mayulivePreguntas(){
        return $this->hasMany(MayulivePregunta::class,'mayulive_id');
    }   

}