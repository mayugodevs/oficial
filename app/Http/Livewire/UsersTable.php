<?php

namespace App\Http\Livewire;

use App\Models\Curso;
use App\Models\CursoAsignacion;
use App\Models\CursoInscripcion; 
use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class UsersTable extends LivewireDatatable
{
    // public $model = User::class;

    public $hideable = 'inline';
    public $email = 'jlsc.hco';
    public $exportable = true;
    // public $searchable = 'alumno.email';
    
    public function builder()
    {
        // return CursoInscripcion::whereHas('alumno', function ($query) {
        //     $query->where('user_web.email', 'LIKE','%jlsc.hco%');
        // });
        return CursoInscripcion::query()
            ->join('user_web', 'user_web.idalum','curso_inscripcion.idalum')
            ->join('curso_asignaciones','curso_inscripcion.asignados_idasig','curso_asignaciones.idasig')
            ->join('cursos','cursos.idcur','curso_asignaciones.curso_idcur')
            ->where('user_web.email', 'LIKE','%jlsc.hco%');
    }
    public function columns()
    {
        return [
            NumberColumn::name('idinsc')
                ->label('ID Inscrp') , 
            Column::name('alumno.nombres')
                ->label('Nombre'),
            Column::name('alumno.apellidos')
                ->label('Apellido'),
            Column::name('alumno.email')
                ->label('Email'),
            Column::name('cursoAsignacion.curso.nom')
                ->label('Curso'),
            // Column::name('')
            //     ->label('Curso'),
            
        ];
    } 
}