<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singup extends Model
{
    use HasFactory;
    protected $table = 'signups';  
	public $timestamps=false;
    protected $fillable = [
        'curs_idasig',
        'tipo_id',
        'fecha_inicio',
        'fecha_fin',
    ];

    public function curso_asinga(){
        return $this->belongsTo(CursoAsignacion::class, 'curs_idasig','idasig');
    }
}
