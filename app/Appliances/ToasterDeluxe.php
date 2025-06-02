<?php

namespace App\Appliances;

class ToasterDeluxe extends Toaster
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        parent::__construct(4); // Deluxe can handle 4 slices
    }

    /**
     * Toast the slices with butter to a new array.
     *
     * @return array
     */
    public function toastWithButter(): array
    {
        return array_map(fn ($slice) => "Toasting $slice with butter", $this->getSlices());
    }
}
