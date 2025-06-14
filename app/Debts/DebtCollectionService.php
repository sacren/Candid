<?php

namespace App\Debts;

class DebtCollectionService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Collect the owed amount.
     *
     * @return float
     */
    public function collectDebt(CollectionAgency $collector): float
    {
        $owedAmount = 500.0;
        $collectedAmount = $collector->collect($owedAmount);

        return $collectedAmount;
    }
}
