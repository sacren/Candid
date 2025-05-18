<?php

namespace App\Accounts;

class Transaction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private float $amount,
        private string $description
    ) {
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
}
