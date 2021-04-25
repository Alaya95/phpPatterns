<?php

namespace Strategy\Comparator;

use Strategy\Contract\PaymentInterface;

abstract class Payment implements PaymentInterface
{
    protected $sum;
    protected $userPhone;

    public function __construct($sum, $userPhone)
    {
        $this->sum = $sum;
        $this->userPhone = $userPhone;
    }
}