<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoConstancia extends Model
{
    use HasFactory;
    protected $table = 'diplomado_constancia';
    // protected $primaryKey='idrecomendado';
    public $timestamps = false;
    protected $fillable = [
        'idpay_diplomado',
        'url',
        'fecha',
        'id_constancia',
    ];
}