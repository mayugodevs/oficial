<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalkUsuario extends Model
{
    protected $table = 'talk_usuario';
    // protected $primaryKey='idc';
	public $timestamps=false;
	

    protected $fillable = [
        'talk_inter_id',
        'nombres',
        'telefono',
        'correo',
        'pais',
        'rubro',
        'cant_personas',
    ];
}
