<?php

namespace Mesba\UnitConversion;

class Weight
{
    private float $kilograms;

    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function tolbs(): float
    {
        return round($this->kilograms * 2.204623, 4);
    }
}
