<?php

namespace App\Listeners;

use App\User;
use App\Events\UserWasBanned;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EmailBanNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    protected $user;

    public function __construct( User $user)
    {
        $this->user = $user;
    }

    /**
     * Handle the event.
     *
     * @param  UserWasBanned  $event
     * @return void
     */
    public function handle(UserWasBanned $event)
    {
        // 
        var_dump('Notifiy '.$this->user->name." That they have been banned from the site");
    }
}
