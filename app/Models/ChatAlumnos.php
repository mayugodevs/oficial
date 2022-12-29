<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatAlumnos extends Model
{
    use HasFactory;
    protected $table = 'chat_alumnos';
    protected $dates = ['fecha'];
    public $timestamps = false;

    protected $fillable = [
        'mensaje',
        'tipo',
        'estado',
        'envio',
        'recibe',
    ];
    public function alumno(){
        return $this->belongsTo(User::class,'envio','idalum');
    }
    public function difTime($fecha){
        $hora = Carbon::now()->diffInHours($fecha);
        $minutos = Carbon::now()->diffInMinutes($fecha);
        if($hora < 48) return $hora > 0 ? 'Hace '.$hora.' horas' : 'Hace '.$minutos.' minutos';
        else return false; 
    }
}
