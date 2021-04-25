<?php

namespace Strategy\Comparator;

class YandexPay extends Payment
{
    public function pay()
    {
        echo 'Заказ оплачен по номеру ' . $this->userPhone . ' через систему оплаты Yandex Money на сумму ' . $this->sum . '.' . PHP_EOL;
    }
}