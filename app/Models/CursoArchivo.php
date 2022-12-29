<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoArchivo extends Model
{
    protected $table = 'curso_archivos';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable = [
        // 'id',
        'title',
        'archivo',
        'material_id',
    ];

    // public function descarga($inscr){
    //     return $this->belongsTo(HistorialRecurso::class, 'material_id')->where('id_inscripc', $inscr);
    // }
}
