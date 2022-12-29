<?php

namespace App\Http\Controllers;

use App\Models\CursoCertificado;
use App\Models\DiplomadoCertificado;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    public function show($certi, $type)
    {        
        $id = decryption($certi);
        $tipo = $type;
        if ($tipo == 1) {
            $certid = CursoCertificado::find($id);
            if ($certid) {
                $id_cert = $certid->id;
                $idalum = $certid->cursoInscripcion->idalum;
            }
            else return redirect()->route('inicio');
        }
        else $idalum = DiplomadoCertificado::find($id)->diplomadoPagoss->alumno_id;
        
        return view('certificado',[
            'idalum' => $idalum,
            'id_certif' => $id_cert,
            'code_cert' => $id,
        ]);
    }
}
