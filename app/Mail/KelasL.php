<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KelasL extends Mailable  // title pengaruh dari nama class, kecuali ada tambahin method subject
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $data;
    public function __construct($test)
    {
        $this->data = $test;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from("kelasl.rudyrahcman16@gmail.com")
        ->subject($this->data->judul)
        ->markdown('Email.test', ["isi"=>$this->data->isi]); // isinya nanti sesuai ini
        // ->attach(url("/not/file.txt"));  // test di rumah
    }
}
