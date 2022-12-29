<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternoInsc extends Model
{
    use HasFactory;
    protected $table = 'externo_insc';
	public $timestamps=false;

    protected $fillable = [
        'nombre',
        'img',
        'url_certificado',
        'condicion',
    ];
}
