<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Buyer;
use App\Models\Lelang;
use App\Models\Pelelang;

class NotifyAuction extends Mailable
{
    use Queueable, SerializesModels;

    public $lelang;
    public $pelelang;
    public $buyer;

    /**
     * Create a new message instance.
     */
    public function __construct(Lelang $lelang, Pelelang $pelelang, Buyer $buyer)
    {
        $this->lelang = $lelang;
        $this->pelelang = $pelelang;
        $this->buyer = $buyer;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Penawaran Lelang ' . $this->lelang->title,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.auction',
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
