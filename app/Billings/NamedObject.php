<?php

namespace App\Billings;

abstract class NamedObject
{
    /**
     * The short name.
     *
     * @var string
     */
    private ?string $shortName = null;

    /**
     * Convert the object to its string representation.
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->shortName ??= (new \ReflectionClass($this))->getShortName();
    }

    /**
     * Get the view name.
     *
     * @return string
     */
    abstract public function getViewName(): string;
}
