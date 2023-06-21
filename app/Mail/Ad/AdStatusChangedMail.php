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

    public string $message;

    public function __construct(Ad $ad, User $user, string $message = '')
    {
        $this->ad = $ad;
        $this->user = $user;
        $this->message = $message;
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
                'message' => $this->message,
            ]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
