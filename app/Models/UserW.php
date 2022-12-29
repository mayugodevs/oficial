<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserW extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'user_web22';
    protected $primaryKey='idalum';
	public $timestamps=false;
    protected $fillable = [
        // 'idalum',
        'nombres',
        'ip',
        'pais',
        'estado',
    ];
}
