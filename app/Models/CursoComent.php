<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoComent extends Model
{
    protected $table = 'curso_conten_preg_coment';
    protected $primaryKey='idpreguntas';
    public $timestamps=false;

    protected $fillable = [
        'idpreguntas',
        'comentario',
        'fecha',
        'idmaterial',
        'idcliente',
    ];
}
