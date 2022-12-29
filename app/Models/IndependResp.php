<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndependResp extends Model
{
    use HasFactory;
    protected $table = 'independ_entreg_cuestion';
	public $timestamps=false;
    public function indep_pregunt(){
        return $this->belongsTo(IndependPregunt::class,'indep_cuest_id');
    }
    protected $fillable = [
        'fecha',
        'nota',
        'marcado',
        'indep_cuest_id',
        'user_id',
    ];
}
