<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\CuponGeneral;
use App\Models\Curso;
use App\Models\CursoInscripcion;  
use App\Models\DiplomadoPay;
use App\Models\LinkGenerador;
use App\Models\LinkPay;
use App\Models\Pais;
use App\Models\PlanesAlumno;
use Carbon\Carbon;
use Dompdf\Dompdf; 
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class CheckoutCourse extends Component
{
    // public $asignado;
    public $type;
    public $inp_cupon;
    public $sub_precio = 0;
    public $link = 0;
    public $link_generador;
    public $usuario;
    public $fecha_limite = false;
    public $precio_des = 0;
    public $descuent = 0;
    public $precioFinal = 0; //solo si es tipo 4
    public $precio_oferta = 0; //precio finalizima
    public $existe = false; //existe cupon
    public $buscand = false; //buscando cupon
    public $modal_cupon = true; //buscando cupon
    public $list = ['EAIaIQobChMl' ,'IudnH6cXS9GR', 'IVjIKRCh1gkg' ,'uEAAYASAAEgJ','KRCh1H6cXIQo','jIKRCQobCh'];
                   //curso 1         plan 2          diplomado 3     'k'x1 4        prices dists 5   links pays 6
    public $products = [];
    public $cart = [];
    public $paises = [];
    public $cambio = 1;
    public $pais_cod = 0;
    public $pais_se = false;
    public $simbolo = 'USD';
    public $cod_iso = '$';
    public $paso_compra = 1;
    public $tipo_pago = 1;
    public $step = 'first';

    public $categoria_select = 0;
    public $categorias = [];
    // tipo 4 y 5 y 6  no tiene cupones
    // tipo 5 y 6 depende de las urls los cursos ########listo 

    // para el modal promo
    public $codigo = false;
    protected $listeners = ['load_modal','valor_modal'];
    public function mount($tipo, $link = '', $step='first')
    {
        $user = Auth::user();
        $this->usuario = $user ? $user : false; 
        // $this->paises = Pais::all()->select('');

        $this->cart = Cart::content();
        if (in_array($tipo, $this->list)) {
            $this->type = $tipo == 'EAIaIQobChMl' ? ['Cursos',1] : 
                ($tipo == 'IudnH6cXS9GR' ? ['Plan',2] : 
                ($tipo == 'IVjIKRCh1gkg' ? ['Diplomado',3] : 
                ($tipo == 'uEAAYASAAEgJ' ? ['oferta "k"x1',4] :
                ($tipo == 'KRCh1H6cXIQo' ? ['precios dists',5] : ['links pays',6]))));
            if($this->type[1] === 2){ 
                $this->categorias = Categoria::where('estado',1)->get();
            }
            elseif($this->type[1] === 5) {
                $this->link = $link;
            }
            elseif ($this->type[1] === 6) {
                $this->link_generador = LinkGenerador::find($link);
                if (!$this->link_generador) redirect()->route('inicio');
                $this->fecha_limite = $this->link_generador->fecha_expiracion > Carbon::now() ? true : false;
                $this->precio_oferta = $this->link_generador->precio_venta;
            }

            session_start();
            $money = Pais::find(isset($_SESSION['money_user']) ? $_SESSION['money_user'] : 13);
            $this->simbolo = $money->simbolo;
            $this->cambio = $money->cambio;
            $this->cod_iso = $money->cod_iso;
        } else redirect()->route('inicio');

    }
    // cerrar modal desde javascript
    public function valor_modal(){
        $this->modal_cupon = false;
    }
    public function comprar(){
        if ($this->type[1] == 1) {
            foreach ($this->products as $product) { 
                $inscripcion = CursoInscripcion::where('idalum',$this->usuario->idalum)->where('asignados_idasig', $product['options']['idasig'])->first();

                $datos = [
                    'nmr_trans' => 'XXXXXXXXXXXX',
                    'fecha' => now(),
                    'monto' => $product['price'],
                    'tipo_pago' => $this->tipo_pago == 1 ? 'Tarjeta' : ($this->tipo_pago == 2 ? 'Paypal' : ($this->tipo_pago == 2 ? 'Transferencia' : 'Pago Efectivo')),
                    'tipo' => 'Unidad',
                    'servicio' => 'Unidad',
                    'idpremium' => NULL,
                    'fecha_inicio' => now(),
                    'fecha_fin' => NULL,
                ];
                if(!$inscripcion) {/* validar que no tenga ese curso */
                    $datos = array_merge(
                        [
                            'idalum' => $this->usuario->idalum,
                            'asignados_idasig' => $product['options']['idasig'],
                        ], 
                        $datos
                    );
                    CursoInscripcion::create($datos); 
                }
                else {
                    if ($inscripcion->fecha_fin !== NULL) {
                        $inscripcion->update($datos);
                        $this->dispatchBrowserEvent('reject', ['message' => 'Fecha Modificado']);
                    } else $this->dispatchBrowserEvent('reject', ['message' => 'Ya cuenta con este curso']);                                  
                }    
            }
        } 
        elseif ($this->type[1] == 2){
            // verificacion de un plan existente, por lo contrario crearle un plan_alumno
            $plan_existe = PlanesAlumno::where('idalumno',$this->usuario->idalum)->first();
            $datos = [
                'idcategoria' => $this->products[0]['id'] === 3 ? NULL : $this->categoria_select,
                'idplan' => $this->products[0]['id'],
                'fecha_inicio' => now(),
                'fecha_fin' => $this->products[0]['id'] === 1 ? now()->addMonth() : now()->addYear(),
                'fecha_pago' => now(),
                'nro_trans' => 'xxxxxxxxxx',
                'monto' => $this->sub_precio,
                'servicio' => $this->products[0]['id'] === 1 ? 'Básico' : ($this->products[0]['id'] === 2 ? 'Premiun' : 'Duo'),
                'tipo_pago' => 'BBVA',
                'estado' => 1,
                'fecha_retencion' => $this->products[0]['id'] === 1 ? now()->addMonth() : now()->addYear(),
                'situacion' => 'Corriendo',
            ];
            if($plan_existe){
                $plan_existe->update($datos);
            }else{
                PlanesAlumno::create(
                    array_merge(
                        [
                            'idalumno' => $this->usuario->idalum
                        ], 
                        $datos
                    )
                );
            }
            // inscripciones a cursos activos
            // seleccionar los cursos de la categoria seleccionado
            $cursos = Curso::where('estado',1)->get();
            if($this->products[0]['id'] === 1){
                $cursos = Curso::where('idc',$this->categoria_select)->where('estado',1)->get();
            }
            $this->inscripciones_cursos($plan_existe, $cursos);
        }
        elseif ($this->type[1] == 3){
            DiplomadoPay::updateOrInsert(
                [
                    'diplomados_id' => $this->products[0]['id'],
                    'alumno_id' => $this->usuario->idalum,
                ],
                [
                    'nmr_trans' => 'XXXXXXXXXXXX',
                    'tipo_pago' => 'BBVA',
                    'dipl_precio_id' => 1,
                    'monto' => $this->products[0]['price'],
                    'fecha' => now(),
                ]
            );            
        }
        elseif ($this->type[1] == 4 || $this->type[1] == 5){
            
            $cursos = [];
            foreach ($this->products as $curso) {
                array_push($cursos, Curso::where('idcur',$curso['id'])->first());
            } 
            $this->inscripciones_cursos(NULL, $cursos); 
        } 
        else {
            LinkPay::create([
                'nmr_trans' => 'xxxxxxxxx',
                'tipo' => 'BBVA',
                'monto' => $this->precio_oferta,
                'fecha' => now(),
                'link_gen_id' => $this->link_generador->id,
                'user_id' => $this->usuario->idalum,
            ]);
        }
        $this->dispatchBrowserEvent('resolve', ['message' => '¡Tu compra fue exitoso!...']);
        
    }
    public function inscripciones_cursos($plan_existe = NULL, $cursos){ 
        $idpremium =  $plan_existe ?  $plan_existe->idpremium : NULL;
        $monto =  $plan_existe ?  0 : $this->precio_oferta;
        $name_plan = $plan_existe ? ($this->products[0]['id'] === 1 ? 'Básico' : ($this->products[0]['id'] === 2 ? 'Premiun' : 'Duo')) : 'Unidad';
        $fecha_fin = $plan_existe ? ($this->products[0]['id'] === 1 ? now()->addMonth() : now()->addYear()) : NULL;
        foreach ($cursos as $curso) {
            $inscripcion_existe = CursoInscripcion::where('asignados_idasig', $curso->cursoAsignacion->idasig)->where('idalum', $this->usuario->idalum)->first();
            $datos = [
                'nmr_trans' => 'xxxxxx',
                'estado' => 1,
                'idpremium' => $idpremium,
                'tipo_pago' => 'BBVA',
                'monto' => $monto,
                'fecha' => now(),
                'servicio' => $name_plan,
                'tipo' => $name_plan,
                'fecha_inicio' => now(),
                'fecha_fin' => $fecha_fin,
            ];
            if($inscripcion_existe){
                $inscripcion_existe->update($datos);
            }else{
                CursoInscripcion::create(array_merge(
                    [
                        'idalum' => $this->usuario->idalum,
                        'asignados_idasig' => $curso->cursoAsignacion->idasig,
                    ], 
                    $datos
                ));
            }
        }
    }
    public function removeProduct($type){
        Cart::remove($type);        
        $this->emitTo('carrito','render');
    }
    public function validCupon(){
        $this->reset('buscand','existe');
        $this->buscand = true;
        foreach (CuponGeneral::where('tipo_cupon', $this->type[1])->get() as $key => $cupon) {
            if($cupon->cupon == $this->inp_cupon){
                $this->existe = true;
                $this->precio_des = $this->sub_precio-$cupon->descuento;
                $this->descuent = $cupon->descuento;
            }                
        }
    }
    public function removeCupon(){
        $this->reset('buscand','existe','precio_des','descuent','inp_cupon');
    }
    public function dowloandFactura(){
        // $pdf = barr
        // $dompdf = new Dompdf();

        // $body = $this->body_pdf('luis');
        // $dompdf->loadHtml($body);
        // $dompdf->render();
        // $dompdf->stream();
    }
    public function body_pdf($datos){

        $body = '
        <div class="py-32">
            <div class="w-1/2 mx-auto p-20 shadow-2xl">
                <div class="flex justify-between">

                    <div class="flex items-center ">
                        <svg width="60" height="60" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.2005 22.204V26.5704V27.4264C27.1386 27.487 27.0759 27.5471 27.0129 27.6069C20.6024 33.6891 10.4754 33.423 4.3931 27.0125C-1.68906 20.6021 -1.42298 10.4753 4.98745 4.39295C11.398 -1.68904 21.5251 -1.42295 27.6074 4.98747C30.4435 7.97659 31.8989 11.7738 31.995 15.592L31.996 15.6279L31.9967 15.6535H31.9962C31.9962 16.5372 31.2798 17.2535 30.3962 17.2535C29.5126 17.2535 28.7963 16.5372 28.7963 15.6535H28.7959C28.7143 12.6057 27.55 9.57584 25.286 7.18984C20.4204 2.06157 12.3183 1.84874 7.18999 6.71436C2.06172 11.58 1.84872 19.6817 6.71451 24.81C11.3285 29.6731 18.8522 30.1154 23.9913 25.9991V18.3999H27.2005V22.204Z" fill="#0083F5"/>
                            <path d="M29.1012 22.1023C28.2709 21.8001 27.8427 20.882 28.145 20.0516C28.4472 19.2213 29.3653 18.7931 30.1957 19.0954C31.0261 19.3976 31.4542 20.3157 31.152 21.1461C30.8498 21.9764 29.9316 22.4046 29.1012 22.1023Z" fill="#33CC66"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.201 18.4001H27.1917L27.1912 18.4413C27.1909 18.4551 27.1904 18.4688 27.1897 18.4824L27.1871 18.5233L27.1835 18.5637L27.179 18.6038H27.1789L27.1734 18.6437L27.1668 18.6834H27.1667L27.1593 18.7225L27.1509 18.7615H27.1507L27.1414 18.8L27.1311 18.8382L27.1198 18.8759L27.1077 18.9132L27.0947 18.9502L27.0808 18.9867L27.066 19.023L27.0505 19.0585H27.0504L27.0341 19.0938L27.0167 19.1285L26.9987 19.1626L26.9798 19.1965C26.9542 19.2411 26.9263 19.2844 26.8966 19.3263L26.874 19.3573V19.3574L26.8506 19.3878H26.8504L26.8264 19.4177L26.8016 19.4471L26.7762 19.4758H26.776L26.7499 19.504C26.7322 19.5225 26.7142 19.5406 26.6957 19.5582L26.6677 19.5844V19.5845L26.6388 19.61L26.6096 19.6347L26.5795 19.6587V19.6589L26.5491 19.6823L26.518 19.7049C26.4761 19.7347 26.4328 19.7623 26.3882 19.7881L26.3545 19.807L26.3201 19.825L26.2854 19.8422L26.2502 19.8587L26.2147 19.8743L26.1784 19.8891L26.1418 19.903L26.1049 19.9159V19.9161L26.0676 19.9281L26.0298 19.9393V19.9394L25.9917 19.9497L25.9532 19.959V19.9592L25.9142 19.9676L25.8751 19.975V19.9752L25.8356 19.9815V19.9817L25.7955 19.9872L25.7553 19.9918L25.715 19.9953V19.9954L25.6741 19.9978V19.998L25.633 19.9995L25.5918 20.0001L25.5506 19.9995C25.5368 19.999 25.5231 19.9987 25.5095 19.998V19.9978L25.4686 19.9954V19.9953L25.4283 19.9918H25.4281L25.3881 19.9872L25.348 19.9817V19.9815L25.3085 19.9752V19.975L25.2694 19.9676L25.2304 19.9592V19.959L25.1919 19.9497L25.1538 19.9394V19.9393L25.116 19.9281L25.0787 19.9161L25.0785 19.9159L25.0418 19.903H25.0416L25.0052 19.8891L24.9689 19.8743L24.9334 19.8587L24.8982 19.8422L24.8635 19.825H24.8633L24.8291 19.807L24.7954 19.7881L24.7621 19.7685V19.7683L24.7295 19.7481V19.7479L24.6972 19.7269V19.7268L24.6656 19.7049L24.6345 19.6823L24.6041 19.6589L24.6039 19.6587L24.574 19.6347L24.5448 19.61H24.5446L24.516 19.5845V19.5844L24.488 19.5582H24.4878L24.4605 19.5314L24.4337 19.504H24.4335L24.4074 19.4758L24.382 19.4471L24.3572 19.4177L24.333 19.3878L24.3097 19.3574V19.3573L24.287 19.3263L24.265 19.2947V19.2946L24.2439 19.2624L24.2234 19.2298V19.2296L24.2038 19.1965L24.1849 19.1626L24.1669 19.1285L24.1496 19.0938L24.1331 19.0585L24.1176 19.023H24.1174L24.1028 18.9867L24.0889 18.9502L24.0759 18.9132L24.0637 18.8759L24.0525 18.8382L24.0422 18.8L24.0327 18.7615L24.0243 18.7225L24.0168 18.6834L24.0102 18.6437L24.0046 18.6038L24.0001 18.5637L23.9965 18.5233L23.9939 18.4824C23.9931 18.4688 23.9925 18.4551 23.9924 18.4413L23.9919 18.4001L23.9924 18.3589C23.9927 18.3452 23.9931 18.3314 23.9939 18.3178L23.9965 18.277L23.9977 18.2622C23.9247 16.5654 22.5149 15.2002 20.8011 15.2002C19.0409 15.2002 17.6012 16.6399 17.601 18.4001H17.6008C17.6008 19.2837 16.8845 20.0001 16.0009 20.0001C15.1173 20.0001 14.401 19.2837 14.401 18.4001C14.401 16.6399 12.9609 15.2001 11.2009 15.2001C9.44069 15.2001 8.00084 16.6401 8.00084 18.4001C8.00084 19.2837 7.28452 20.0001 6.4009 20.0001C5.51727 20.0001 4.80095 19.2837 4.80095 18.4001H4.80078V18.3999C4.80078 14.8797 7.68065 12 11.2011 12C13.1076 12 14.8259 12.845 16.0011 14.1787C17.2186 12.7967 18.9572 12.0002 20.8011 12.0002C24.3213 12.0002 27.201 14.88 27.201 18.4001Z" fill="#33CC66"/>
                            </svg>
                            
        
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-3xl">
                            MayuGo
                        </div>
                    </div>
                    <div class="text-txtnamecomntpkyr font-inter font-bold text-xs">
                        <div>MayuGO Education SAC</div>
                        <div>Huánuco-Perú</div>
                        <div>RUC:20608422146</div>
                        
                    </div>
                </div>

                <div class="flex justify-between mt-14">
                    <div >
                        <div class="text-greenhover font-inter font-bold text-3xl"> RECIBO</div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">Pago Recibido por </div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">Email</div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">Fecha de pago </div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">Tipo de compra </div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">Método de pago </div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">ID de transacción  </div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">Tipo de moneda</div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">Tipo de producto </div>
                    
                    </div>
                    <div class="text-right">
                        <div class="text-greenhover font-inter font-bold text-3xl"> 0042725</div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">keeny miller espiritu falcon</div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">kennymiller@gmail.com</div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">2022-12-25 11:4:23 </div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">Compra por internet</div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">Transferencia </div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">XXXXXXXXXXXX </div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">USD </div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">Cursos online </div>
                    
                    </div>

                </div>
                <div class="flex justify-between mt-14">
                    <div class="flex gap-x-5" >
                    <div>
                        <div class="text-greenhover font-inter font-bold text-xl"> Producto/servicio</div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">Cursos onliner </div>
                        
                    </div>

                    <div>
                        <div class="text-greenhover font-inter font-bold text-xl"> Descripcion</div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">Fundamentos sixsigma</div>

                    </div>
                    
                    </div>
                    <div >
                        <div class="text-greenhover font-inter font-bold text-xl"> Importe</div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">USD 100</div>
                    
                    
                    </div>

                </div>

                <div class="flex justify-between mt-14">
                    <div >
                    
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">Total </div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">Ahorro</div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">Total a pagar </div>
                    </div>
                    
                <div>
                
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">USD 100</div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">USD 50</div>
                        <div class="text-txtnamecomntpkyr font-inter font-bold text-lg">USD 50</div>
                    
                    
                    </div>

                </div>


            </div>

        </div>
        ';
        return $body;
    }
    public function load_modal(){
        $this->codigo = CuponGeneral::where('id_diccionario','!=', NULL)->orderByRaw("RAND()")->first();
        // $this->dispatchBrowserEvent('resolve', ['message' => 'Mandando modal']);
    }
    public function render()
    {         
        if($this->type[1] !== 6){
            $this->reset('products','sub_precio','precio_oferta');
            foreach (Cart::content() as $item) {
                if ($item->options->type == $this->type[1]){
                    if($this->type[1] === 4) {
                        $this->sub_precio = $item->price > $this->sub_precio ?  $item->price : $this->sub_precio;
                        array_push($this->products, $item);
                    }
                    elseif($this->type[1] === 5 ){
                        if ($item->options->promo == $this->link) {
                            $this->sub_precio += $item->price;
                            array_push($this->products, $item);
                        }
                    }else {
                        $this->sub_precio += $item->price;
                        array_push($this->products, $item);
                    }
                    
                }
                
            }   
            if($this->type[1] === 5 || $this->type[1] === 4) $this->precio_oferta = $this->sub_precio/count($this->products);
        }
        if($this->pais_cod != 0){
            $this->pais_se = Pais::find($this->pais_cod);
        }
        return view('livewire.checkout-course')->extends('layout')->section('content');
    }
}



// en packs cursos falta cuando son de otro slug, corregir eso
/* 
CREATE TABLE `cupones_diccionario` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `textocabecera` text DEFAULT NULL,
  `textocentral` text NOT NULL DEFAULT 'Super oferta',
  `textosecundario` text NOT NULL DEFAULT 'Código:',
  `img` text DEFAULT NULL,
  `tipo` enum('1','2','3') DEFAULT NULL,
  `fecha_ini` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `estado` enum('Activo','Inactivo') NOT NULL,
  PRIMARY KEY(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `cupones_general`
(
    `id` int(6) NOT NULL AUTO_INCREMENT,
    `cupon` varchar(30),
    `descuento`   decimal(6,2),
    `tipo_cupon` int(1), 
    `estado` int(11) DEFAULT NULL,
  `publico` int(2) NOT NULL DEFAULT 0,
  `id_diccionario` int(11) DEFAULT NULL,
    PRIMARY KEY(id), 
    FOREIGN KEY (id_diccionario) REFERENCES cupones_diccionario(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

*/