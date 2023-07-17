<?php

namespace App\Mail\Ad;

use App\Models\Ad;
use App\Models\Status;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdStatusChangedMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public Ad $ad;

    public User $user;

    public string $message;

    public function __construct(Ad $ad, string $message = '')
    {
        $this->ad = $ad;
        $this->user = $ad->user;
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
                'status' => $this->ad->status,
                'message' => $this->message,
            ]
        );
    }
}
