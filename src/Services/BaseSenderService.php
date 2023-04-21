<?php

namespace App\Services;

use App\Interfaces\SenderServiceInterface;

abstract class BaseSenderService implements SenderServiceInterface
{

    /**
     * @param string $message
     * @return void
     */
    public function send(string $message)
    {
        //здесь должна быть базовая реализация отправки.
        // Может логирование какое-то или дефолтный твиг цепляться будет.
        // А в наследниках может дефолтный твиг для конкретного сервиса цеплять.
        // Может какая-то обратботка сообщения для безопасности.
        // Может даже в базу запись какую-то сделать нужно об отправке.
        // Отсюда будем вызывать репу сушности, что запишем в базу.
        //для реализации, я бы использовал что-то типа этого сервиса:
        //app/config/packages/notifier.yaml
    }
}