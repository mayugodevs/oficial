<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aAlumno extends Model
{
    use HasFactory;
    protected $table = 'alumnos';
    protected $primaryKey='idalum';

    public function pais(){
        return $this->belongsTo(Pais::class,'pais');
    }

    public function grado(){
        return $this->belongsTo(Grado::class,'nivel_edu');
    }

    public function tipoRegistro(){
        return $this->belongsTo(TipoRegistro::class,'tipo_reg');
    }

    public function publicidadEtiqueta(){
        return $this->belongsTo(PublicidadEtiqueta::class,'publicidad_id');
    }

    public function webBusquedas(){
        return $this->hasMany(BusquedaAlumno::class,'alumno_id','idalum');
    }

    public function trabajador(){
        return $this->hasOne(Trabajador::class,'idalum','idalum');
    }

    public function congresosPagos(){
        return $this->hasMany(CongresoPago::class,'alumno_id','idalum');
    }

    public function cursoInscripciones(){
        return $this->hasMany(CursoInscripcion::class,'idalum','idalum');
    }

    public function cursoContPregComts(){
        return $this->hasMany(CursoContPregCom::class,'idcliente','idalum');
    }

    public function cursoContPregComLikes(){
        return $this->hasMany(CursoContPregComLike::class,'alumno_id','idalum');
    }

    public function cursoContPregComRepts(){
        return $this->hasMany(CursoContPregComResp::class,'idalumno','idalum');
    }

    public function cursoContProblemas(){
        return $this->hasMany(CursoContProblema::class,'alumno_id','idalum');
    }

    public function cursoExamenRespts(){
        return $this->hasMany(CursoExamenRespt::class,'idalumno','idalum');
    }

    public function cursoTareaComentarios(){
        return $this->hasMany(cursoTareaComentario::class,'idalumno','idalum');
    }

    public function cursoTareaComentarioLikes(){
        return $this->hasMany(cursoTareaComentarioLikes::class,'alumno_id','idalum');
    }

    public function cursoTareaComentarioRespts(){
        return $this->hasMany(cursoTareaComentarioRespts::class,'alumnos_id','idalum');
    }
    
    public function diplomadoPagos(){
        return $this->hasMany(DiplomadoPagos::class,'alumno_id','idalum');
    }
    
    public function diplomadoComentarios(){
        return $this->hasMany(DiplomadoComentarios::class,'iduser','idalum');
    }
    
    public function diplomadoComentarioLikes(){
        return $this->hasMany(DiplomadoComentarioLike::class,'iduser','idalum');
    }
    
    public function diplomadoComentarioRespts(){
        return $this->hasMany(DiplomadoComentarioResp::class,'iduser','idalum');
    }
    
    public function diplomadoDescargas(){
        return $this->hasMany(DiplomadoDescargaAlumno::class,'alumno_id','idalum');
    }
    
    public function diplomadoInterasados(){
        return $this->hasMany(DiplomadoInteresado::class,'alumno_id','idalum');
    }
    
    public function mayuliveComentarios(){
        return $this->hasMany(MayuliveComentario::class,'alumnos_id','idalum');
    }

    public function mayuliveComentLikes(){
        return $this->hasMany(MayuliveComentarioLike::class,'alumnos_id','idalum');
    }

    public function mayuliveComentariosRespts(){
        return $this->hasMany(MayuliveComentarioResp::class,'alumnos_id','idalum');
    }

    public function mayulivePreguntaRespts(){
        return $this->hasMany(MayulivePreguntaResp::class,'alumnos_id','idalum');
    }

    public function navegacion(){
        return $this->hasOne(NavegacionPersona::class,'alumno_id','idalum');
    }

    public function planAlumno(){
        return $this->hasOne(PlanesAlumno::class,'idalumno','idalum');
    }

    public function posts(){
        return $this->hasMany(PostAlumno::class,'alumnos_id','idalum');
    }

    public function postRespts(){
        return $this->hasMany(PostAlumnoResp::class,'alumnos_id','idalum');
    }

    public function postLikes(){
        return $this->hasMany(PostAlumnoLike::class,'alumnos_id','idalum');
    }

    public function intereses(){
        return $this->hasMany(CategoriaPersona::class,'persona_id','idalum');
    }


    
}
