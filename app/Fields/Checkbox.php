<?php

namespace App\Fields;

class Checkbox extends Boolean
{
    /**
     * Create a new class instance.
     */
    public function __construct(public string $name)
    {
        //
    }

    /**
     * Render the field.
     */
    public function render(): string
    {
        return $this->name;
    }
}
