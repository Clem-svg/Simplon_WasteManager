<?php

namespace App\Model\Waste;

abstract class AbstractWaste
{
    protected int $quantity;
    protected int $rejected_co2;

    public function __construct(int $quantity, int $rejected_co2)
    {
        $this->quantity = $quantity;
        $this->rejected_co2 = $rejected_co2;
    }
}
