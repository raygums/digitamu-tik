<?php

namespace App\Mail;

use App\Models\Peminjaman;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PeminjamanConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $peminjaman;
    public $kunjungan;
    public $tamu;

    /**
     * Create a new message instance.
     */
    public function __construct(Peminjaman $peminjaman)
    {
        $this->peminjaman = $peminjaman;
        $this->kunjungan = $peminjaman->kunjungan;
        $this->tamu = $peminjaman->kunjungan->tamu;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $ticketId = strtoupper(substr($this->peminjaman->id, 0, 8));
        $itemName = $this->peminjaman->judul_permohonan;
        
        return new Envelope(
            subject: 'Bukti Peminjaman - ' . $itemName . ' - [#' . $ticketId . '] - UPA TIK Unila',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.peminjaman',
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
