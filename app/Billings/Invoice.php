<?php

namespace App\Billings;

use NumberFormatter;

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

    /**
     * Format the currency.
     */
    public function formatCurrency(string $name)
    {
        $value = $this->getAttribute($name);
        $formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);

        return $formatter->formatCurrency($value, 'USD');
    }

    /**
     * Get the value of an attribute.
     */
    public function getAttribute($name, $default = null)
    {
        return $this->attributes[$name] ?? $default;
    }
}
