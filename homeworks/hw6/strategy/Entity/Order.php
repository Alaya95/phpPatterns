<?php

namespace Strategy\Entity;

use Strategy\Contract\PaymentInterface;

class Order
{

    private $email;
    private $user;
    private $payMethod;

    public function __construct($email, $user, PaymentInterface $payMethod)
    {
        $this->email = $email;
        $this->user = $user;
        $this->payMethod = $payMethod;
    }

    public function payMethods()
    {
        $this->payMethod->pay();
    }
}