<?php

namespace App\Accounts;

class Transaction
{
    /**
     * Public properties for amount and description.
     */
    public float $amount;
    public string $description;

    /**
     * Create a new class instance.
     */
    public function __construct(float $amount, string $description)
    {
        $this->amount = $amount;
        $this->description = $description;
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
}
