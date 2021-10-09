<?php

namespace App\Model\Waste;

use App\Model\WasteType\CompostableInterface;

class GreenWaste extends AbstractWaste implements CompostableInterface {

  protected int $quantity;
  protected int $burntCo2;
  protected int $compostedCo2;

  public function __construct(int $quantity, int $burntCo2, int $compostedCo2)
  {
      $this->quantity = $quantity;
      $this->burntCo2 = $burntCo2;
      $this->compostedCo2 = $compostedCo2;
  }

  public function getComposted(){

  }

}