<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoSoporte extends Model
{
    use HasFactory;
    protected $table = 'diplomado_soporte';
    // protected $primaryKey='idsemana';
    public $timestamps=false;
    protected $fillable = [
        'rol',
        'descripcion',
        'horario',
    ];
    
    
    public function trabajador(){
        return $this->belongsTo(Trabajador::class,'trabaj_id','idtrab');
    }
}
