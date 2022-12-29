<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoComentario extends Model
{
    use HasFactory;
    protected $table = 'diplomado_coment';
    protected $primaryKey='idcomentario';
    public $timestamps = false;
    protected $fillable = [
        'comentario',/*  */
        'estado',/*  */
        'iddiplomado',/*  */
        'iduser',/*  */
    ];

    public function diplomado(){
        return $this->belongsTo(Diplomado::class,'iddiplomado','iddiplomado');
    }

    public function diplomadoComentRespts(){
        return $this->hasMany(DiplomadoComentarioResp::class,'idcomentario','idcomentario');
    }

    public function diplomadoComentLikes(){
        return $this->hasMany(DiplomadoComentarioLike::class,'tipo_id','idcomentario');
    }

    public function alumno(){
        return $this->belongsTo(User::class,'iduser','idalum');
    }
}