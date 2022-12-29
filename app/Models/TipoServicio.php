<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoServicio extends Model
{
    use HasFactory;
    protected $table = 'tipo_servicio';
    protected $primaryKey='idtipo';

    public function preguntasFrecuentes(){
        return $this->hasMany(PreguntaFrecuente::class,'tipo_servic_id','tipo_servic_id ');
    }
}
