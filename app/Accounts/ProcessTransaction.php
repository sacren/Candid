<?php

namespace App\Accounts;

class ProcessTransaction
{
    /**
     * The customer associated with the transaction.
     */
    private ?Customer $customer;

    /**
     * Create a helper class instance.
     */
    public function __construct(public float $amount, public string $description)
    {
        $this->customer = new Customer();
    }

    /**
     * Get the customer associated with the transaction.
     *
     * @return ?Customer
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }
}
