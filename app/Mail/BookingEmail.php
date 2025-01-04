<?php

namespace App\Mail;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $booking;
    protected $user;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\Booking  $booking
     * @param  \App\Models\User     $user
     * @return void
     */
    public function __construct(Booking $booking, User $user)
    {
        $this->booking = $booking;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your Booking Confirmation')
            ->view('emails.booking')
            ->with([
                'booking' => $this->booking,
                'user' => $this->user,
            ]);
    }
}
