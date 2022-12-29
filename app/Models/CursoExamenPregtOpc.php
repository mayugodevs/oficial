<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoExamenPregtOpc extends Model
{
    use HasFactory;
    protected $table = 'curso_exam_opc_preg';
    protected $primaryKey='idopcion';
    public $timestamps=false;
    protected $fillable = [
        'texto',
        'idpregunta',
        'tipo',
    ];

    public function cursoExamenPreg(){
        return $this -> belongsTo(CursoExamenPregt::class,'idpregunta','idpregunta');
    }
}

