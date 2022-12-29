<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaEmpresa extends Model
{
    use HasFactory;
    protected $table = 'categ_empresa';
    // protected $primaryKey='id';
    public $timestamps = false;

    protected $fillable = [
        'persona_id',
        'categoria_id',
        // 'tipo',
    ];
    public function especialistas(){
        return $this->hasMany(Especialistas::class,'cat_emp_id');
    }
}
