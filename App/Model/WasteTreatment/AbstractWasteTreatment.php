<?php

namespace App\Model\WasteTreatment;

use App\Model\Waste\AbstractWaste;

abstract class AbstractWasteTreatment
{
    protected int $capacity;

    public function __construct(int $capacity)
    {
        $this->capacity = $capacity;
    }

    public function setWaste (AbstractWaste $waste)
    {
      $this->waste = $waste;
    }

    public function getWaste(): ?AbstractWaste
    {
        return $this->waste;
    }

}
