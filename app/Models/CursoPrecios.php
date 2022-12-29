<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoPrecios extends Model
{
    use HasFactory;
    protected $table = 'curso_precios';
    public $timestamps=false;
    protected $fillable = [
        'slug',
        'precio',
        'estado',
        'exclusiones',
        'logo_portada',
    ];
    public function getRouteKeyName(){
        return 'slug';
    }
}
