<?php

namespace Strategy;

use Strategy\Comparator\QiwiPay;
use Strategy\Comparator\WebMoneyPay;
use Strategy\Comparator\YandexPay;
use Strategy\Entity\Order;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Strategy/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$order1 = new Order('John@mail.ru', 'John', new QiwiPay(1000, '8-999-999-99-99'));
$order1->payMethods();

$order2 = new Order('John@mail.ru', 'John', new WebMoneyPay(20000, '8-999-999-99-99'));
$order2->payMethods();

$order3 = new Order('John@mail.ru', 'John', new YandexPay(10000, '8-999-999-99-99'));
$order3->payMethods();

