<?php

namespace Fmo\FmoLoggerBundle\EventSubscriber;

use Fmo\FmoLoggerBundle\Exception\CustomException;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\Serializer\SerializerInterface;

#[AsEventListener]
class ExceptionListener
{
    private SerializerInterface $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function __invoke(ExceptionEvent $event): void
    {
        $exception = $event->getThrowable();

        if (!$exception instanceof CustomException) {
            return;
        }

        $message = ['errors' => $exception->serializeErrors()];

        $response = new Response();
        $response->setContent($this->serializer->serialize($message, 'json'));

        $event->setResponse($response);
    }
}
