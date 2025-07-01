<?php

namespace App\Billings;

class Customer extends Invoice
{
    /**
     * Create a new class instance.
     */
    public function __construct(private string $name = '', private int $age = 0)
    {
        //
    }

    /**
     * Get the view name.
     *
     * @return string
     */
    public function getViewName(): string
    {
        return 'billings.customer';
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function __debugInfo(): array
    {
        return [
            'name' => $this->name,
            'age' => $this->age,
        ];
    }

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the age.
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
}
