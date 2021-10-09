<?php

namespace App\Model\Waste;

use App\Model\WasteType\RecyclableInterface;
use App\Model\WasteType\IncineratableInterface;

class Metal extends AbstractWaste implements RecyclableInterface, IncineratableInterface {

  public function getRecycled(){

  }

  public function getIncinerated(){

  }
}