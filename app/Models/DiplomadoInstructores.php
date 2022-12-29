<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoInstructores extends Model
{
    use HasFactory;
    protected $table = 'diplomado_instructores';
    protected $primaryKey = 'idinstructor';
    public $timestamps = false;

    public function instructor(){
        return $this->belongsTo(Trabajador::class,'idtrabajador','idtrab');
    }
}
