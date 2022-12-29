<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Cashier\Billable;
class User extends Authenticatable
{
    // use Billable;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $table = 'user_web';
    protected $primaryKey='idalum';
	public $timestamps=false;
    protected $fillable = [
        'nombres',#
        'telf',
        'tipo',
        'email',#
        'pass',#
        'pais',#
        'genero',
        'fecha_nac',
        'fechareg',
        'estado',
        'ip',
        'ip_pais',
        'perfil_face',
        'perfil_link',
        'perfil_inst',
        'perfil_tiktok',
        'nivel_edu',
        'user',
        'apellidos',
        'avatar'
    ];    
    protected $hidden = [
        'pass',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $appends = [
        'profile_photo_url',
    ];
    protected $dates = ['fechareg'];
    // Nuevo
    public function paisU(){
        return $this->belongsTo(Pais::class,'pais');
    }
    public function diplomado_adquirido()
    {
         return $this->hasMany(DiplomadoPay::class,'idalum','iduser');
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

    public function certificados(){
        return $this->hasManyThrough(CursoCertificado::class, CursoInscripcion::class,'idalum','idinsc','idalum','idinsc'); 
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

    public function cursoTareas(){
        return $this->hasMany(CursoTareaEntrega::class,'idalumno','idalum');
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

    public function referidos(){
        return $this->hasMany(ReferidoUser::class, 'user_id', 'idalum');
    }

    // Antiguo
 

    public function premiun(){
        return $this->hasOne(Premiun::class,'idalumno','idalum');
    }
    public function setPasswordAttribute($value)
    {
        $this->attributes['pass'] = bcrypt($value);
    }
}
