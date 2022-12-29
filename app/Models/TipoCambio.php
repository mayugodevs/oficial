<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCambio extends Model
{
    use HasFactory;
    protected $table = 'tipo_cambio';
    public $timestamps = false;
    protected $fillable = [
        'codpais',
        'pais',
        'cambio',
        'monedalocal',
    ];
}
