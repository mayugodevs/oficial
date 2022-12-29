<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EnviarPorcentaje implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $pregunta;
    
    public function __construct($id)
    {
        $this->pregunta = $id;
    }

   
    public function broadcastOn()
    {
        return ['alt-channel'];
    }

    public function broadcastAs(){
        return 'alt-event';
    }
}

