<?php

namespace App\Http\Livewire;

use App\Mail\MailRecuvePassword;
use App\Models\PasswordRecuve;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class RecuperarPassword extends Component
{

    public $token_recuve;
    public $email;
    public $user_existe;
    public $tipo = 1;
    public $pass1;
    public $pass2;
    public $verificar;
    public $message_estado = 'Token expiró';
    public $time_expiration = 10;
    public $listeners = ['validar_email','verificar_password'];
    public function mount($token=''){
        if($this->token_recuve !== '') $this->validar_tiempo_token($token);
    }

    public function validar_tiempo_token($token){
        $this->token_recuve = $token;
        // $descr = $this->token_dencryption($token); 
        $this->verificar = PasswordRecuve::where('token', $this->token_recuve)->first();
        if($this->verificar){ 
            if(!$this->verificar->estado){
                if(Carbon::now()->subMinutes($this->time_expiration) >= $this->verificar->tiempo_creacion ) {
                    $this->tipo = 1;
                    // $this->message_estado= 'Token expiro';
                }else {
                    $this->message_estado= '';
                    $this->user_existe = $this->verificar->alumno;
                    $this->tipo = 3;
                }
            } else {
                // $this->message_estado= 'Token ya fue usado';
                // $this->tipo = 1;
                return redirect()->route('inicio');
            }
        }else { 
            $this->message_estado= 'No existe token';
            $this->message_estado= $token === '' ? '' : 'No existe token';
            $this->tipo = 1; 
        }
    }
    public function validar_email(){
        $this->user_existe = User::where('email', $this->email)->first();
        if($this->user_existe){
            if($this->user_existe->estado)
                if($this->user_existe->status){
                    $this->dispatchBrowserEvent('resolve', ['message' => 'Estamos enviando un email a tu correo']);
                    $this->tipo = 2;
                    $this->send_email_recover_password();
                }
                else $this->dispatchBrowserEvent('reject', ['message' => 'Usuario no activo cuenta']);
            else $this->dispatchBrowserEvent('reject', ['message' => 'Usuario estado inactivo']); 
        }
        else $this->dispatchBrowserEvent('reject', ['message' => 'Correo no existe']);
    }
    public function send_email_recover_password(){    
        $token = $this->crear_token_recuperar_passw();    
        if($token){
            $body = '
                <div>
                    <h3><strong>Restablece tu contraseña</strong></h3>
                    <p>Hola <strong>'.$this->user_existe->nombres.'</strong>, hemos recibido una solicitud para cambiar tu contraseña, puedes hacerlo entrando aquí</p>
                    <button class="x_hover-me-3" style="color:rgb(255,255,255); background:#33cc66; padding:10px 20px; border-radius:10px; font-size:16px; text-decoration:none; display:inline-block">
                        <a href="http://127.0.0.1:8000/recuperar-password/'.$token.'">
                            <strong><span>Restablecer contraseña</span></strong>
                        </a>
                    </button>

                    <p>Si no solicitaste el cambio de contraseña ignora este correo.</p>
                </div>
            ';
            $correo = new MailRecuvePassword($body);
            Mail::to('jlsc.hco96@gmail.com')->send($correo);  
        }        
    }
    public function crear_token_recuperar_passw(){
        $time = Carbon::now();
        $token = $this->token_encryption($time);
        if($token){
            PasswordRecuve::updateOrInsert(
                [
                    'user_id' => $this->user_existe->idalum
                ],
                [
                    'token' => $token,
                    'estado' => 0,
                    'tiempo_creacion' => $time,
                ]
            );
        }
        return $token;
    }
    public function token_encryption($time){
        $simple_string = $this->user_existe->email.'-'.$time.'-'.$this->user_existe->idalum;  
        $ciphering = "AES-128-CTR";
        $options = 0;        
        $encryption_iv = '1234567891011121';        
        $encryption_key = "mayugo_net";        
        $token = openssl_encrypt($simple_string, $ciphering,$encryption_key, $options, $encryption_iv);  
        $encryption = str_replace('/', '=-=', $token); 
        return $encryption;  
    }
    public function token_dencryption($token){ 
        $string_token = str_replace('=-=', '/', $token); 
        $ciphering = "AES-128-CTR";
        $options = 0;        
        $encryption_iv = '1234567891011121';        
        $encryption_key = "mayugo_net";        
        $decryption=openssl_decrypt ($string_token, $ciphering,$encryption_key, $options, $encryption_iv);  
        return $decryption;
    }
    public function verificar_password(){
        if($this->pass1 === $this->pass2){
            User::find($this->user_existe->idalum)->update(
                [
                    'pass' => Hash::make($this->pass1)
                ]
            );
            $this->verificar->update(
                [
                    'estado' => 1,
                ]
            );
            $this->tipo = 4;
            $this->dispatchBrowserEvent('resolve', ['message' => 'Se cambio contraseñas']);
            $this->dispatchBrowserEvent('redirect');
        } else $this->dispatchBrowserEvent('reject', ['message' => 'Contraseñas diferentes']);
    }
    // public function cambio_estado(){
    //     $this->message_estado = '';
    // }
    public function render()
    {
        return view('livewire.recuperar-password')
            ->extends('layout');
    }

}
 