<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'categoria';
    protected $primaryKey='idc';
	public $timestamps=false;

    protected $fillable = [
        'idc',
        'nombre',
        'img',
        'precio',
        'tipo',
        'slug',
    ];
}
