<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EnviarMensaje implements ShouldBroadcast
{ 
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $mens, $user;
    
    public function __construct($mens,$user)
    {
        $this->mens = $mens;
        $this->user = $user;
    }

   
    public function broadcastOn()
    {
        return ['l-channel'];
    }

    public function broadcastAs(){
        return 'l-event';
    }
}
