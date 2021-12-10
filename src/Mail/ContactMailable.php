<?php

namespace Simple\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

     public $message;
     public $name;
     public $admin;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message,$name,$admin)
    {
        $this->message = $message;
        $this->name = $name;
        $this->admin = $admin;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contact')->markdown('contact::contact.email')->with(['message' => $this->message, 'name' => $this->name, 'admin' =>$this->admin]);
    }
}
