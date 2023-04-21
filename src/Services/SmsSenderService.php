<?php

namespace App\Services;


class SmsSenderService extends BaseSenderService
{
    /**
     * @param string $message
     * @return void
     */
    public function send(string $message): void
    {
        parent::send($message); // override if u need
    }


}