<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
    use HasFactory;
    protected $table = 'tarea';
    protected $primaryKey='idtarea';

    public function entregas(){
        return $this->hasMany(TareaEntrega::class, 'idtarea','idtarea');
    }
}
