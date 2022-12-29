<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoInscripcion extends Model
{
    // use HasFactory;
    protected $table = 'curso_inscripcion';
    protected $primaryKey='idinsc';
    public $timestamps = false;
    protected $fillable = [
        'nmr_trans',
        'estado',
        'idalum',
        'asignados_idasig',
        'idpremium',
        'tipo_pago',
        'monto',
        'fecha',
        'servicio',
        'tipo',
        'fecha_inicio',
        'fecha_fin',
    ]; 
    public function cursoCertificado() {
        return $this->hasOne(CursoCertificado::class, 'idinsc', 'idinsc');
    }   
    public function alumno(){
        return $this->belongsTo(User::class,'idalum','idalum');
    }
    public function historialVideos(){
        return $this->hasMany(HistorialVideoAlumno::class,'idinscripcion','idinsc');
    }    
    public function cursoTareaEntregas(){
        return $this->hasMany(CursoTareaEntrega::class,'idins','idinsc');
    }
    public function cursoAsignacion(){
        return $this->belongsTo(CursoAsignacion::class,'asignados_idasig','idasig');
    }
    public function planAlumno(){
        return $this->belongsTo(PlanesAlumno::class,'idpremium','idpremium');
    }    
    public function count_archivos($asign, $idinsc){
        $cont_arc = 0;
        $descargas = 0;
        $materiales = CursoAsignacion::find($asign)->cursoMateriales;
        foreach ($materiales as $material) {
            $cont_arc += count($material->cursoArchivos);
            foreach ($material->cursoArchivos as $archivos) {
               HistorialRecurso::where('id_archiv', $archivos->id)->where('id_inscripc',$idinsc)->first() ? $descargas++ : '' ;
            }
        }
        return $descargas.'/'.$cont_arc;
    } 
    public function nota_final($idinsc){
        $inscrip = CursoInscripcion::find($idinsc);
        $asing = CursoAsignacion::find($inscrip->cursoAsignacion->idasig);
        $entrega = 0; 
        $count_proy = 0;
        $nota_proy = 0;
        $count_pract = 0;
        $nota_pract = 0; 
        $nota_final = 0; /* nota_final */
        foreach ($asing->curso_tareas as $tarea) { 
            if($tarea->verificar_entrega) {         
                $entrega ++;
                if($tarea->tipo == 'Proyecto'){
                    if ($tarea->verificar_entrega->idalumno == $inscrip->idalum) $nota_proy += $tarea->verificar_entrega->nota*0.6; 
                    $count_proy ++;
                }else{
                    if ($tarea->verificar_entrega->idalumno == $inscrip->idalum) $nota_pract += $tarea->verificar_entrega->nota*0.4;
                    $count_pract ++;
                }
            }
        }
        if($count_proy > 0 && $count_pract > 0){
            $nota_final = $nota_proy/$count_proy + $nota_pract/$count_pract;
        }else if($count_proy > 0) {
            $nota_final = $nota_proy/$count_proy;
        }else if($count_pract > 0) {
            $nota_final = $nota_pract/$count_pract;
        }
        if (count($asing->cursoPreguntas)) { 
            $exam = ExamenTerminos::where('curs_asign_id', $asing->idasig)->where('alumno_id',$inscrip->idalum)->first();
            $nota_final =  $exam ? ($exam->aprobo + $nota_final)/2 : $nota_final/2;
        }
        return $nota_final; 
    }
    public function inscritos_count($id_asing){
        return CursoInscripcion::where('asignados_idasig', $id_asing)->count();
    }
    
}
