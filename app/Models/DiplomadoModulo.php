<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoModulo extends Model
{
    use HasFactory;
    protected $table = 'diplomado_modulos';
    protected $primaryKey = 'idmodulo';
    public $timestamps = false;

    public function diplomadoContenidos(){
        return $this->hasMany(DiplomadoContenido::class,'idmodulo','idmodulo');
    }

    public function diplomadoModulo(){
        return $this->belongsTo(DiplomadoModulo::class,'idmodulo','idmodulo');
    }

    
    /* antiguo */
    public function subModulos(){
        return $this->hasMany(DiplomadoSubModulo::class, 'idmodulo', 'idmodulo');
    }
}
