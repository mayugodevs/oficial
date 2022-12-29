<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TareaEntrega extends Model
{
    use HasFactory;
    protected $table = 'curso_tareas_entrega';
    protected $primaryKey='identrega';
    public $timestamps=false;
    protected $fillable = [
        'fecha',
        'estado',
        'idtarea',//obl
        'archivo',
        'typefile',
        'nota',
        'idalumno',//obl
        'idins',//obl
        'feedback'
    ];
    
}
