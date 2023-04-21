<?php

namespace App\Services;

class MailSenderService extends BaseSenderService
{
    /**
     * @param string $message
     * @return void
     */
    public function send(string $message)
    {
        parent::send($message); // override if u need
    }


}