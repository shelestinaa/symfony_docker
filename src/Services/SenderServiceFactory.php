<?php

namespace App\Services;

use App\Interfaces\SenderServiceInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class SenderServiceFactory
{

    /**
     * @param string $domain
     * @return SenderServiceInterface
     * @throws \Exception
     */
    public function create(string $domain) : SenderServiceInterface
    {
        switch ($domain) {
            case'mail':
                return new MailSenderService();
            case'sms':
                return new SmsSenderService();
            case'push':
                return new PushSenderService();
        }

        throw new \Exception();
    }

}