<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MayulivePreguntaAltern extends Model
{
    use HasFactory;
    protected $table = 'mayulive_pregunta_altern';
    public $timestamps=false;
    /* `alternativa`, `correcta`, `puntuacion`, `orden`, `estado`, `mayliv_pregunta_id` */
    protected $fillable = [
        'alternativa',
        'correcta',
        'puntuacion',
        'orden',
        'estado',
        'mayliv_pregunta_id',
    ];

    public function mayulivePregRespts(){
        return $this->hasMany(MayulivePreguntaResp::class,'alternt_id');
    }
}
