<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanesAlumno extends Model
{
    // use HasFactory;
    protected $table = 'planes_alumno';
    protected $primaryKey='idpremium';
    public $timestamps = false;
    protected $fillable = [
        'idalumno',
        'idcategoria',
        'idplan',
        'fecha_inicio',
        'fecha_fin',
        'fecha_pago',
        'nro_trans',
        'monto',
        'servicio',
        'tipo_pago',
        'estado',
        'fecha_retencion',
        'situacion',
    ];
    public function plan(){
        return $this->belongsTo(Planes::class,'idplan');
    }
    
    public function diasRestantes($fecha){
        if(($fecha > Carbon::now()) > 0){
            return ('Tienes '.Carbon::now()->diffInDays($fecha).' dias');
        }
        return 'Renovar plan';
    }

    public function alumno(){
        return $this->belongsTo(User::class,'idalumno','idalum');
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class,'idcategoria','idc');
    }

}