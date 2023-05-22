<?php

namespace App\Mail;

use App\Models\Booking;
use App\Models\User;
use App\Models\Car;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderNotificationEmail extends Mailable
{
    public $user;
    public $booking;
    public $car;

    public function __construct($user, $booking, $car)
    {
        $this->user = $user;
        $this->booking = $booking;
        $this->car = $car;
    }


    public function build()
    {
        return $this->view('app.emails.orderconfirmationemailadmin');
    }
}
