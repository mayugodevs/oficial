<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;
    protected $table = 'certificado';
    protected $primaryKey='id_certificado';

    public function inscripcion(){
        return $this->belongsTo(Inscripcion::class,'idinsc','idinsc');
    }

    public function getRouteKeyName()
    {
        return 'id_certificado';
    }
}
