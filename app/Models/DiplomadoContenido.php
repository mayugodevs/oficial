<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoContenido extends Model
{
    use HasFactory;
    protected $table = 'diplomado_contenidos';
    protected $primaryKey='idsub';
}