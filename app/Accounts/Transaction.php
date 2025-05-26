<?php

namespace App\Accounts;

class Transaction
{
    /**
     * The customer associated with the transaction.
     */
    private ?Customer $customer;

    /**
     * Create a new class instance.
     */
    public function __construct(
        private float $amount,
        private string $description
    ) {
        $this->customer = new Customer();
    }

    /**
     * Add tax to the transaction.
     *
     * @param  float  $rate
     * @return $this
     */
    public function addTax(float $rate): self
    {
        $this->amount += $this->amount * $rate / 100;

        return $this;
    }

    /**
     * Apply discount to the transaction.
     *
     * @param  float  $rate
     * @return $this
     */
    public function applyDiscount(float $rate): self
    {
        $this->amount -= $this->amount * $rate / 100;

        return $this;
    }

    /**
     * Get the transaction amount.
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Get the transaction description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
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

    /**
     * Demo only.
     *
     * We cannot reliably control exactly when __destruct() is called — only
     * that it will happen before the script ends or when the object is no
     * longer referenced.
     *
     * In web applications, all objects are destroyed at the end of the request
     * anyway, so destructors are rarely crucial unless dealing with
     * long-running CLI scripts or resource-heavy operations.
     */
    public function __destruct()
    {
        // Demo-only: No-op destructor
        // In real applications, use destructors only for resource cleanup
    }
}
