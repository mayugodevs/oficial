<?php
 
use App\Http\Controllers\Administrador;
use App\Http\Controllers\CertificadoController;
use App\Http\Controllers\CursoClases as ControllersCursoClases;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CursoScrollController;
use App\Http\Controllers\Diplomado;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MayuLiveController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\MiDiplomadoController;
use App\Http\Controllers\PanelDiplomadoController;
use App\Http\Controllers\PaymentController;
use App\Http\Livewire\Acceso;
use App\Http\Livewire\AlumnoAddInscripcion;
use App\Http\Livewire\Api;
use App\Http\Livewire\BuscadorPage;
use App\Http\Livewire\CategoriaCurso;
use App\Http\Livewire\Chats;
use App\Http\Livewire\CursoClases;
use App\Http\Livewire\CheckoutCourse;
use App\Http\Livewire\CourseFree;
use App\Http\Livewire\CoursePaymentOrder;
use App\Http\Livewire\CuestIndepPrev;
use App\Http\Livewire\CuestIndepResp;
use App\Http\Livewire\CuestIndepResult;
use App\Http\Livewire\CuestionarioExt;
use App\Http\Livewire\CursoDetalle;
use App\Http\Livewire\CursoTareas;
use App\Http\Livewire\CursoVisto; 
use App\Http\Livewire\DiplomadoList;
use App\Http\Livewire\ExamenResultado;
use App\Http\Livewire\ExamenTermino;
use App\Http\Livewire\ExamenTomar;
use App\Http\Livewire\GestionAllCourses;
use App\Http\Livewire\HistorialCursovivo;
use App\Http\Livewire\LinkPay;
use App\Http\Livewire\ModulosContenidosCursos;
use App\Http\Livewire\OfertaCursos;
use App\Http\Livewire\PacksCursos;
use App\Http\Livewire\PerfilEdit;
use App\Http\Livewire\Planes;
use App\Http\Livewire\RecuperarPassword;
use App\Http\Livewire\Talks;
use App\Http\Livewire\UserRegistro;
use Culqi\Culqi;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite as Socialite;

Route::get('/', [HomeController::class,'index'] )->name('inicio');
Route::get('/acceso',Acceso::class)->name('acceso');
// Route::view('/signup','signup'); 
Route::get('/register_mayugo', UserRegistro::class)->name('registroMayugo');
Route::get('/recuperar-password/{token?}', RecuperarPassword::class)->name('recuperar-password');

Route::get('/categoria/{slug}', CategoriaCurso::class )->name('categoria');
Route::get('/mi-perfil/edit', PerfilEdit::class)->name('perfil.edit')->middleware('auth');/* ver el perfil del usuario logueado */
Route::get('/perfil/{id}',[PerfilController::class,'miperfil'])->name('miuser')->middleware('auth'); /* redireccionar al menu derecho y las opciones de logueado */
Route::get('/usuario/{user}', [UserController::class, 'index'])->name('users');/* ver el perfil de un usuario cualquiera */
Route::get('/certificado/{certi}/{type}', [CertificadoController::class, 'show'])->name('certificado');/* buscar en todoas las tablas de certificados */
Route::get('/buscador/{txt?}', BuscadorPage::class)->name('buscador');
Route::get('/curso/{id}', CursoDetalle::class )->name('curso'); 
Route::get('/clases/{asig_id}/player/{mat_id}/',CursoClases::class)->name('curso.video')->middleware('auth');
Route::get('/videos/{video}', [ControllersCursoClases::class,'video'])->name('videos');


//EXAMEN POR CURSO 
Route::get('examen/termino/{id}', ExamenTermino::class)->name('examentermino')->middleware('auth');  /* aceptar terminos y condiciones de un examen */
Route::get('examen/tomar/{id}', ExamenTomar::class)->name('examentomar')->middleware('auth');/* Tomando el examen en curso */
Route::get('examen/resultado/{id}', ExamenResultado::class)->name('examenresultado')->middleware('auth');/* Ver la nota del examen  */



Route::get('cursos-scroll', [CursoScrollController::class, 'scroll']); /* CORRECTO */

// MAYULIVE
Route::get('live/{id}', [MayuLiveController::class,'index'])->name('live')->middleware('auth');

// DIPLOMADOS
Route::get('curso-vivo',DiplomadoList::class)->name('cursovivo');/* LISTAR LOS DIPLOMADOS */
Route::get('curso-vivo/{id}', [Diplomado::class, 'live'])->name('info.diplomado');/* ver detalles del diplomado o curso vivo */
Route::get('taller/{id}', [Diplomado::class, 'taller'])->name('diplomado.taller');/* ver detalles del taller gratis*/
Route::get('midiplomado/{id}', [Diplomado::class, 'index'])->name('diplomado.vivo')->middleware('auth');/* entrar a ver todo de su diplomado vivo */
Route::get('diplomado/{id}', [Diplomado::class, 'grabado'])->name('diplomado.grabado')->middleware('auth');/*  entrar a ver todo de su diplomado grabado*/
Route::get('diplomado-dashboard/{id}', [PanelDiplomadoController::class, 'student'])->name('diplomado.dash')->middleware('auth');/* Dashboard de mi diplomado en vivo  */

Route::get('talks', Talks::class)->name('talks');/* empresas */

// extras
// Route::get('paisipipip', [CursosController::class, 'paisip']);
// Route::post('savePais', [CursosController::class, 'savePais']);

// ***********************************************************ESTO PARA QUE ES***********************************************************
Route::get('midiplomado', [MiDiplomadoController::class, 'index'])->name('midiplomado')->middleware('auth');


Route::view('bolsa','bolsa')->name('bolsa');
Route::view('bolsa-especialidad','bolsa-especialidad')->name('bolsa-especialidad');
Route::view('detalle-especialidad','detalle-especialidad')->name('detalle-especialidad');
Route::view('pdf','pdf')->name('pdf');
Route::view('panel_integrado','panel_integrado')->name('panel_integrado');

Route::view('CursoPricing','CursoPricing')->name('CursoPricing');

Route::view('tanks','tanks')->name('tanks');

Route::view('regalarCurso','regalarCurso')->name('regalarCurso');

Route::view('CursoPresencial','CursoPresencial')->name('CursoPresencial');

Route::view('ModalidadPresencial','ModalidadPresencial')->name('ModalidadPresencial');

Route::view('Promociones','Promociones')->name('Promociones');

Route::view('lite','lite')->name('lite');

Route::view('comunidad','comunidad');
// Route::get('/', [HomeController::class,'index'] )->name('inicio'); ******************OBSOLETO
// Route::get('perfil', [PerfilController::class, 'show'])->name('perfil')->middleware('auth'); ******************OBSOLETO
Route::get('diplomado', [Diplomado::class, 'show'])->name('diplomado');
Route::view('mis-cursos','mis-cursos');

Route::get('checkout-course/{tipo}/{link?}/{step}',CheckoutCourse::class)->name('checkout');
Route::post('paypaypal/{type}', [PaymentController::class, 'pay'])->name('payment_paypal');
Route::get('successpaypal', [PaymentController::class, 'success']);
Route::get('cancelpaypal', [PaymentController::class, 'cancel']);

Route::get('chats', Chats::class)->name('chats')->middleware('auth');
Route::post('createOrder', function (Request $request) {    
    return response()->json($request);
}); 
Route::post('proccess2',function(Request $request){
    $token= $request->input('token'); 
    
    if($token){        
        // Configurar tu API Key
        $SECRET_API_KEY = "sk_test_e92b67f3446f0fd2";
        
        // Autenticación
        $culqi = new Culqi(array('api_key' => $SECRET_API_KEY));
        
        try{
            // Creamos Cargo a una tarjeta
            $charge = $culqi->Charges->create(
                array(
                    "amount" => 25000,
                    "currency_code" => "PEN",
                    "description" => "Venta de prueba",
                  "email" => "test@culqi.com",
                  "source_id" => $token,
                )
            );
            return response()->json($charge);   
            
        } catch(Exception $e){  
            $cargo2= $e->getMessage(); 
            return response()->json($cargo2);  
        }        
    }
 });

Route::view('success','success')->name('success');
Route::get('pay/{asignado}',CheckoutCourse::class,'pay')->name('pay');
Route::get('course-payment-order/{asignado}',CoursePaymentOrder::class)->name('coursepay');

// FOOTER
Route::view('politica-certificacion', 'politcert')->name('politica.certificacion');
Route::view('terminos-condiciones', 'termincondic')->name('terminos.condiciones');
Route::view('politica-privacidad', 'politprivac')->name('politica.privacidad');
Route::view('preguntas-frecuentes', 'pregunfrec')->name('preguntas.frecuentes');

Route::get('planes', Planes::class)->name('planes');
Route::get('oferta/{slug}', OfertaCursos::class)->name('oferta');
Route::get('packs/{slug}', PacksCursos::class); 
Route::get('gratis', CourseFree::class)->name('gratis'); 

// EXAMEN INDEPENDIENTE 
Route::get('cuestionario/{slug}', CuestionarioExt::class)->name('cuestionario'); 
Route::get('cuestionario-previa/{slug}', CuestIndepPrev::class)->name('cuest_indep_prev')->middleware('auth'); 
Route::get('cuestionario-responder/{slug}', CuestIndepResp::class)->name('cuest_indep_resp')->middleware('auth'); 
Route::get('cuestionario-resultado/{slug}', CuestIndepResult ::class)->name('cuest_indep_result')->middleware('auth'); 

// ADMIN
Route::get('admin/curso-gestion', GestionAllCourses::class)->middleware('auth'); /* crear curso */ 
Route::get('admin/curso-gestion/{id}', ModulosContenidosCursos::class)->name('curso.one')->middleware('auth');/* modulo, contenido, arch, matera, pregvuntas */
Route::get('admin/inscrip-planes', AlumnoAddInscripcion::class)->middleware('auth'); /* https://www.mayugo.net/admi */
 
Route::get('admin/curso-tarea/{idAsig}', CursoTareas::class); /* admin(calificacion de tareas) */
Route::get('admin/certificado-curso-vivo', HistorialCursovivo::class)->name('historial.cursovivo'); /* https://www.mayugo.net/certify-curso-vivo?tipo_producto=Curso%20vivo ####check####*/
Route::view('admin/dashboard-tareas', 'admin.dashboard-tareas')->name('dashboard.tareas'); /* https://www.mayugo.net/curso/dashboard-tareas ####check####*/

Route::get('admin/link-pay',LinkPay::class)->name('link.pay')->middleware('auth'); /* https://www.mayugo.net/adm-pay ####check####*/

Route::get('panel-pagoefectivo', [Administrador::class,'view_panel_pago'])->middleware('auth'); /* https://www.mayugo.net/panel-pagoefectivo ####check####*/
Route::get('insc/{tipo}/{inicio}/{fin}', [Administrador::class,'panel_pago']); /* peticion fetch  */ 

Route::get('admin/free',CursoVisto::class)->name('panel.pagoefectivo')->middleware('auth'); /* https://www.mayugo.net/free 100 ####check####*/

Route::get('admin/deudores-diversos', [Administrador::class,'deudores_diversos'])->middleware('auth'); /* https://www.mayugo.net/deudores-diversos ####check####*/
Route::get('fetch_deudores', [Administrador::class,'fetch_deudores']); /* peticion fetch  */ 
Route::get('deudor/{idpay}', [Administrador::class,'deudor_idpay']); /* peticion fetch  */ 
Route::post('email_send', [Administrador::class,'email_sendd']); /* envio email  */ 
Route::view('chats2', 'chats2')->name('chats2');

Route::get('imprim', function () {
    $dompdf = new Dompdf();

    $body = '
      <style>
        .titulo{
            font-family: "inter";
            font-size: 24px;
            font-weight: 700;
            color: #5CD685
        }
        .subtitulo{
            font-family: "inter";
            font-size: 20px;
            font-weight: 700;
            color: #5CD685
        } 
        .contenido{
            font-family: "inter";
            font-size: 18px;
            font-weight: 700;
            color: #121926
        }
        .descripcion{
            font-family: "inter";
            font-size: 12px;
            font-weight: 700;
            color: #121926
        }
        .encabesado{
            font-family: "inter";
            font-size: 32px;
            font-weight: 700;
            color: #121926
        }
      </style>
      <div class="py-32">
          <div class="w-1/2 mx-auto p-20 shadow-2xl">
              <div class="flex justify-between">

                  <div class="flex items-center ">
                      <svg width="60" height="60" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M27.2005 22.204V26.5704V27.4264C27.1386 27.487 27.0759 27.5471 27.0129 27.6069C20.6024 33.6891 10.4754 33.423 4.3931 27.0125C-1.68906 20.6021 -1.42298 10.4753 4.98745 4.39295C11.398 -1.68904 21.5251 -1.42295 27.6074 4.98747C30.4435 7.97659 31.8989 11.7738 31.995 15.592L31.996 15.6279L31.9967 15.6535H31.9962C31.9962 16.5372 31.2798 17.2535 30.3962 17.2535C29.5126 17.2535 28.7963 16.5372 28.7963 15.6535H28.7959C28.7143 12.6057 27.55 9.57584 25.286 7.18984C20.4204 2.06157 12.3183 1.84874 7.18999 6.71436C2.06172 11.58 1.84872 19.6817 6.71451 24.81C11.3285 29.6731 18.8522 30.1154 23.9913 25.9991V18.3999H27.2005V22.204Z" fill="#0083F5"/>
                          <path d="M29.1012 22.1023C28.2709 21.8001 27.8427 20.882 28.145 20.0516C28.4472 19.2213 29.3653 18.7931 30.1957 19.0954C31.0261 19.3976 31.4542 20.3157 31.152 21.1461C30.8498 21.9764 29.9316 22.4046 29.1012 22.1023Z" fill="#33CC66"/>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M27.201 18.4001H27.1917L27.1912 18.4413C27.1909 18.4551 27.1904 18.4688 27.1897 18.4824L27.1871 18.5233L27.1835 18.5637L27.179 18.6038H27.1789L27.1734 18.6437L27.1668 18.6834H27.1667L27.1593 18.7225L27.1509 18.7615H27.1507L27.1414 18.8L27.1311 18.8382L27.1198 18.8759L27.1077 18.9132L27.0947 18.9502L27.0808 18.9867L27.066 19.023L27.0505 19.0585H27.0504L27.0341 19.0938L27.0167 19.1285L26.9987 19.1626L26.9798 19.1965C26.9542 19.2411 26.9263 19.2844 26.8966 19.3263L26.874 19.3573V19.3574L26.8506 19.3878H26.8504L26.8264 19.4177L26.8016 19.4471L26.7762 19.4758H26.776L26.7499 19.504C26.7322 19.5225 26.7142 19.5406 26.6957 19.5582L26.6677 19.5844V19.5845L26.6388 19.61L26.6096 19.6347L26.5795 19.6587V19.6589L26.5491 19.6823L26.518 19.7049C26.4761 19.7347 26.4328 19.7623 26.3882 19.7881L26.3545 19.807L26.3201 19.825L26.2854 19.8422L26.2502 19.8587L26.2147 19.8743L26.1784 19.8891L26.1418 19.903L26.1049 19.9159V19.9161L26.0676 19.9281L26.0298 19.9393V19.9394L25.9917 19.9497L25.9532 19.959V19.9592L25.9142 19.9676L25.8751 19.975V19.9752L25.8356 19.9815V19.9817L25.7955 19.9872L25.7553 19.9918L25.715 19.9953V19.9954L25.6741 19.9978V19.998L25.633 19.9995L25.5918 20.0001L25.5506 19.9995C25.5368 19.999 25.5231 19.9987 25.5095 19.998V19.9978L25.4686 19.9954V19.9953L25.4283 19.9918H25.4281L25.3881 19.9872L25.348 19.9817V19.9815L25.3085 19.9752V19.975L25.2694 19.9676L25.2304 19.9592V19.959L25.1919 19.9497L25.1538 19.9394V19.9393L25.116 19.9281L25.0787 19.9161L25.0785 19.9159L25.0418 19.903H25.0416L25.0052 19.8891L24.9689 19.8743L24.9334 19.8587L24.8982 19.8422L24.8635 19.825H24.8633L24.8291 19.807L24.7954 19.7881L24.7621 19.7685V19.7683L24.7295 19.7481V19.7479L24.6972 19.7269V19.7268L24.6656 19.7049L24.6345 19.6823L24.6041 19.6589L24.6039 19.6587L24.574 19.6347L24.5448 19.61H24.5446L24.516 19.5845V19.5844L24.488 19.5582H24.4878L24.4605 19.5314L24.4337 19.504H24.4335L24.4074 19.4758L24.382 19.4471L24.3572 19.4177L24.333 19.3878L24.3097 19.3574V19.3573L24.287 19.3263L24.265 19.2947V19.2946L24.2439 19.2624L24.2234 19.2298V19.2296L24.2038 19.1965L24.1849 19.1626L24.1669 19.1285L24.1496 19.0938L24.1331 19.0585L24.1176 19.023H24.1174L24.1028 18.9867L24.0889 18.9502L24.0759 18.9132L24.0637 18.8759L24.0525 18.8382L24.0422 18.8L24.0327 18.7615L24.0243 18.7225L24.0168 18.6834L24.0102 18.6437L24.0046 18.6038L24.0001 18.5637L23.9965 18.5233L23.9939 18.4824C23.9931 18.4688 23.9925 18.4551 23.9924 18.4413L23.9919 18.4001L23.9924 18.3589C23.9927 18.3452 23.9931 18.3314 23.9939 18.3178L23.9965 18.277L23.9977 18.2622C23.9247 16.5654 22.5149 15.2002 20.8011 15.2002C19.0409 15.2002 17.6012 16.6399 17.601 18.4001H17.6008C17.6008 19.2837 16.8845 20.0001 16.0009 20.0001C15.1173 20.0001 14.401 19.2837 14.401 18.4001C14.401 16.6399 12.9609 15.2001 11.2009 15.2001C9.44069 15.2001 8.00084 16.6401 8.00084 18.4001C8.00084 19.2837 7.28452 20.0001 6.4009 20.0001C5.51727 20.0001 4.80095 19.2837 4.80095 18.4001H4.80078V18.3999C4.80078 14.8797 7.68065 12 11.2011 12C13.1076 12 14.8259 12.845 16.0011 14.1787C17.2186 12.7967 18.9572 12.0002 20.8011 12.0002C24.3213 12.0002 27.201 14.88 27.201 18.4001Z" fill="#33CC66"/>
                          </svg>
                          
      
                      <div class="encabesado pl-2">
                          MayuGo
                      </div>
                  </div>
                  <div class="descripcion">
                      <div>MayuGO Education SAC</div>
                      <div>Huánuco-Perú</div>
                      <div>RUC:20608422146</div>
                      
                  </div>
              </div>

              <div class="flex justify-between mt-14">
                  <div >
                      <div class="titulo" > RECIBO</div>
                      <div class="contenido">Pago Recibido por </div>
                      <div class="contenido">Email</div>
                      <div class="contenido">Fecha de pago </div>
                      <div class="contenido">Tipo de compra </div>
                      <div class="contenido">Método de pago </div>
                      <div class="contenido">ID de transacción  </div>
                      <div class="contenido">Tipo de moneda</div>
                      <div class="contenido">Tipo de producto </div>
                    
                  </div>
                  <div class="text-right">
                      <div class="titulo"> 0042725</div>
                      <div class="contenido">keeny miller espiritu falcon</div>
                      <div class="contenido">kennymiller@gmail.com</div>
                      <div class="contenido">2022-12-25 11:4:23 </div>
                      <div class="contenido">Compra por internet</div>
                      <div class="contenido">Transferencia </div>
                      <div class="contenido">XXXXXXXXXXXX </div>
                      <div class="contenido">USD </div>
                      <div class="contenido">Cursos online </div>
                    
                  </div>

              </div>
              <div class="flex justify-between mt-14">
                  <div class="flex gap-x-5" >
                    <div>
                      <div class="subtitulo"> Producto/servicio</div>
                      <div class="contenido">Cursos onliner </div>
                      
                    </div>

                    <div>
                      <div class="subtitulo"> Descripcion</div>
                      <div class="contenido">Fundamentos sixsigma</div>

                    </div>
                    
                  </div>
                  <div >
                      <div class="subtitulo"> Importe</div>
                      <div class="contenido">USD 100</div>
                    
                    
                  </div>

              </div>

              <div class="flex justify-between mt-14">
                  <div >
                    
                      <div class="contenido">Total </div>
                      <div class="contenido">Ahorro</div>
                      <div class="contenido">Total a pagar </div>
                  </div>
                    
                <div>
                
                      <div class="contenido">USD 100</div>
                      <div class="contenido">USD 50</div>
                      <div class="contenido">USD 50</div>
                    
                    
                  </div>

              </div>


          </div>

      </div>
     ';
    $dompdf->loadHtml($body);
    $dompdf->render();
    $dompdf->stream();
      
});

Route::get('susers/{id}', function ($id) {
    Socialite::driver('faceboook')->user();
});


// Route::view('back', 'back')->name('back');
Route::get('back',Api::class);

/* 

ENVIOS EMAILS

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=337037c2ebec01
MAIL_PASSWORD=ed7a68d09bf756
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=jlsc.hco96@gmail.com
MAIL_FROM_NAME="${APP_NAME}"


Estoy dejando en soles la moneda

*/



