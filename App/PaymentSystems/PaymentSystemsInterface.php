<?php

namespace Gss\App\PaymentSystems;


interface PaymentSystemsInterface
{
    /**
     * Реализация механизма оплатьі
     * @return mixed
     */
    public function payment();
}