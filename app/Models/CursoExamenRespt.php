<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoExamenRespt extends Model
{
    use HasFactory;
    protected $table = 'curso_exam_respt';
    protected $primaryKey='identregap';
    public $timestamps=false;
    protected $fillable = [
        // 'id',
        'valor',
        'idalumno',
        'idpregunta',
        'nota',
    ];

    public function alumno(){
        return $this-> belongsTo(User::class,'idalumno','idalum');
    }

    public function cursoExamenPreg(){
        return $this-> belongsTo(CursoExamenPregt::class,'idpregunta','idpregunta');
    }
}

