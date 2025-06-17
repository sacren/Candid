<?php

namespace App\Debts;

class FastAgency implements DebtCollector
{
    /**
     * Expedited fee.
     */
    public const float EXPEDITED_FEE = 150.0;

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
        return $owedAmount - $this->getFee();
    }

    /**
     * Get the fee.
     *
     * @return float
     */
    public function getFee(): float
    {
        return self::EXPEDITED_FEE + self::FEE;
    }
}
