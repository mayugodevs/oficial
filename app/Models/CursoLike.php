<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoLike extends Model
{
    protected $table = 'curso_like';
    public $timestamps=false;

    protected $fillable = [
        // 'idmaterial',
        'curso_asig_id',
        'user_id',
    ];

    public function cursoAsignacion(){
        return $this->belongsTo(CursoAsignacion::class,'curso_asig_id','idasig');
    }
}
