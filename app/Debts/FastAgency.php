<?php

namespace App\Debts;

class FastAgency implements DebtCollector
{
    /**
     * Expedited fee.
     */
    public const float FEE = 200.0;

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
