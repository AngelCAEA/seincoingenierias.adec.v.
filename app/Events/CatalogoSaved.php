<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Catalog;

class CatalogoSaved {

    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $catalogo;

    public function __construct(Catalog $catalogo) {
        
        $this->catalogo = $catalogo;
    }
    
    
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
