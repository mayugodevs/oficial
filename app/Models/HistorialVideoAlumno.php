<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialVideoAlumno extends Model
{
    use HasFactory;
    protected $table = 'historial_video_alumn';
    protected $primaryKey='idhistorial';

    public function cursoInscripcion(){
        return $this->belongsTo(CursoInscripcion::class,'idinscripcion','idinsc');
    }

    public function cursoMaterial(){
        return $this->belongsTo(CursoMaterial::class,'idmaterial','idmaterial');
    }

    public function contador_historial()
    {
        return $this->hasMany(CursoInscripcion::class,'idinsc', 'idinscripcion');
    }

}