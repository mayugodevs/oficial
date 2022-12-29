<?php
// if (!function_exists('my_method')) {

use App\Models\Categoria;
use App\Models\CursoAsignacion;
use App\Models\CursoInscripcion;
use App\Models\CursoMaterial;
use App\Models\Grado;
use App\Models\HistorialVedeo;
use App\Models\HistorialVideoAlumno;
use App\Models\Pais;
use App\Models\PlanesAlumno;
use App\Models\ReferidoUser;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

    function getUser(){
        return Auth::user();
    }
    function selfUser($user_id){
        $user_logueado = Auth::user();
        if ($user_logueado) {
            return ($user_logueado->idalum === $user_id); 
        }
        return false;
        
    }
    function getUserFirst($id){
        $user = Auth::user();
        if ($user) {
            if ($user->idalum == $id) return [User::with('paisU')->where('idalum',$id)->first(),1];
            else return [User::with('paisU')->where('idalum',$id)->first(),0];
        }
        else return [User::with('paisU')->where('idalum',$id)->first(),0];    
    }
    function getUserQ($id){
        if ($id) return [User::with('paisU')->where('idalum',$id)->first(),0];
        return [User::with('paisU')->where('idalum',Auth::user()->idalum)->first(),1];
    }
    // eliminar un producto del carro
    function removeProduct($id_course,$type){
        $cart = Cart::content()->where('id', $id_course)->first();
        Cart::remove($cart->rowId);
    }
    // add un producto del carro
    function addProduct($product, $type){        
        Cart::add([
            'id' => $product->idcur, 
            'name' => $product->nom, 
            'qty' => 1, 
            'price' => $product->precio,
            'weight' => $type,
            'options' => [
                'desc' => $product->predsct,
                'img' => $product->img,
                'type' => $type,
                'idasig' => $product->cursoAsignacion->idasig,
            ],
        ]);
    }
    // filtrar los productos del carro por tipo
    function showCarts($type){
        $carts = [];
        foreach (Cart::content() as $course) {
            if ($course->weight == $type) array_push($carts, $course->id);
        }
        return $carts;
    }
    // encryptar un string
    function encryption($string){
        $output=FALSE;
        $keyy=hash('sha256', "12345345345");
        $iv=substr(hash('sha256', '1247353453'), 0, 16);
        $output=openssl_encrypt($string, "AES-256-CBC", $keyy, 0, $iv);
        $output=base64_encode($output);
        return $output;
    } 
    // desencryptar un string
    function decryption($string){
        $keyy=hash('sha256', "12345345345");
        $iv=substr(hash('sha256', '1247353453'), 0, 16);
        $output=openssl_decrypt(base64_decode($string), "AES-256-CBC", $keyy, 0, $iv);
        return $output;
    }

    function getCountries(){
        return Pais::where('estado',1)->get();
    }

    function getCategories(){
        return Categoria::select('idc','nombre')->get();
    }

    function getGrados(){
        return Grado::get();
    }
    // ultimo curso visto de un usuario
    function lastCourse()
    {
        $user = Auth::user(); 
        $porcentaje = 0;
        if( count($user->cursoInscripciones) > 0 ){
            $historial = HistorialVideoAlumno::where('iduser', $user->idalum)->With('cursoInscripcion')->orderBy('idhistorial','DESC')->first();
            if ( $historial ) {
                $curso = $historial->cursoInscripcion->cursoAsignacion->curso;
                $porcentaje=percentageCourse($historial->idasig, $user->idalum);
                return [true, $curso, $porcentaje, countUsersCourse($historial->idasig)];                
            } else return [false,buyMoreCourse()];
        }else return [false,buyMoreCourse()]; 
    }
    // Curso mas comprado 
    function buyMoreCourse()
    {
        $courses = [];
        $moreBuyCourses= CursoInscripcion::select(DB::raw('asignados_idasig, COUNT(*) as cant'))->groupBy('asignados_idasig')->where('monto','>',0)->orderBy('cant','DESC')->take(4)->get();
        foreach ($moreBuyCourses as $moreBuyCourse) {
            array_push($courses, CursoAsignacion::find($moreBuyCourse->asignados_idasig)->curso);
        }
        return $courses;
    }
    // cantidad de usuarios de un curso
    function countUsersCourse($id_asign)
    {
        return CursoInscripcion::where('asignados_idasig', $id_asign )->count();
    }
    // Porcentaje de vista de un curso
    function percentageCourse($id_asign, $id_user)
    { 
        $count_contenidos = CursoMaterial::whereHas('cursoModulo', function ($query) use ($id_asign)  {
            $query->where('idasig', $id_asign);
        })->get()->count();

        $count_historial=HistorialVideoAlumno::whereHas('cursoInscripcion', function ($query) use ($id_asign, $id_user) {
            $query->where('asignados_idasig',  $id_asign)->where('idalum',$id_user);
        })->get()->count();
    
        $porc = round(($count_historial/$count_contenidos)*100);
        return $porc >= 100 ? 100 : $porc ;
    }
    // ver si tiene plan activo un alumno
    function plan_referidos($user_id)
    {
        $plan = PlanesAlumno::where('idalumno', $user_id)->first();
        if ($plan) 
        {
            return [true, ReferidoUser::where('user_id', $user_id)->count()];
        }
        return [false];        
    }
    // ultimo video visto de un curso
    function ultimo_video_curso_id($asign_id, $user_id)
    {
        $hist = HistorialVedeo::where('idasig', $asign_id)->where('iduser',$user_id)->orderby('idhistorial', 'DESc')->first();
        // dd($hist);
        return $hist['idmaterial'];
    }


?>