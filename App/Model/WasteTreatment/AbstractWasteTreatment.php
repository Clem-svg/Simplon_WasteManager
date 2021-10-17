<?php

namespace App\Model\WasteTreatment;

use App\Model\Waste\AbstractWaste;

abstract class AbstractWasteTreatment
{
    protected float $capacity;
    protected float $currentCapacity;

    public function __construct(float $capacity)
    {
        $this->capacity = $capacity;
        $this->currentCapacity = $capacity;
    }


    /**
     * Get the value of capacity
     *
     * @return  float
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set the value of capacity
     *
     * @param  float  $capacity
     *
     * @return  self
     */
    public function setCapacity(float $capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get the value of currentCapacity
     *
     * @return  float
     */
    public function getCurrentCapacity()
    {
        return $this->currentCapacity;
    }

    /**
     * Set the value of currentCapacitya
     *
     * @param  float  $currentCapacity
     *
     * @return  self
     */
    public function setCurrentCapacity(float $currentCapacity)
    {
        $this->currentCapacity = $currentCapacity;

        return $this;
    }
}
