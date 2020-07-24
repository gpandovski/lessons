<?php

namespace App\Listeners;

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
    protected $pdfGenerator;

    public function __construct(IPdf $pdfGenerator)
    {
        //
        $this->pdfGenerator = $pdfGenerator;
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
        // $this->pdfGenerator->write()
    }
}
