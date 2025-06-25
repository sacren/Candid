<?php

namespace App\Billings;

class Bill
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the class name.
     *
     * @return string
     */
    private static function getClassName(): string
    {
        return __CLASS__;
    }

    /**
     * Get the class name using self.
     *
     * @return string
     */
    public static function getClassBySelf(): string
    {
        return self::getClassName();
    }

    /**
     * Get the class name using static.
     *
     * @return string
     */
    public static function getClassByStatic(): string
    {
        return static::getClassName();
    }

    /**
     * Convert the object to its string representation.
     *
     * @return string
     */
    public function __toString(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}
