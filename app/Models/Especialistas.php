<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialistas extends Model
{
    protected $table = 'especialistas';
    // protected $primaryKey='idc';
	public $timestamps=false;

    protected $fillable = [
        'nombre',
        'img',
        'precio',
        'tipo',
        'slug',
    ];

    public function trabajador(){
        return $this->belongsTo(Trabajador::class, 'idtrab', 'idtrab');
    }
}
