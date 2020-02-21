<?php

namespace App\Billing;

interface PaymentGatewayContact
{
    public function charge($amount);

    public function setDiscount($amount);
}
