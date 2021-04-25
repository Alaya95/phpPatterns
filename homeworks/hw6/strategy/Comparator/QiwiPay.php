<?php

namespace Strategy\Comparator;

class QiwiPay extends Payment
{
    public function pay()
    {
        echo 'Заказ оплачен по номеру ' . $this->userPhone . ' через систему оплаты Qiwi на сумму ' . $this->sum . '.' . PHP_EOL;
    }
}