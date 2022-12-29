<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoEmpresas extends Model
{
    use HasFactory;
    protected $table = 'diplomado_empresas';
    protected $primaryKey = 'idasignacion';
    public $timestamps = false;

    
    public function empresa(){
        return $this->belongsTo(Empresas::class, 'idempresa','idempresa');
    }
}
