<?php

namespace App\Billings;

class Bill extends NamedObject
{
    /**
     * The name of the Bill class.
     *
     * @var string
     */
    protected string $name = 'Bill';

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the name by static class method.
     *
     * @return static
     */
    public function getObject(): static
    {
        return new static();
    }

    /**
     * Get the instance name.
     *
     * @return string
     */
    public function getInstanceName(): string
    {
        return $this->name;
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
