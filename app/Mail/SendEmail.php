<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Customer;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;




    /**
     *  @var \App\Models\CustomerCreate
     *
     */

        public $customer;


    /**
     * @param \App\Models\Customer $customer
     * @return void
     */

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return $this
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Notify Customer',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.tamplate_email',
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
