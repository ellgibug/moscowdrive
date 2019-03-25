<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShortFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $short_form;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($short_form)
    {
        $this->short_form = $short_form;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.short_form');
    }
}
