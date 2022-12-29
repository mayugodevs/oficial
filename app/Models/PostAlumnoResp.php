<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAlumnoResp extends Model
{
    use HasFactory;
    protected $table = 'posts_resp_alumn';
    // protected $primaryKey='idpremium';
    public $timestamps = false;
    protected $fillable = [
        'contenido',
        'estado',
        'fecha',
        'post_alumn_id',
        'alumnos_id',
    ];
    protected $dates = ['fecha'];

    public function post(){
        return $this->belongsTo(PostAlumno::class,'post_alumn_id');
    }

    public function alumno(){
        return $this->belongsTo(User::class,'alumnos_id','idalum');
    }
    
    public function postResptLikes(){
        return $this->hasMany(PostAlumnoLike::class,'tipo_id');
    }
}
