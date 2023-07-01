<?php

namespace App\Mail\Ad;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdDeletedMail extends Mailable
{
    use Queueable, SerializesModels;

    public User $user;

    // public string $dateOfAdCreation;
    /**
     * Create a new message instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        // $this->dateOfAdCreation = $dateOfAdCreation;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ad Deleted Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'ads.mail.ad-deleted',
        );
    }
}
