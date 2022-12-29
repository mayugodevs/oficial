<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialVedeo extends Model
{
    protected $table = 'historial_video_alumn';
    protected $primaryKey='idhistorial';
	public $timestamps=false;

    protected $fillable = [ 
        'idinscripcion',
        'idmaterial',
        'fecha',
        'iduser',
        'idasig',         
    ];

    public function contador_historial()
    {
        return $this->hasMany(Inscripcion::class,'idinsc', 'idinscripcion');
    }

    public function inscripcion(){
        return $this->belongsTo(Inscripcion::class, 'idinscripcion','idinsc');
    }
}
