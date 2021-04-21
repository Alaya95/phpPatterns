<?php


namespace Decorator\Repository;


use Decorator\Contract\ISender;
use Decorator\Entity\Decorator;

/**
 * Декораторы могут выполнять своё поведение до или после вызова обёрнутого
 * объекта.
 */
class SenderCN extends Decorator
{
    public function sendMessage($message)
    {
        echo $message . ' Chrome Notification ' . PHP_EOL;
        $this->component->sendMessage($message);
    }
}
