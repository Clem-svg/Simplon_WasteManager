<?php

namespace App\Model\Waste;

use App\Model\WasteType\IncineratableInterface;


class BlackBagWaste extends AbstractWaste implements IncineratableInterface {

  public function getRecycled(){

  }

  public function getIncinerated(){

  }
}

