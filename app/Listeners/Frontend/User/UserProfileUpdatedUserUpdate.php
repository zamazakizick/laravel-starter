<?php

namespace App\Listeners\Frontend\User;

use App\Events\Frontend\User\UserProfileUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserProfileUpdatedUserUpdate implements ShouldQueue
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
     * @param  UserProfileUpdated  $event
     * @return void
     */
    public function handle(UserProfileUpdated $event)
    {
        $user = $event->user;
        //
    }
}
