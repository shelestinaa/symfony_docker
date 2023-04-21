<?php

namespace App\Controller;

use App\DTO\Notification;
use App\Services\SenderServiceFactory;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route ("/post", name="post")
 */
class PostController extends AbstractController {

    /**
     * @Route("/send", name="send")
     * @param Request $request
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function sendAction(Request $request)
    {
        $notification = new Notification();
        $form = $this->createForm(Notification::class, $notification);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $notification = $form->getData();
        }
        /** @var SenderServiceFactory $senderFactory */
        $senderFactory = $this->container->get('sender_factory');
        foreach ($notification->getDomains() as $domain) {
            $serviceSender = $senderFactory->create($domain);
            $serviceSender->send($notification->getMessage());
        }
    }

}