<?php

namespace Gss\App\PaymentSystems;


class PayPal implements PaymentSystemsInterface
{
    public function payment()
    {
        echo 'This is system PayPal!'.PHP_EOL;
    }
}