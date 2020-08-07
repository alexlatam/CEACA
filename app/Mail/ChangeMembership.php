<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ChangeMembership extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Solicitud cambio de membresia";

    public $usuario;
    public $solicitada;
    public $actual;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $s, $a)
    {
        $this->usuario = $user;
        $this->solicitada = $s;
        $this->actual = $a;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.change_membership');
    }
}
