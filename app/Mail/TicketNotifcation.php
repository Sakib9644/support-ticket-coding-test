<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketNotifcation extends Mailable
{
    use Queueable, SerializesModels;

    public $form;
    public $name;
    public $messageBody; // Renamed from $mess for clarity
    public $subject;

    // Add any additional properties as needed
    public function __construct($form, $name, $messageBody, $subject)
    {
        $this->form = $form;
        $this->name = $name;
        $this->messageBody = $messageBody;
        $this->subject = $subject;
    }

    public function build()
    {
        return $this->view('admin.notifications', [
            'name' => $this->name,
            'messageBody' => $this->messageBody,
        ])
        ->from($this->form, $this->name)
        ->subject($this->subject);
    }
}
