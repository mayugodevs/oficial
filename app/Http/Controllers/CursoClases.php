<?php

namespace App\Http\Controllers;
use App\Models\DiplomadoPay;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CursoClases extends Controller
{
    public function index()
    {
        return view('clases');
    }
    public function video($video)
    {
        // $path = 'https://storage.googleapis.com/bucket-mayugo/cursos/seguridad-industrial/S1-1-introduccion.bin';
        $path = 'https://drive.google.com/file/d/1L35cShiKYeoUgQqJVvCtQsZiIrCPhpPR/view';
        
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.$path.'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($path));        
        
        readfile($path);
        dd(readfile($path));
        // readfile('https://i.pinimg.com/564x/ee/a1/59/eea159824482e06095b26e262b8582c8.jpg');
    }
   
      
}
