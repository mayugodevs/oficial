<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoComentarioRecomend extends Model
{
    use HasFactory;
    protected $table = 'diplomado_coment_recomd';
    protected $primaryKey='idrecomendado';
}