<?php

Namespace App\Model\WasteTreatment;

use App\Model\WasteTreatment\AbstractWasteTreatment;
use App\Model\WasteTreatment\Services\WasteTreatmentInterface;
use App\Model\Waste\AbstractWaste;
use App\Model\Waste\WasteType\IncineratableInterface;

class Incinerator extends AbstractWasteTreatment implements WasteTreatmentInterface
{

  public function treatWaste(AbstractWaste $waste){
    if ($waste instanceof IncineratableInterface){
      if ($this->currentCapacity >= $waste->getQuantity()) {
        $this->currentCapacity -= $waste->getQuantity();
      } else {
        echo ('Incinerator too full to treat all this waste');
      }
    } else {
      throw new \Exception('An incinerator can only treat compostable waste');
    }
  }
}