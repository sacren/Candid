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
}
