<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoTareaContenido extends Model
{
    use HasFactory;
    protected $table = 'curso_tarea_contenido';
    protected $primaryKey='idtarea';

    public function cursoModulo(){
        return $this -> belongsTo(CursoModulo::class,'idc','idc');
    }
    public function cursoTareaComentarios(){
        return $this -> hasMany(CursoTareaContenComent::class,'idtarea','idtarea');
    }    
    public function cursoTareaEntregas(){
        return $this -> hasMany(CursoTareaEntrega::class,'idtarea','idtarea');
    }
    public function cursoTareaEntrega(){
        return $this -> belongsTo(CursoTareaEntrega::class,'idtarea','idtarea')->where('nota',0); 
    }
    public function verificar_entrega(){ 
        return $this -> hasOne(CursoTareaEntrega::class,'idtarea','idtarea');
    }
    public function verificar_entrega2($idinsc){ 
        return $this -> belongsTo(CursoTareaEntrega::class,'idtarea','idtarea')->where('idins',$idinsc)->first();
    }

}
