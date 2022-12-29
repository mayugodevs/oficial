<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoVivo extends Model
{
    use HasFactory;
    protected $table = 'diplomado_vivo';
    protected $primaryKey='idvivo';
    public $timestamps=false;
    protected $fillable = [
        'nombre',
        'url',
        'urlmaterial',
        'idsemana'
    ];

    public function diplomado(){
        return $this->belongsTo(Diplomado::class,'idiplomado','iddiplomado');
    }

    public function diplomadoSemana(){
        return $this->belongsTo(DiplomadoSemana::class,'idsemana','idsemana');
    }
}