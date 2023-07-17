<?php

namespace App\Mail\Ad;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdCreatedMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public User $user;

    public Ad $ad;

    public function __construct(Ad $ad)
    {
        $this->user = $ad->user;
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
