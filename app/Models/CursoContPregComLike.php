<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoContPregComLike extends Model
{
    use HasFactory;
    protected $table = 'curso_cont_preg_com_like';
    // protected $primaryKey='idinsc';
    public $timestamps=false;
    protected $fillable = [
        'tipo_id',
        'alumno_id',
        'like',
        'tipo',
    ];

    public function alumno(){
        return $this -> belongsTo(Alumno::class,'alumno_id','idalum');
    }
}
