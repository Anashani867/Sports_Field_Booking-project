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
        $booking = $event->booking; // استرجاع الحجز من الحدث
        $user = $booking->user; // استرجاع المستخدم المرتبط بالحجز (تأكد من وجود العلاقة في النموذج)

        if ($user) {
            // تمرير الحجز والمستخدم إلى BookingEmail
            Mail::to($user->email)
                ->send(new BookingEmail($booking, $user));
        }
    }
}
