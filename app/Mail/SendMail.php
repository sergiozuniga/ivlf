<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->data);
        if ($this->data['respuesta'] == ''){
            $mail = 'mail.send-mail';
        }
        else {
            $mail = 'mail.answer-mail';
        }
        return $this->from(env('MAIL_USERNAME'), env('MAIL_FROM_NAME'))
            ->subject($this->data['sujeto'])
            ->view($mail, ['data' => $this->data]);            
    }
}
