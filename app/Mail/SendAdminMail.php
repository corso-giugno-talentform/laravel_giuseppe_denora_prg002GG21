<?php

namespace App\Mail;



use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendAdminMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    
    public function __construct($data)
    {
       $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
         $text = 'Sei stato contattato da ' . $this->data['Email'];
        return new Envelope(
            subject: $text,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
             view: 'lettere.admin',
               with: [
            'firstName' => $this->data['firstName'],
            'textArea' => $this->data['textArea'],
            'article_nome' => $this->data['article_nome'],
            'Email'=>$this->data['Email'],
        ]
        /* with: $this->data   per passare tutti i dati */

        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
