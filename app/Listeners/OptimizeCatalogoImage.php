<?php

namespace App\Listeners;

use App\Events\CatalogoSaved;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class OptimizeCatalogoImage implements ShouldQueue{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(){
        //
    }

    /**
     * Handle the event.
     *
     * @param  CatalogoSaved  $event
     * @return void
     */
    public function handle(CatalogoSaved $event) {
        
        $img = Image::make(Storage::get($event->catalogo->img));

        $img->widen(600)->limitColors(255)->encode();

        Storage::put($event->catalogo->img, (string) $img);

    }
}
