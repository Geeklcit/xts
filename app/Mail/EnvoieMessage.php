<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnvoieMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $email;
    public $msg;
    public $phone;
    public function __construct($name, $email, $phone, $msg)
    {
        //
        $this->name=$name;
        $this->email=$email;
        $this->phone=$phone;
        $this->msg=$msg;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mortallageek@gmail.com')
                    ->view('envoie');
                   /* ->with([
                        'name' =>'talla',
                        'email' =>'tallamor95@outlook.fr',
                        'msg' =>'bonjour',
                    ]); */      
    }
}
