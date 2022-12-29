<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MayulivePreguntaResp extends Model
{
    use HasFactory;
    protected $table = 'mayulive_pregunta_respuest';
    public $timestamps=false;
    /* `pregunta`, `tipo`, `orden`, `estado`, `tiempo`, `lanzado`, `mayulive_id` */
    protected $fillable = [
        'pregunt_id',
        'alternt_id',
        'alumnos_id',
    ];

    public function alumno(){
        return $this->belongsTo(Alumno::class,'alumnos_id','idalum');
    }

    public function maylivPregt(){
        return $this->belongsTo(MayulivePregunta::class,'pregunt_id');
    }

    public function maylivPregtAlt(){
        return $this->belongsTo(MayulivePreguntaAltern::class,'alternt_id');
    }
}
