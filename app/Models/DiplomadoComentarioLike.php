<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoComentarioLike extends Model
{
    use HasFactory;
    protected $table = 'diplomado_coment_like';
    protected $primaryKey='idlike';
}
