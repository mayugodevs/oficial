<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreguntPremiun extends Model
{
    use HasFactory;
    protected $table = 'premium';
    protected $primaryKey='premium';
    // 17805
	public $timestamps=false;
}
