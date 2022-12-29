<?php

namespace App\Mail;

use Illuminate\Bus\Queueable; 
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailDeudores extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;
    public $message; 
    public function __construct($subject,$message)
    {
        $this->subject = $subject;
        $this->message = $message;
    } 
    public function build()
    { 
        return $this->view('admin.email-deudores')
            ->html($this->message)
            /* ->with([  
                'content' => $this->message, 
            ]) */;
    }
}
