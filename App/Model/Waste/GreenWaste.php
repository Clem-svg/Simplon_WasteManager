<?php

namespace App\Model\Waste;

use App\Model\WasteType\CompostableInterface;
use App\Model\WasteType\IncineratableInterface;

class GreenWaste extends AbstractWaste implements CompostableInterface, IncineratableInterface {

  public function getRecycled(){

  }

  public function getIncinerated(){

  }
}