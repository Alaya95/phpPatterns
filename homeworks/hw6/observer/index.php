<?php

namespace Observer;

use Observer\Entity\User;
use Observer\Entity\Vacancy;
use Observer\Observer\Exchange;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Observer/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$exchange = Exchange::getInstance();
$user1 = new User('Don', 'Don@mail.ru', '3');
$exchange->register($user1);
$user2 = new User('Nick', 'Nick@mail.ru', '5');
$exchange->register($user2);
$user3 = new User('Sandra', 'Sandra@mail.ru', '10');
$exchange->register($user3);

$exchange->unregister($user3);

$vacancy = new Vacancy('php dev', 150000, 5);