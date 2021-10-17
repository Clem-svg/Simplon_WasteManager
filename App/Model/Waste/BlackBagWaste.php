<?php

namespace App\Model\Waste;

class BlackBagWaste extends AbstractWaste {

  protected float $quantity;
  protected float $burntCo2;
  protected string $name = "autre";

  public function __construct(float $quantity, float $burntCo2)
  {
      $this->quantity = $quantity;
      $this->burntCo2 = $burntCo2;
  }
}

