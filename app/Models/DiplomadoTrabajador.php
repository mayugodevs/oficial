<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoTrabajador extends Model
{
    use HasFactory;
    protected $table = 'diplomado_trabajador';
    protected $primaryKey='idinstructor';

    public function trabajador(){
        return $this->belongsTo(Trabajador::class,'idtrabajador','idtrab');
    }

    public function diplomado(){
        return $this->belongsTo(Diplomado::class,'idiplomado','iddiplomado');
    }
}