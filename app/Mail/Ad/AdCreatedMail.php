<?php

namespace App\Mail\Ad;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public User $user;
    public Ad $ad;

    public function __construct(User $user, Ad $ad)
    {
        $this->user = $user;
        $this->ad = $ad;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ad Created Mail',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'ads.mail.created',
        );
    }
}
