<?php

namespace App\Fields;

abstract class Field
{
    /**
     * Create a new class instance.
     */
    public function __construct(public string $name)
    {
        //
    }

    /**
     * Enforce a render method in the child class.
     */
    abstract public function render(): string;
}
