<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MayulivePregunta extends Model
{
    use HasFactory;
    protected $table = 'mayulive_pregunta';
    public $timestamps=false;
    /* `pregunta`, `tipo`, `orden`, `estado`, `tiempo`, `lanzado`, `mayulive_id` */
    protected $fillable = [
        'pregunta',
        'tipo',
        'orden',
        'estado',
        'tiempo',
        'lanzado',
        'mayulive_id',
        'correcta',
    ];

    public function mayulive(){
        return $this->belongsTo(Mayulive::class,'mayulive_id');
    }

    public function mayulivePregAlternativas(){
        return $this->hasMany(MayulivePreguntaAltern::class,'mayliv_pregunta_id');
    }

    public function mayulivePregRespuestas(){
        return $this->hasMany(MayulivePreguntaResp::class,'pregunt_id');
    }

    
}
