<?php

namespace App\Domain\Entities;

class Theme 
{
    public function __construct(private readonly string $name) {}

    /**
     * Get the name.
     * 
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }
}