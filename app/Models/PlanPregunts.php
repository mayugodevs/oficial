<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanPregunts extends Model
{
    use HasFactory;
    protected $table = 'preguntas_premium';
    protected $primaryKey='idpreguntap';
    public $timestamps = false;
    protected $fillable = [ 
        'orden',
        'pregunta',
        'respuesta',
        'estado',
    ];
}
