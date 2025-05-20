<?php

namespace App\Accounts;

class PaymentProfile
{
    /**
     * The ID of the payment profile.
     */
    public int $id;

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->id = rand();
    }
}
