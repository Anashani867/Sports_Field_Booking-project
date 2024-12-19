<?php

namespace App\Listeners;

use App\Events\BookingCreated;
use App\Mail\BookingEmail;
use Illuminate\Support\Facades\Mail;

class SendBookingEmail
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\BookingCreated  $event
     * @return void
     */
    public function handle(BookingCreated $event)
    {
        // إرسال البريد الإلكتروني باستخدام Mailable
        Mail::to($event->booking->user->email)
            ->send(new BookingEmail($event->booking));
    }
}
