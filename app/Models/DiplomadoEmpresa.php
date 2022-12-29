<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoEmpresa extends Model
{
    use HasFactory;
    protected $table = 'diplomado_empresa';
    protected $primaryKey='idasignacion';

    public function diplomado(){
        return $this->belongsTo(Diplomado::class,'diplomados_id','iddiplomado');
    }

    public function empresa(){
        return $this->belongsTo(Empresa::class,'idempresa','idempresa');
    }
}