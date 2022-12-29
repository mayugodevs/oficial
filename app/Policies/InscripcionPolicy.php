<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Inscripcion;
use Illuminate\Auth\Access\HandlesAuthorization;

class InscripcionPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function userinscrito(User $user,Inscripcion $cursos)
    {
       // return $cursos->students->contains($user->id);
    }
}
