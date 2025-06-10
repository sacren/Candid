<?php

namespace App\Fields;

abstract class Boolean extends Field
{
    /**
     * Create a new class instance.
     */
    public function __construct(string $name)
    {
        parent::__construct($name);
    }
}
