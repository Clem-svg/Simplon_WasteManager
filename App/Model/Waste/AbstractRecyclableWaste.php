<?php

namespace App\Model\Waste;

use App\Model\WasteType\RecyclableInterface;


abstract class AbstractRecyclableWaste extends AbstractWaste implements RecyclableInterface
{
  protected int $quantity;
  protected int $burntCo2;
  protected int $recycledCo2;

  public function __construct(int $quantity, int $burntCo2, int $recycledCo2)
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
   * @return  int
   */
  public function getRecycledCo2()
  {
    return $this->recycledCo2;
  }

  /**
   * Set the value of recycledCo2
   *
   * @param  int  $recycledCo2
   *
   * @return  self
   */
  public function setRecycledCo2(int $recycledCo2)
  {
    $this->recycledCo2 = $recycledCo2;

    return $this;
  }

}