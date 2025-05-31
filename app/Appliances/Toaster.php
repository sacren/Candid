<?php

namespace App\Appliances;

class Toaster
{
    /**
     * The number of slices that have been prepared.
     */
    private array $slices = [];

    /**
     * Create a new class instance.
     */
    public function __construct(private int $max = 2)
    {
        //
    }

    /**
     * Add a slice to the toaster.
     *
     * @param string $slice
     */
    public function addSlice(string $slice): void
    {
        if (count($this->slices) < $this->max) {
            $this->slices[] = $slice;
        }
    }

    /**
     * Getter of slices that have been prepared.
     *
     * @return array
     */
    public function getSlices(): array
    {
        return $this->slices;
    }
}
