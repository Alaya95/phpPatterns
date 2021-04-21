<?php

namespace Decorator\Repository;

use Decorator\Contract\ISender;

class Sender implements ISender
{

    public function sendMessage($message)
    {
        return $message;
    }
}