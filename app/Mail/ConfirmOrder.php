<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ConfirmOrder extends Mailable
{
    use Queueable, SerializesModels;
    public $confirm;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($confirm1)
    {
        $this->confirm=$confirm1;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.confirmorder');
    }
}
