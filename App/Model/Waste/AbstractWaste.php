<?php

namespace App\Model\Waste;

use App\Model\Waste\WasteType\IncineratableInterface;


abstract class AbstractWaste implements IncineratableInterface
{
    protected float $quantity;
    protected float $burntCo2;
    protected string $name;

    /**
     * Get the value of quantity
     *
     * @return  float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @param  float  $quantity
     *
     * @return  self
     */
    public function setQuantity(float $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of burntCo2
     *
     * @return  float
     */
    public function getBurntCo2()
    {
        return $this->burntCo2;
    }

    /**
     * Set the value of burntCo2
     *
     * @param  float  $burntCo2
     *
     * @return  self
     */
    public function setBurntCo2(float $burntCo2)
    {
        $this->burntCo2 = $burntCo2;

        return $this;
    }

    public function getIncinerated(){

    }

}
