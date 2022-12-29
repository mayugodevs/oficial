<?php

use App\Models\CursoCertificado;
use App\Models\User; 
use Illuminate\Support\Facades\Route;

Route::get('/searchEmailDB/{email}', function ($email) {
    if (User::where('email', $email)->first()) return 1;
    return 0;
});

Route::get('/certi_course/{id_certif}', function ($id_certif) {
    $id = decryption($id_certif);
    $certificado = CursoCertificado::find($id);
    if ($certificado) {
        $image = file_get_contents('https://storage.googleapis.com/'.$certificado->url);
        $im = new \Imagick();
        $im->setResolution(100,100);
        $im->SetColorspace(\Imagick::COLORSPACE_SRGB);
        $im->readImageBlob($image);
        $im->setImageFormat("jpg");        
        header('Content-Type: image/jpg');    
        echo $im;
        $im->destroy();
    } else return redirect()->route('inicio');
    
})->name('certi_course');

Route::get('/dowl_certi/{id_certif}/{type}', function ($id_certif, $type) {
    $id = decryption($id_certif);
    $certificado = CursoCertificado::find($id);
    if ($certificado) {
        $filename = $id.'.pdf'; 
        $tempfile = tempnam(sys_get_temp_dir(), $filename); 
        copy('https://storage.googleapis.com/'.$certificado->url, $tempfile);

        return response()->download($tempfile, $filename);  
    } else return redirect()->route('inicio');
})->name('dowl_certi');



