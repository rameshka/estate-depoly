<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class paymentdetails extends Mailable
{
    use Queueable, SerializesModels;


    public $name;
    public $amount;
    public $des;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$amount,$des)
    {
        //
        $this->name = $name;
        $this->amount = $amount;
        $this->des = $des;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.paymentdetails');
    }
}
