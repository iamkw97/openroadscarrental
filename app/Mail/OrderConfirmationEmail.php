namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirmationEmail extends Mailable
{
use Queueable, SerializesModels;

public $user;
public $booking;

/**
* Create a new message instance.
*
* @param $user
* @param $booking
*/
public function __construct($user, $booking)
{
$this->user = $user;
$this->booking = $booking;
}

/**
* Build the message.
*
* @return $this
*/
public function build()
{
return $this->subject('Order Confirmation Email')
->view('app.emails.orderconfirmationemail')
->with([
'user' => $this->user,
'booking' => $this->booking,
]);
}
}
