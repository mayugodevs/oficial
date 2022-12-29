<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class DiplomadoCurso extends Model
{
    use HasFactory;
    protected $table = 'diplomado_curso';
    // protected $primaryKey = 'id';
    public $timestamps = false;

    public function cursoAsign(){
        return $this->belongsTo(CursoAsignacion::class, 'curso_idasig','idasig');
    }

    public function notaCurso($id_asig){
        $examen = ExamenTerminos::where('curs_asign_id',$id_asig)->where('alumno_id',Auth::user()->idalum)->first();
        $notaExamen = $examen ? $examen->aprobo : 0;
        $cantPrac = 0;
        $promedioPrac = 0;
        $cantProy = 0;
        $promedioProy = 0;    
        $cantExa = 0;    
        $cantTareas = 0;    
        $modulos = CursoModulo::where('idasig',$id_asig)->get();
        foreach ($modulos as $modulo) {
            $cantExa += count($modulo->cursoExamenPreguntas);
            $cantTareas += count($modulo->cursoTareaModulos);
            foreach ($modulo->cursoTareaModulos as $tareas) {            
                foreach ($tareas->cursoTareaEntregas->where('idalumno',Auth::user()->idalum) as $entrega){
                    if ($entrega->cursoTareaModulo->tipo == 'Proyecto') {
                        $promedioProy += intval($entrega->nota)*0.6;
                        $cantProy +=1;
                    } else {
                        $promedioPrac += intval($entrega->nota)*0.4;
                        $cantPrac +=1;
                    }
                }
            }
        }
        $notaFinal = 0;
        $promePrac = $cantPrac >  0 ? ($cantExa > 0 ? ($promedioPrac+$notaExamen*0.4)/($cantPrac+1) : $promedioPrac/$cantPrac) : $notaExamen*0.4 ;
        $promeProy = $cantProy > 0 ? $promedioProy/$cantProy : 0;
        if ($cantExa > 0 && $cantTareas == 0) $notaFinal = $notaExamen;
        elseif ($cantExa > 0 && $cantTareas > 0) $notaFinal =$promePrac+$promeProy;
        elseif ($cantExa == 0 && $cantTareas > 0) $notaFinal = $promePrac+$promeProy;
        return $notaFinal;
    }

} 
