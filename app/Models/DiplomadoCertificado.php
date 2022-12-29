<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoCertificado extends Model
{
    use HasFactory;
    protected $table = 'diplomado_certificados';
    // protected  $primaryKey = 'id_certificado';/* VER EN DONDE FALLA COMENTANDO ESTO */
    public $timestamps = false;
    protected $fillable = [
        'idpay_diplomado',
        'url',
        'fecha',
        'nota',
        'id_certificado',
    ];

    public function diplomadoPagoss(){
        return $this->belongsTo(DiplomadoPagos::class,'idpay_diplomado','idpay');
    }

    public function getRouteKeyName()
    {
        return 'id_certificado';
    }
}
