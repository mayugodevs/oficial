<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreguntaFrecuente extends Model
{
    use HasFactory;
    protected $table = 'preguntas_frecuentes';
    protected $primaryKey='idpre';

    public function tipoServicio(){
        return $this->belongsTo(TipoServicio::class,'tipo_servic_id','tipo_servic_id ');
    }
}
