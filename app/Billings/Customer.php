<?php

namespace App\Billings;

class Customer extends Invoice
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view name.
     *
     * @return string
     */
    public function getViewName(): string
    {
        return 'billings.customer';
    }
}
