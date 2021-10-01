<?php

Namespace App\Model\WasteTreatment;

use App\Model\WasteType\IncineratableInterface;


class Incinerator extends AbstractWasteTreatment
{
  public function setWaste(AbstractWaste $waste)
  {
    if (!($waste instanceof IncineratableInterface)){
      throw new \Exception('Only incineratable waste can go in an incinerator');
    }
    parent::setWaste($waste);
  }

}