<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoFrecuentes extends Model
{
    use HasFactory;
    protected $table = 'diplomado_frecuentes';
    protected $primaryKey = 'idfrecuentes';
    public $timestamps = false;
}
