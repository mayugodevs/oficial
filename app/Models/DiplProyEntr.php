<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplProyEntr extends Model
{
    use HasFactory;
    protected $table = 'diplomado_proyecto_entrega';
    // protected $primaryKey='idvivo';
    public $timestamps=false;
    protected $dates = ['fecha'];
    protected $fillable = [
        'fecha',
        'estado',
        'dipl_proy_id',
        'archivo',
        'typefile',
        'nota',
        'dipl_pag_id',
        'feedback',
    ];
    public function diplpay(){
        return $this->belongsTo(DiplomadoPay::class,'dipl_pag_id');
    }
}
