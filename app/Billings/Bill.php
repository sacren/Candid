<?php

namespace App\Billings;

class Bill extends NamedObject
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
     * Get the class name using early binding.
     *
     * @return string
     */
    public static function getClassEarly(): string
    {
        return self::class;
    }

    /**
     * Get the class name using late binding.
     *
     * @return string
     */
    public static function getClassLate(): string
    {
        return static::class;
    }

    /**
     * Get the view name.
     *
     * @return string
     */
    public function getViewName(): string
    {
        return 'billings.process';
    }
}
