<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAlumnoLike extends Model
{
    use HasFactory;
    protected $table = 'post_like_alumn';
    public $timestamps = false;
    protected $fillable = [
        'alumnos_id',
        'tipo',
        'tipo_id',
    ];
}