<?php

namespace App\Mail\Ad;

use App\Models\Ad;
use App\Models\Status;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdStatusChangedMail extends Mailable
{
    use Queueable, SerializesModels;

    public Ad $ad;

    public User $user;

    public function __construct(Ad $ad, User $user)
    {
        $this->ad = $ad;
        $this->user = $user;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Ad Status Changed Mail',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'ads.mail.status-changed',

            with:[
                'status' => Status::getStatusNameById($this->ad->status_id),
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
