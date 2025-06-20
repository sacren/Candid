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
    private array $attributes = [];

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Use __get magic method.
     *
     * @param  string  $name
     */
    public function __get($name)
    {
        return $this->attributes[$name] ?? null;
    }

    /**
     * Use __set magic method.
     *
     * @param  string  $name
     */
    public function __set($name, $value): void
    {
        $this->attributes[$name] = $value;
    }

    /**
     * Format the given attribute as currency.
     *
     * @param  string  $name
     * @return string
     */
    public function formatCurrency(string $name): string
    {
        $value = $this->getAttribute($name);
        $formatter = new NumberFormatter('en_US', NumberFormatter::CURRENCY);

        return $formatter->formatCurrency($value, 'USD');
    }

    /**
     * Get the value of an attribute.
     *
     * @param  string  $name
     * @param  mixed  $default
     */
    public function getAttribute($name, $default = null)
    {
        return $this->attributes[$name] ?? $default;
    }

    /**
     * Determine if the given attribute exists.
     *
     * @param  string  $name
     * @return bool
     */
    public function __isset($name): bool
    {
        return isset($this->attributes[$name]);
    }
}
