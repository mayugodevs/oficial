<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomadoContacto extends Model
{
    use HasFactory;
    protected $table = 'diplomado_contacto';
    protected $primaryKey='idcontacto';
}