<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificadoCheck extends Model
{
    use HasFactory;
    protected $table = 'certificado_check';  
      
    protected $dates = ['fecha'];
    public $timestamps = false;
    protected $fillable = [
        'fecha',
        'estado',
        'curs_inscrip_id',
        'nota',
    ];

    public function curso_inscripcion(){
        return $this->belongsTo(CursoInscripcion::class, 'curs_inscrip_id','idinsc');
    }
}
