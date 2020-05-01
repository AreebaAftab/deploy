<?php

namespace App\Listeners;

use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddNumbersListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    public function handle($event)
    {
        User::query()->update(['calculated-sum' => $event->c]);
    }
}
