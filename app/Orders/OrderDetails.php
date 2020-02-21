<?php

namespace App\Orders;

use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContact;

class OrderDetails
{

    /**
     * @var BankPaymentGateway
     */
    private $PaymentGateway;

    public function __construct(PaymentGatewayContact $paymentGateway)
    {
        $this->PaymentGateway = $paymentGateway;
    }

    public function all()
    {
        $this->PaymentGateway->setDiscount(500);

        return[
          'name'=> 'Victor',
          'address' => '123 Coder\`s Tape Street'
        ];
    }
}
