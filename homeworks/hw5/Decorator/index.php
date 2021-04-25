<?php

namespace Decorator;

use Decorator\Repository\Sender;
use Decorator\Repository\SenderSms;
use Decorator\Repository\SenderEmail;
use Decorator\Repository\SenderCN;


/*
Предположим, что у нас есть приложение, способное отправлять оповещения тремя способами: SMS, Email и Chrome Notification (CN).
Пользователю предлагается выбрать, какие уведомления будут приходить. На каждый из вариантов необходим свой подкласс.
Например: SMS + Email, Email + CN, SMS + Email + CN. Как поступить?
*/

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Decorator/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$message = new SenderCN(new SenderEmail(new Sender()));
$message->sendMessage('hello');

$message = new SenderEmail(new SenderSms(new Sender()));
$message->sendMessage('hi');