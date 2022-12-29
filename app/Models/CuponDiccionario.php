<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuponDiccionario extends Model
{
    use HasFactory;
    protected $table = 'cupones_diccionario';
    public $timestamps=false;
    protected $fillable = [
        'textocabecera',
        'textocentral',
        'textosecundario',
        'img',
        'tipo',
        'fecha_ini',
        'fecha_fin',
        'estado',
    ];
}
