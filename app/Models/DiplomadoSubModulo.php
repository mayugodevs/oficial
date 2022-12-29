<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoSubModulo extends Model
{
    use HasFactory;
    protected $table = 'submodulo_diplomado';
    protected $primaryKey = 'idsub';
    public $timestamps = false;
}
