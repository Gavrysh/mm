<?php

namespace Gss\App;

use Gss\App\PaymentSystems\PaymentSystemsInterface;

class PaymentService
{
    public function payment(PaymentSystemsInterface $payment)
    {
        $payment->payment();
    }
}