<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialRecurso extends Model
{
    use HasFactory;
    protected $table = 'historial_recurso';
	public $timestamps=false;

    protected $fillable = [ 
        'id_inscripc',
        'id_archiv',
        'fecha',
        'tipo',
    ];
}
