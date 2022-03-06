<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class CostSent
 * @package App\Mail
 */
class CostSent extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * OrderServiceSent constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return CostSent
     */
    public function build(): CostSent
    {
        return $this->subject('Форма: Узнать стоимость')
            ->view('emails.cost', [
                'data' => $this->data
            ]);
    }
}
