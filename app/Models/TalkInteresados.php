<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalkInteresados extends Model
{
    protected $table = 'talk_interesados';
    // protected $primaryKey='idc';
	public $timestamps=false;
	

    protected $fillable = [
        'idalum',
        'fecha_servicio',
        'detalles',
        'talk_esp_id',
        'horas',
        'tipo_servicio',
    ];

    // public function trabajador(){
    //     return $this->belongsTo(Trabajador::class, 'idtrab', 'idtrab');
    // }
}
