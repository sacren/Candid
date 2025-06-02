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
}
