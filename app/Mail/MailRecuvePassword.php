<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailRecuvePassword extends Mailable
{
    use Queueable, SerializesModels;

    public $subject  = '¿Olvidaste tu contraseña?, Recupérala aquí';
    public $message;
    public function __construct($body)
    {   
        $this->message = $body;
    } 
    public function build()
    {
        return $this->view('admin.email-recuvepass')
            ->html($this->message);
    }
}
