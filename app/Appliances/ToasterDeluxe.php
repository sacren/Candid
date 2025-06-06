<?php

namespace App\Appliances;

class ToasterDeluxe extends Toaster
{
    /**
     * Create a new class instance.
     */
    public function __construct(private string $deluxe = 'Deluxe: Toasting ')
    {
        parent::__construct(4); // Deluxe can handle 4 slices
    }

    /**
     * Add a slice to the toaster.
     *
     * @param string $slice
     */
    public function addSlice(string $slice): void
    {
        parent::addSlice($this->deluxe . $slice);
    }

    /**
     * Toast the slices with butter to a new array.
     *
     * @return array
     */
    public function toastWithButter(): array
    {
        return array_map(fn ($slice) => "$slice with butter", $this->getSlices());
    }
}
