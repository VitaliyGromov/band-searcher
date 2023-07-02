<?php

namespace App\Mail\Ad;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdUpdatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public User $user;

    public int $adId;
    /**
     * Create a new message instance.
     */
    public function __construct(User $user, int $adId)
    {
        $this->user = $user;
        $this->adId = $adId;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ad Updated Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'ads.mail.updated',
        );
    }
}
