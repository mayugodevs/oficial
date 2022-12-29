<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Premiun extends Model
{
    use HasFactory;
    protected $table = 'premium';
    protected $primaryKey='premium';
    // 17805
	public $timestamps=false;
    // protected $fillable = [
    //     // 'idalum',
    //     'nombres',
    //     'apellidos',
    //     'telf',
    //     'email',
    //     'fecha_nac',
    //     'pass',
    //     'user',
    //     'genero',
    //     'country_id',
    //     'study_id',
    //     'perfil_face',
    //     'perfil_link',
    //     'perfil_inst',
    //     'perfil_tiktok',
    // ];
}
