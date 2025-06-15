<?php

namespace App\Debts;

class DebtCollectionService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private float $owedAmount = 500.0
    ) { }

    /**
     * Collect the owed amount.
     *
     * @return float
     */
    public function collectDebt(DebtCollector $collector): float
    {
        $collectedAmount = $collector->collect($this->owedAmount);

        return $collectedAmount;
    }

    /**
     * Get the owed amount.
     *
     * @return float
     */
    public function getOwedAmount(): float
    {
        return $this->owedAmount;
    }
}
