<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Project;

class ProjectSaved {

    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $project;
   
    public function __construct(Project $project) {
        
        $this->project = $project;
    }

   
    public function broadcastOn() {
        return new PrivateChannel('channel-name');
    }
}
