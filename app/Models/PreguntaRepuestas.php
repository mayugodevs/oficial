<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreguntaRepuestas extends Model
{
    use HasFactory;
    protected $table = 'entrega_pregunta';
    protected $primaryKey='identregap';
}
