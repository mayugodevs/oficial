<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferidoUser extends Model
{
    use HasFactory;
    protected $table = 'referido_users';

    public function alumno(){
        return $this->belongsTo(User::class,'user_id', 'idalum');
    }
}
