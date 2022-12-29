<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalkCategoria extends Model
{
    use HasFactory;
    protected $table = 'talk_categorias';
    // protected $primaryKey='id';
    public $timestamps = false;

    protected $fillable = [
        'persona_id',
        'categoria_id',
        // 'tipo',
    ];
    public function talk_especls(){
        return $this->hasMany(TalkEspecialista::class,'cat_emp_id');
    }
}
