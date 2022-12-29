<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoContProblema extends Model
{
    use HasFactory;
    protected $table = 'curso_conten_problem';
    public $timestamps=false;
    protected $fillable = [
        'curs_mater_id',
        'problema',
        'fecha',
        'alumno_id',
    ];

    public function cursoMaterial(){
        return $this -> belongsTo(CursoMaterial::class,'curs_mater_id','idmaterial');
    }

    public function alumno(){
        return $this -> belongsTo(User::class,'alumno_id','idalum');
    }
}
