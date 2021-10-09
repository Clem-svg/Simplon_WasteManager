<?php

namespace App\Model\Waste;

abstract class AbstractWaste
{
    protected int $quantity;
    protected int $burntCo2;

    public function __construct(int $quantity, int $burntCo2)
    {
        $this->quantity = $quantity;
        $this->burntCo2 = $burntCo2;
    }

    /**
     * Get the value of quantity
     *
     * @return  int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @param  int  $quantity
     *
     * @return  self
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of burntCo2
     *
     * @return  int
     */
    public function getBurntCo2()
    {
        return $this->burntCo2;
    }

    /**
     * Set the value of burntCo2
     *
     * @param  int  $burntCo2
     *
     * @return  self
     */
    public function setBurntCo2(int $burntCo2)
    {
        $this->burntCo2 = $burntCo2;

        return $this;
    }

}
