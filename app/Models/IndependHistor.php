<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndependHistor extends Model
{
    use HasFactory;
    protected $table = 'independ_histor';
	public $timestamps=false;

    protected $fillable = [
        'fecha_inicio',
        'fecha_fin',
        'reinicio',
        'inicio',
        'estado',
        'nota',
        'correctas',
        'preg_total',
        'ind_asig_id',
        'user_id',
    ];
}
