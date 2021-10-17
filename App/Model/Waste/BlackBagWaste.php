<?php

namespace App\Model\Waste;

class BlackBagWaste extends AbstractWaste {

  protected int $quantity;
  protected int $burntCo2;
  protected string $name = "autre";

  public function __construct(int $quantity, int $burntCo2)
  {
      $this->quantity = $quantity;
      $this->burntCo2 = $burntCo2;
  }
}

