<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    protected $table = 'pregunta';
    protected $primaryKey='idpregunta';

    public function respuestas(){
        return $this->hasOne(PreguntaRepuestas::class,'idpregunta','idpregunta');
    }
}
