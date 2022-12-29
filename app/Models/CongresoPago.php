<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CongresoPago extends Model
{
    use HasFactory;
    protected $table = 'congreso_pago';
    // protected $primaryKey='id';

    public function congreso(){
        return $this->belongsTo(Congreso::class,'congreso_id');
    }

    public function alumno(){
        return $this->belongsTo(User::class,'alumno_id','idalum');
    }


}
