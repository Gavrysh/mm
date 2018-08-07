<?php

namespace Gss\App\PaymentSystems;

class WebMoney implements PaymentSystemsInterface
{
    public function payment()
    {
        echo 'This payment is WebMoney system'.PHP_EOL;
    }

}