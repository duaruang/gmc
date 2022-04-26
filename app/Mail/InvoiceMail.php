<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $user;
    protected $program;
    protected $donasi;
    public function __construct($user, $program, $donasi, $password)
    {
        $this->user = $user;
        $this->program = $program;
        $this->donasi = $donasi;
        $this->password = $password;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Invoice Donasi')
            ->view('mail.invoice')
            ->with(
                [
                    'user'    => $this->user,
                    'program' => $this->program,
                    'donasi'  => $this->donasi,
                    'password'  => $this->password,
                ]
            );
    }
}
