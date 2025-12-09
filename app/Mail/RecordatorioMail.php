<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecordatorioMail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $messageText;
    public $pet;

    public function __construct($title, $messageText, $pet = null)
    {
        $this->title = $title;
        $this->messageText = $messageText;
        $this->pet = $pet;
    }

    public function build()
    {
        return $this->subject($this->title)
                    ->markdown('emails.recordatorio')
                    ->with([
                        'messageText' => $this->messageText,
                        'pet' => $this->pet
                    ]);
    }
}
