<?php

namespace App\Billings;

class ProcessInvoice
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Invoke the class instance.
     *
     * @return array
     */
    public function __invoke(): array
    {
        return [
            'amount' => 5000,
            'status' => 'Paid',
        ];
    }
}
