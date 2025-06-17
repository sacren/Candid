<?php

namespace App\Debts;

interface DebtCollector
{
    public const float FEE = 100.0;
    public function collect(float $owedAmount): float;
    public function getFee(): float;
}
