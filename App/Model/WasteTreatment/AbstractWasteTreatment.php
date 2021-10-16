<?php

namespace App\Model\WasteTreatment;

use App\Model\Waste\AbstractWaste;

abstract class AbstractWasteTreatment
{
    protected int $capacity;
    protected int $currentCapacity;

    public function __construct(int $capacity)
    {
        $this->capacity = $capacity;
        $this->currentCapacity = $capacity;
    }


    /**
     * Get the value of capacity
     *
     * @return  int
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set the value of capacity
     *
     * @param  int  $capacity
     *
     * @return  self
     */
    public function setCapacity(int $capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get the value of currentCapacity
     *
     * @return  int
     */
    public function getCurrentCapacity()
    {
        return $this->currentCapacity;
    }

    /**
     * Set the value of currentCapacitya
     *
     * @param  int  $currentCapacity
     *
     * @return  self
     */
    public function setCurrentCapacity(int $currentCapacity)
    {
        $this->currentCapacity = $currentCapacity;

        return $this;
    }
}
