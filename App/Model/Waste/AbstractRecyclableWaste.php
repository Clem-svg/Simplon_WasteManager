<?php

namespace App\Model\Waste;

use App\Model\Waste\WasteType\Recyclablefloaterface;

abstract class AbstractRecyclableWaste extends AbstractWaste implements Recyclablefloaterface
{
  protected float $quantity;
  protected float $burntCo2;
  protected float $recycledCo2;

  public function __construct(float $quantity, float $burntCo2, float $recycledCo2)
  {
      $this->quantity = $quantity;
      $this->burntCo2 = $burntCo2;
      $this->recycledCo2 = $recycledCo2;
  }

  public function getRecycled(){

  }

  /**
   * Get the value of recycledCo2
   *
   * @return  float
   */
  public function getRecycledCo2()
  {
    return $this->recycledCo2;
  }

  /**
   * Set the value of recycledCo2
   *
   * @param  float  $recycledCo2
   *
   * @return  self
   */
  public function setRecycledCo2(float $recycledCo2)
  {
    $this->recycledCo2 = $recycledCo2;

    return $this;
  }

}