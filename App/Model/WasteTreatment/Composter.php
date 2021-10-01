<?php

Namespace App\Model\WasteTreatment;

use App\Model\Waste\AbstractWaste;
use App\Model\WasteType\CompostableInterface;


class Composter extends AbstractWasteTreatment
{
  public function setWaste(AbstractWaste $waste)
  {
    if (!($waste instanceof CompostableInterface)){
      throw new \Exception('Only compostable waste can go in a composter');
    }
    parent::setWaste($waste);
  }
}