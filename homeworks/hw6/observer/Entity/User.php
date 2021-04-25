<?php

namespace Observer\Entity;

use Observer\Contract\ObserverInterface;
use Observer\Observer\Exchange;

/**
 * Class User - класс искателей работы
 * @package Observer\Entity
 */
class User implements ObserverInterface
{
    private $name;
    private $email;
    private $experience;

    public function __construct($name, $email, $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    public function notify()
    {
        echo "Уведомление о вакансии отправлено на почту - " . $this->email . PHP_EOL;
    }
}