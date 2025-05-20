<?php

namespace App\Accounts;

class ProcessTransaction
{
    /**
     * The customer associated with the transaction.
     */
    public Customer $customer;

    /**
     * Create a helper class instance.
     */
    public function __construct(public float $amount, public string $description)
    {
        $this->customer = new Customer();
    }
}
