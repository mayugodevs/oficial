<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoCertificado extends Model
{
    use HasFactory;
    protected $table = 'curso_certificados';
    protected  $primaryKey = 'id_certificado';
    public $timestamps = false;
    protected $fillable = [
        'idinsc',
        'url',
        'fecha',
        'id_certificado',
    ];

    public function cursoInscripcion(){
        return $this -> belongsTo(CursoInscripcion::class,'idinsc','idinsc');
    }

    public function getRouteKeyName()
    {
        return 'id_certificado';
    }
}
