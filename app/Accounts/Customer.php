<?php

namespace App\Accounts;

class Customer
{
    /**
     * PaymentProfile associated with the customer.
     */
    private ?PaymentProfile $paymentProfile;

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->paymentProfile = null;
    }

    /**
     * Get the payment profile associated with the customer.
     *
     * @return ?PaymentProfile
     */
    public function getPaymentProfile(): ?PaymentProfile
    {
        return $this->paymentProfile;
    }
}
