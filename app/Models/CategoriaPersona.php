<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaPersona extends Model
{
    use HasFactory;
    protected $table = 'categoria_persona';
    // protected $primaryKey='id';
    public $timestamps = false;

    protected $fillable = [
        'persona_id',
        'categoria_id',
        'tipo',
    ];
}
