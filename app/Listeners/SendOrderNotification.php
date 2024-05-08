<?php

namespace App\Listeners;

use App\Events\OrderPlaced;
use App\Mail\OrderCompletedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;


class SendOrderNotification
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
    public function handle(OrderPlaced $event): void
    {
           // Retrieve the user associated with the order
           $user = $event->order->user;

           // Send the mail notification
           MaiL::to($user->email)->send(new OrderCompletedNotification($event->order));
    }
}
