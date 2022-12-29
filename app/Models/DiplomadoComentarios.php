<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoComentarios extends Model
{
    use HasFactory;
    protected $table = 'diplomado_comentario';
    protected $primaryKey = 'idcomentario';
    public $timestamps = false;

    public function diplomado_respuestas(){
        return $this->hasMany(DiplomadoRespuestas::class, 'idcomentario','idcomentario');
    }
}
