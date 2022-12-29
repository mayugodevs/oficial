<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoRespuestas extends Model
{
    use HasFactory;
    protected $table = 'diplomado_resp_coment';
    protected $primaryKey = 'idrespuestas';
    public $timestamps = false;
}
