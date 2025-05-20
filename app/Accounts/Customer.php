<?php

namespace App\Accounts;

class Customer
{
    /**
     * PaymentProfile associated with the customer.
     */
    public ?PaymentProfile $paymentProfile = null;

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
}
