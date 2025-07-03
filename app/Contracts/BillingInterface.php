<?php

namespace App\Contracts;

interface BillingInterface
{
    /**
     * Get the view name.
     *
     * @return string
     */
    public function getViewName(): string;
}
