<?php

Namespace App\Model\WasteTreatment;

use App\Model\WasteType\RecyclableInterface;

class Recycler extends AbstractWasteTreatment
{
  public function setWaste(AbstractWaste $waste)
  {
    if (!($waste instanceof RecyclableInterface)){
      throw new \Exception('Only recyclable waste can go in a recycler');
    }
    parent::setWaste($waste);
  }

  public function recycle(RecyclableInterface $waste){

  }

}
