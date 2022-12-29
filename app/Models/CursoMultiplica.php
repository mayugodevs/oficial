<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoMultiplica extends Model
{
    use HasFactory;
    protected $table = 'curso_multiplica';
    public $timestamps = false;
    protected $fillable = [
        'slug',
        'multiplica',
        'estado',
        'logo_portada',
    ];
    public function getRouteKeyName(){
        return 'slug';
    }
}
