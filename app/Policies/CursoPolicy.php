<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Inscripcion;
use Illuminate\Auth\Access\HandlesAuthorization;

class CursoPolicy
{
    use HandlesAuthorization;
 
    public function usercurso(User $user,Inscripcion $cursos)
    {
        //return $cursos->students->contains($user->id);
    }
}
