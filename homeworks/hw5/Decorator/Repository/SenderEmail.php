<?php

namespace Decorator\Repository;

use Decorator\Entity\Decorator;

class SenderEmail extends Decorator
{

    public function sendMessage($message)
    {
        echo $message . ' email ' . PHP_EOL;
        $this->component->sendMessage($message);
    }
}