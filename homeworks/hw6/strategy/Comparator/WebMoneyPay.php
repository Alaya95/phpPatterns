<?php

namespace Strategy\Comparator;

class WebMoneyPay extends Payment
{
    public function pay()
    {
        echo 'Заказ оплачен по номеру ' . $this->userPhone . ' через систему оплаты WebMoney на сумму ' . $this->sum . '.' . PHP_EOL;
    }
}