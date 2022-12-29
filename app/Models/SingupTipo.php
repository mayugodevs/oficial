<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingupTipo extends Model
{
    use HasFactory;
    protected $table = 'tipo_signup';  
	public $timestamps=false;
    protected $fillable = [
        'tipo',
    ];
}
