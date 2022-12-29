<?php

namespace App\Exports;

use App\Models\CursoInscripcion;
use App\Models\Pais;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class PaisExport implements FromQuery
{
    use Exportable;
    /**
    * @return \Illuminate\Database\Query\Builder
    */
    private $email;
    public function __construct($email)
    {
        $this->email = $email;
    }
    public function query()
    {
        // return Pais::where('estado', $this->estado)->where('pais','LIKE', '%'.$this->nombre.'%');
        return CursoInscripcion::whereHas('alumno', function ($query) {
            $query->where('user_web.email', 'LIKE','%'.$this->email.'%');
        });
    }
}
