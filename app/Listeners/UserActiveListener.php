<?php

namespace App\Listeners;

use App\Events\UserActiveEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserActiveListener
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
     * @param  UserActiveEvent  $event
     * @return void
     */
    public function handle(UserActiveEvent $event)
    {
        //
    }
}
