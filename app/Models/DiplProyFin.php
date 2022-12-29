<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplProyFin extends Model
{
    use HasFactory;
    protected $table = 'diplomado_proyecto_final';
    // protected $primaryKey='idvivo';
    public $timestamps=false;
    protected $fillable = [
        'titulo',
        'instruccion',
        'url_instruccion',
        'url_formato',
        'fecha_entrega',
        'estado',
        'dipl_grp_id',
    ];

    public function diplPryEntreg(){
        return $this->hasOne(DiplProyEntr::class,'dipl_proy_id');
    }
    public function diplPryEntregas(){
        return $this->hasMany(DiplProyEntr::class,'dipl_proy_id');
    }
}
