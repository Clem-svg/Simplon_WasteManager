<?php

namespace App\Model\Waste;

use App\Model\Waste\WasteType\Compostablefloaterface;

class GreenWaste extends AbstractWaste implements Compostablefloaterface {

  protected float $quantity;
  protected float $burntCo2;
  protected float $compostedCo2;
  protected string $name = "organique";


  public function __construct(float $quantity, float $burntCo2, float $compostedCo2)
  {
      $this->quantity = $quantity;
      $this->burntCo2 = $burntCo2;
      $this->compostedCo2 = $compostedCo2;
  }

  public function getComposted(){

  }

}