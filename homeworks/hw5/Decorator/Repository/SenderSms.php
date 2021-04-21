<?php

namespace Decorator\Repository;

use Decorator\Entity\Decorator;

class SenderSms extends Decorator
{

    public function sendMessage($message)
    {
        echo $message . ' Sms ' . PHP_EOL;
        $this->component->sendMessage($message);
    }
}
