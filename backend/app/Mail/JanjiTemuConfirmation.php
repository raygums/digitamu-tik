<?php

namespace App\Mail;

use App\Models\Kunjungan;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class JanjiTemuConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $kunjungan;
    public $tamu;

    /**
     * Create a new message instance.
     */
    public function __construct(Kunjungan $kunjungan)
    {
        $this->kunjungan = $kunjungan;
        $this->tamu = $kunjungan->tamu;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $ticketId = strtoupper(substr($this->kunjungan->id, 0, 8));
        
        return new Envelope(
            subject: 'Konfirmasi Janji Temu [#' . $ticketId . '] - UPA TIK Unila',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.janji_temu',
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
