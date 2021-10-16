<?php

Namespace App\Model\WasteTreatment;

use App\Model\WasteTreatment\AbstractWasteTreatment;
use App\Model\WasteTreatment\WasteTreatmentInterface;
use App\Model\Waste\AbstractWaste;


class Incinerator extends AbstractWasteTreatment implements WasteTreatmentInterface
{

  public function treatWaste(AbstractWaste $waste){
    if ($this->currentCapacity >= $waste->getQuantity()) {
      $this->currentCapacity -= $waste->getQuantity();
    } else {
      echo ('Incinerator too full to treat all this waste');
    }
  }

}