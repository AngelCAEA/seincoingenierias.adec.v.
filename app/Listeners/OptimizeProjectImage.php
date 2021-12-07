<?php

namespace App\Listeners;

use App\Events\ProjectSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class OptimizeProjectImage implements ShouldQueue {
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProjectSaved  $event
     * @return void
     */
    public function handle(ProjectSaved $event) {
        
       $img = Image::make(Storage::get($event->project->img));

       $img->widen(600)->limitColors(255)->encode();

       Storage::put($event->project->img, (string) $img);

    }
}
