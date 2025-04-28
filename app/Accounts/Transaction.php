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
    public function __construct()
    {
        //
    }
}
