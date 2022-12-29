<?php

namespace App\Http\Controllers;

use App\Mail\MailDeudores;
use App\Models\CursoInscripcion;
use App\Models\DiplomadoPagos;
use App\Models\DiplomadoPay;
use App\Models\PlanesAlumno;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Administrador extends Controller
{ 
    public function view_panel_pago()
    {
        // if (Auth::user()->tipo !== 2) return redirect()->route('inicio');
        return view('admin.pago');
    } 
    public function panel_pago($tipo, $inicio, $fin)
    {
        $datos = [];

        if($tipo == 1) { 
            foreach (CursoInscripcion::where('tipo', 'unidad')->where('monto','>',0)->whereBetween('fecha',[$inicio, $fin])
                ->orderBy('idinsc', 'DESC')->get() as $pag1) { 
                array_push($datos,[
                    'idalum' => $pag1->alumno->nombres,
                    'nombres' => $pag1->alumno->email,
                    'apellidos' => $pag1->alumno->telf,
                    'fecha_pago' => $pag1->fecha,
                    'monto_pago' => '$ '.$pag1->monto,
                    'tipo' => $pag1->tipo_pago,
                    'servicio' => 'Unidad',
                    // 'servicio' => $pag1->servicio !== NULL ? $pag1->servicio : 'Unidad',
                ]);
            } 
            foreach (DiplomadoPagos::where('monto','>',0)->whereBetween('fecha',[$inicio, $fin])->orderBy('idpay', 'DESC')->get() as $pag2) {
                array_push($datos,[
                    'idalum' => $pag2->alumno->nombres,
                    'nombres' => $pag2->alumno->email,
                    'apellidos' => $pag2->alumno->telf,
                    'fecha_pago' => $pag2->fecha,
                    'monto_pago' => '$ '.$pag2->monto,
                    'tipo' =>$pag2->tipo_pago,
                    'servicio' => 'Diplomado',
                ]);
            }    
            foreach (PlanesAlumno::where('monto','>',0)->whereBetween('fecha_pago',[$inicio, $fin])->orderBy('idpremium', 'DESC')->get() as $pag3) {
                array_push($datos,[
                    'idalum' => $pag3->alumno->nombres,
                    'nombres' => $pag3->alumno->email,
                    'apellidos' => $pag3->alumno->telf,
                    'fecha_pago' => $pag3->fecha_pago,
                    'monto_pago' => '$ '.$pag3->monto,
                    'tipo' => $pag3->tipo_pago,
                    'servicio' => $pag3->servicio,
                ]);
            }
        }elseif($tipo == 2 || $tipo == 3 || $tipo == 4){
            $clave = $tipo == 2 ? 'culqi' : ($tipo == 3 ? 'paypal' : 'pagoefectivo');
            foreach (CursoInscripcion::where('tipo', 'unidad')->where('monto','>',0)
                ->where('tipo_pago','LIKE','%'.$clave.'%')->whereBetween('fecha',[$inicio, $fin])
                ->orderBy('idinsc', 'DESC')->get() as $pag1) { 
                array_push($datos,[
                    'idalum' => $pag1->alumno->nombres,
                    'nombres' => $pag1->alumno->email,
                    'apellidos' => $pag1->alumno->telf,
                    'fecha_pago' => $pag1->fecha,
                    'monto_pago' => '$ '.$pag1->monto,
                    'tipo' => $pag1->tipo_pago,
                    'servicio' => 'Unidad',
                ]);
            } 
            foreach (DiplomadoPagos::where('monto','>',0)->where('tipo_pago','LIKE','%'.$clave.'%')->whereBetween('fecha',[$inicio, $fin])->orderBy('idpay', 'DESC')->get() as $pag2) {
                array_push($datos,[
                    'idalum' => $pag2->alumno->nombres,
                    'nombres' => $pag2->alumno->email,
                    'apellidos' => $pag2->alumno->telf,
                    'fecha_pago' => $pag2->fecha,
                    'monto_pago' => '$ '.$pag2->monto,
                    'tipo' => $pag2->tipo_pago,
                    'servicio' => 'Diplomado',
                ]);
            }    
            foreach (PlanesAlumno::where('monto','>',0)->where('tipo_pago','LIKE','%'.$clave.'%')->whereBetween('fecha_pago',[$inicio, $fin])->orderBy('idpremium', 'DESC')->get() as $pag3) {
                array_push($datos,[
                    'idalum' => $pag3->alumno->nombres,
                    'nombres' => $pag3->alumno->email,
                    'apellidos' => $pag3->alumno->telf,
                    'fecha_pago' => $pag3->fecha_pago,
                    'monto_pago' => '$ '.$pag3->monto,
                    'tipo' => $pag3->tipo_pago,
                    'servicio' => $pag3->servicio,
                ]);
            }
        }elseif($tipo == 5){
            foreach (CursoInscripcion::where('monto','>',0)->where('tipo', 'unidad')
                ->where('tipo_pago','NOT LIKE','%culqi%')->where('tipo_pago','NOT LIKE','%paypal%')->where('tipo_pago','NOT LIKE','%pagoefectivo%')->whereBetween('fecha',[$inicio, $fin])
                ->orderBy('idinsc', 'DESC')->get() as $pag1) { 
                array_push($datos,[
                    'idalum' => $pag1->alumno->nombres,
                    'nombres' => $pag1->alumno->email,
                    'apellidos' => $pag1->alumno->telf,
                    'fecha_pago' => $pag1->fecha,
                    'monto_pago' => '$ '.$pag1->monto,
                    'tipo' => $pag1->tipo,
                    'servicio' => $pag1->servicio,
                ]);
            }
            foreach (DiplomadoPagos::where('monto','>',0)->where('tipo_pago','NOT LIKE','%culqi%')->where('tipo_pago','NOT LIKE','%paypal%')->where('tipo_pago','NOT LIKE','%pagoefectivo%')->whereBetween('fecha',[$inicio, $fin])->orderBy('idpay', 'DESC')->get() as $pag2) {
                array_push($datos,[
                    'idalum' => $pag2->alumno->nombres,
                    'nombres' => $pag2->alumno->email,
                    'apellidos' => $pag2->alumno->telf,
                    'fecha_pago' => $pag2->fecha,
                    'monto_pago' => '$ '.$pag2->monto,
                    'tipo' => $pag2->tipo_pago,
                    'servicio' => 'Diplomado',
                ]);
            }    
            foreach (PlanesAlumno::where('monto','>',0)->where('tipo_pago','NOT LIKE','%culqi%')->where('tipo_pago','NOT LIKE','%paypal%')->where('tipo_pago','NOT LIKE','%pagoefectivo%')->whereBetween('fecha_pago',[$inicio, $fin])->orderBy('idpremium', 'DESC')->get() as $pag3) {
                array_push($datos,[
                    'idalum' => $pag3->alumno->nombres,
                    'nombres' => $pag3->alumno->email,
                    'apellidos' => $pag3->alumno->telf,
                    'fecha_pago' => $pag3->fecha_pago,
                    'monto_pago' => '$ '.$pag3->monto,
                    'tipo' => $pag3->tipo_pago,
                    'servicio' => $pag3->servicio,
                ]);
            }
        }
        
        return response()->json($datos,200);
    } 
    public function deudores_diversos()
    {
        // if (Auth::user()->tipo !== 2) return redirect()->route('inicio');
        return view('admin.deudores-diversos');
    }
    public function fetch_deudores()
    {
        $users = [];
        foreach (DiplomadoPay::where('situacion','Deuda')->get() as $deuda) {
            $pay_tot = $deuda->diplomado_grupo->precio_venta;
            if(Carbon::now() > $deuda->fecha_expiracion) $status = 'Expiro';
            else $status = 'Activo ('.Carbon::now()->diffInDays($deuda->fecha_expiracion).' dia(s) )';
            $btn = "<button class='bg-blue-500 text-white rounded-md px-4 py-2 hover:bg-blue-700 transition' x-on:click='abrir_modal($deuda->idpay)'>Open modal</button>";
            array_push($users,[
                'idpay' => $deuda->idpay,
                'email' => $deuda->alumno->email,
                'alumno' => $deuda->alumno->nombres.' '.$deuda->alumno->apellidos,
                'telf' => $deuda->alumno->telf,
                'producto' => $deuda->diplomado_grupo->titulo,
                'last_pago' => $deuda->fecha,
                'day_pay' => $deuda->fecha_expiracion,
                'paid' => '$ '.$deuda->monto,
                'pending' => '$ '.$pay_tot-$deuda->monto,
                'status' => $status,
                'action' => $btn,
            ]);
        }
        return response()->json($users,200);
    }
    public function deudor_idpay($id_pay)
    {
        $diplomado_pay = DiplomadoPay::find($id_pay);

        $body = 
        '
        <div>
            <div>
                <input type="text" placeholder="Enviado por Admin@mayugo.site" id="e_remit" value="'.$id_pay.'">
            </div>
            <div>
                <label for="">Para</label>
                <input type="text" placeholder="Email del destinatario" id="e_dest" value="'.$diplomado_pay->alumno->email.'">
            </div>
            <div>
                <label for="">Asunto</label>
                <input type="text" placeholder="Asunto del email" id="e_asunt" value="Recordatorio de pago factura N° 000'.$id_pay.'">
            </div>

            <div>
                <label for="">Mensaje</label>
                <textarea name="" id="e_mensj" cols="30" rows="10">
                    <h4>Estimado(a) <strong>'.$diplomado_pay->alumno->nombres.'</strong> :</h4>
                    <p>Le notificamos que tiene una factura pendiente, porfavor realizar el pago correspondiente. A continuación los detalles.</p>
                    <p><strong>Servicio</strong>: '.$diplomado_pay->diplomado_grupo->titulo.'</p>
                    <p><strong>Fecha adquisición</strong>: '.$diplomado_pay->fecha.'</p>
                    <p><strong>Monto pendiente</strong>: $ '.$diplomado_pay->diplomado_grupo->precio_venta-$diplomado_pay->monto.' USD</p><p>&nbsp;</p>
                    <p>Recuerda que puedes realizar tus pagos mediante nuestra plataforma, PayPal o Transferencia bancaria Una vez realizado el pago enviar tu recibo a pagos@mayugo.net y 
                    tu correo registrado en nuestra web www.mayugo.net Si usted ya realizó el pago, responder este mail con capturas de la cuota (s) cancelada (s).</p><p>&nbsp;</p>
                    <h3><i>Team MayuGo</i></h3> 
                </textarea>
            </div>
        </div>
        ';
        return response()->json($body,200);
    }
    public function email_sendd(Request $request)
    {
        // $buscar=array(chr(13).chr(10), '\r\n','\n','\r');
        // $reemplazar=array("", "", "", "");
        // $cadena=str_replace($buscar,$reemplazar,$message);
        $correo = new MailDeudores($request->input('e_asunt'),$request->input('e_mensj'));
        Mail::to('jlsc.hco96@gmail.com')->send($correo); 
        return response()->json('Correo enviado',200);
    }
    public function destroy($id)
    {
        //
    }
}
