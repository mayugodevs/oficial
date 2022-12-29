<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';
    protected $primaryKey='idempresa';

    public function diplomadoEmpresas(){
        return $this->hasMany(DiplomadoEmpresa::class,'idempresa','idempresa');
    }
}