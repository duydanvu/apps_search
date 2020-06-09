<?php

namespace App\Listeners;

use App\Events\productupdate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class productupdatedata
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
     * @param  productupdate  $event
     * @return void
     */
    public function handle(productupdate $event)
    {
        //
    }
}
