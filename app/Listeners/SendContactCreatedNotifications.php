<?php

namespace App\Listeners;

use App\Models\Contact;
use App\Models\User;
use App\Notifications\NewContactMessage;
use App\Events\ContactCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendContactCreatedNotifications implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ContactCreated $event): void
    {

            foreach (User::all() as $user) {

                $user->notify(new NewContactMessage($event->contact));

            }
    }
}
