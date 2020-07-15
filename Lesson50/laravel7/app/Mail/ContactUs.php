<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    protected $topic;
    protected $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($topic, $email )
    {
        $this->topic = $topic;
        $this->email = $email;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // ->from($address, $name = null)
        // ->sender($address, $name = null)
        // ->returnPath($address)
 
        // ->cc($address, $name = null)
        // ->bcc($address, $name = null)
        // ->replyTo($address, $name = null)
        // ->subject($subject)
        // ->priority($level)
        // ->attach($file, array $options = array())
        // ->attachData($data, $name, array $options = array())
        // ->embed($file)
        // ->embedData($data, $name, $contentType = null)

        // return $this->view('emails.contact-us', ['topic'=>$this->topic, 'email'=>$this->email])
        // ->subject("TEST email from ".$this->email)
        // ->replyTo($this->email);

        return $this->markdown('emails.contact-us-md');
    }
}
