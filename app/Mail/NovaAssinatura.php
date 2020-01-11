<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use stdClass;

class NovaAssinatura extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    private $assinante;

    public function __construct($name, $mail, $phone, $street, $number, $nb, $city, $state, $plan)
    {

        $a = new stdClass();
        $a->name = $name;
        $a->mail = $mail;
        $a->phone = $phone;
        $a->street = $street;
        $a->number = $number;
        $a->nb = $nb;
        $a->city = $city;
        $a->state = $state;
        $a->plan = $plan;

        $this->assinante = $a;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Novo Pedido de Assinatura Cafe Hitech')
                    ->view('mails.assinatura', ['assinante'=> $this->assinante]);
    }
}
