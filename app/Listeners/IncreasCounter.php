<?php

namespace App\Listeners;

use App\Events\Event;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use MongoDB\Driver\Session;
use phpDocumentor\Reflection\Types\False_;

class IncreasCounter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(event $event)
    {
        if(!session()->has('videoIsVisited')){
        $this->updateviewer($event -> video);
        }else{
            return false;
        }
    }

    function updateviewer($video){


        $video -> viewer = $video -> viewer + 1;
        $video -> save();

        session()->put('videoIsVisited',$video->id);
    }
}
