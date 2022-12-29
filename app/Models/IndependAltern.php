<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndependAltern extends Model
{
    use HasFactory;
    protected $table = 'independ_alternat';
    public $timestamps=false;

    protected $fillable = [
        'texto',
        'indep_cuest_id',
        'tipo',
    ];
}
