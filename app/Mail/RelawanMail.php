<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RelawanMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $relawan;
    public function __construct($relawan)
    {
        $this->relawan = $relawan;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Pengajuan Relawan')
            ->view('mail.relawan')
            ->with(
                [
                    'relawan'    => $this->relawan,
                ]
            );
    }
}
