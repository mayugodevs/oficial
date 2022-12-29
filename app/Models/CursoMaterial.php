<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class CursoMaterial extends Model{
    
    protected $table = 'curso_material';
    // protected $table = 'material';
    protected $primaryKey='idmaterial';
    public $timestamps=false;

    protected $fillable = [
        // 'idmaterial',
        'material',
        'descripcion',
        'url',
        'url4',
        'idc',
    ];
    public function ultimoVideo($idmaterial){
        if(HistorialVedeo::where('iduser',16312)->where('idmaterial',$idmaterial)->first()){
            return true;
        }
        return false;
        
    }
    public function cursoMateriales(){
        return $this-> hasManyThrough(CursoMaterial::class,CursoModulo::class,'idasig','idc','idasig','idc');
    }
    public function cursoModulos(){
        return $this->hasMany(CursoModulo::class,'idasig','idasig');
    }
    
    public function historialVideos(){
        return $this -> hasMany(HistorialVideoAlumno::class,'idmaterial','idmaterial');
    }

    public function cursoModulo(){
        return $this -> belongsTo(CursoModulo::class,'idc','idc');
    }

    public function cursoContenProblemas(){
        return $this -> hasMany(CursoContProblema::class,'curs_mater_id','idmaterial');
    }

    public function cursoModPregComents(){
        return $this -> hasMany(CursoContPregCom::class,'idmaterial','idmaterial');
    }

    public function cursoArchivos(){
        return $this->hasMany(CursoArchivo::class,'material_id','idmaterial');
    }




    // antiguos  de abajo  
    
    public function getCompletedAttribute()
    {
        return $this->user_video->contains(Auth::user()->idalum);
    }
    public function contador()
    {
        return $this->hasMany(CursoModulo::class,'idc', 'idc');
    }
    
    public function user_video(){
         return $this->belongsToMany(User::class,'historial_video_alumn','idmaterial','iduser','idmaterial','idalum');
    }

    public function usercomentcourse(){
        return $this->belongsToMany(User::class,'curso_conten_preg_coment','idmaterial','idcliente','idmaterial','idalum')
        ->withPivot('comentario','fecha')->orderBy('curso_conten_preg_coment.fecha','desc');
   }
   public function material_archivos()
   {
    return $this->hasMany(CursoArchivo::class,'material_id','idmaterial');
   }

}
