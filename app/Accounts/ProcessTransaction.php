<?php

namespace App\Accounts;

class ProcessTransaction
{
    /**
     * Public properties for amount and description.
     */
    public float $amount;
    public string $description;

    /**
     * Create a helper class instance.
     */
    public function __construct(float $amount, string $description)
    {
        $this->amount = number_format($amount, 2);
        $this->description = $description;
    }
}
