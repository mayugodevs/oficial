<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCliente extends Model
{
    use HasFactory;

    protected $table = 'post_clientes';

    protected $fillable = [
        'alumnos_id',
        'titulo',
        'contenido',
        'estado',
    ];
    
    public function answers(){
        return $this->hasMany(AnswersPost::class,'post_id' , 'id');
    } 
}
