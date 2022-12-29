<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplomado extends Model
{
    protected $table = 'diplomado';
    protected $primaryKey = 'iddiplomado';
    public $timestamps = false;

    protected $fillable = [
        'titulo',
        'inicio',
        'duracion',
        'modalidad',
        'certificacion',
        'informacion',
        'beneficio',
        'metodologia',
        'urltemario',
        'horario',
        'precio_normal',
        'precio_venta',
        'logo',
        'logo2',
        'time_videoclase',
        'url_miniatura',
        'requisitos',
    ];
    protected $dates = [
        'fecha_termino',
    ];


    public function diplomado_grupos(){
        return $this->hasMany(DiplomadoGrupo::class, 'diplomados_id','iddiplomado');
    }
  
}
