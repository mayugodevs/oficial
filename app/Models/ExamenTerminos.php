<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamenTerminos extends Model
{
    use HasFactory;
    protected $table = 'examen_terminos';
    // protected $primaryKey='idc';
	public $timestamps=false;

    protected $fillable = [
        'fecha_inicio',
        'fecha_fin',
        'alumno_id',
        'curs_asign_id',
        'estado',
        'aprobo',
        'reinicio',
        'correctas',
        'total_preguntas',
    ];
}
