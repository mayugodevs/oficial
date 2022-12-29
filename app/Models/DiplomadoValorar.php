<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoValorar extends Model
{
    use HasFactory;
    protected $table = 'diplomado_valoracion';
    // protected $primaryKey='idvivo';
    public $timestamps=false;
    protected $fillable = [
        'puntaje',
        'comentario',
        'dipl_grup_id',
        'dipl_pagos_id'
    ];
}
