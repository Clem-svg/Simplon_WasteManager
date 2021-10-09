<?php

namespace App\Model\Waste;

use App\Model\WasteType\RecyclableInterface;
use App\Model\WasteType\IncineratableInterface;

class Glass extends AbstractWaste implements RecyclableInterface, IncineratableInterface {
  protected $recycledCo2;

  public function getRecycled(){

  }

  public function getIncinerated(){

  }

}