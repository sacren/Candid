<?php

namespace App\Billings;

class Invoice
{
    /**
     * The attributes are the storage of dynamic properties.
     *
     * @var array
     */
    private $attributes = [];

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Use __get magic method.
     */
    public function __get($name)
    {
        return $this->attributes[$name] ?? null;
    }

    /**
     * Use __set magic method.
     */
    public function __set($name, $value): void
    {
        $this->attributes[$name] = $value;
    }
}
