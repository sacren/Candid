<?php

namespace App\Accounts;

class ProcessTransaction
{
    /**
     * Create a helper class instance.
     */
    public function __construct(public float $amount, public string $description)
    {
    }
}
