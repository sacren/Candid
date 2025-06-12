<?php

namespace App\Debts;

class CollectionAgency implements DebtCollector
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
    public function collect(float $owedAmount): float
    {
        return $owedAmount - self::FEE;
    }
}
