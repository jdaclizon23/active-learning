<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProductMail extends Mailable
{
    use Queueable, SerializesModels;


    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
    	$this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

    	Log::info("Sending data",['dataMail'=>$this->data]);

        return $this->view('mail.product-mail')
	                ->to('devs2program@gmail.com')
	                ->with(['data'=>$this->data]);
    }
}
