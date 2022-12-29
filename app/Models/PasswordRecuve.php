<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordRecuve extends Model
{
    use HasFactory;
    protected $table = 'password_recuperar'; 
    public $timestamps = false;
    protected $fillable = [
        'token',
        'estado',
        'tiempo_creacion',
        'user_id',
    ];
    public function alumno(){
        return $this->belongsTo(User::class,'user_id','idalum');
    }
}
