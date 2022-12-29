<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAlumno extends Model
{
    use HasFactory;
    protected $table = 'posts_alumn';
    // protected $primaryKey='idpremium';
    public $timestamps = false;
    protected $fillable = [
        'alumnos_id',
        'titulo',
        'imagen',
        'contenido',
        'estado',
    ];
    protected $dates = ['fecha'];
    public function alumno(){
        return $this->belongsTo(User::class,'alumnos_id','idalum');
    }
    public function difMinut($fecha){
        return Carbon::now()->diffInMinutes($fecha);
    }
    public function difhoras($fecha){
        return Carbon::now()->diffInHours($fecha);
    }

    public function postRespts(){
        return $this->hasMany(PostAlumnoResp::class,'post_alumn_id');
    }

    public function postResptLikes(){
        return $this->hasMany(PostAlumnoLike::class,'tipo_id');
    }
}