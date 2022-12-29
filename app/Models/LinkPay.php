<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkPay extends Model
{
    use HasFactory;
    protected $table = 'link_pay';
	public $timestamps=false;

    protected $dates = ['fecha']; 
    protected $fillable = [
        'nmr_trans',
        'monto',
        'fecha',
        'link_gen_id',
        'user_id',
        'tipo',
    ];

    public function alumno(){
        return $this->belongsTo(User::class,'user_id','idalum' );
    }
}
