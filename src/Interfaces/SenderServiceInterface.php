<?php

namespace App\Interfaces;

interface SenderServiceInterface
{
    public function send(string $message);

}