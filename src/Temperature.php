<?php

namespace Mesba\UnitConversion;

class Temperature
{
    private float $celsius;

    public static function fromCelsius(float $celsius): self
    {
        return new static($celsius);
    }

    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    public function toFr(): float
    {
        return ($this->celsius * 1.8) + 32;
    }
}
