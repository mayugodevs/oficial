<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'categorias';
    // protected $table = 'categoria';
    protected $primaryKey  = 'idc';
    protected $fillable = [
        'nombre',
        'precio',
    ];
    public function cursos(){
        return $this->hasMany(Curso::class,'idc','idc');/* la segundo paramtro es de cursos */
    }

    public function planAlumnos(){
        return $this->hasMany(PlanesAlumno::class,'idcategoria','idc');
    }
    
    public function categoriaPersonas(){
        return $this -> hasMany(CategoriaPersona::class, 'categoria_id','idc');
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
    