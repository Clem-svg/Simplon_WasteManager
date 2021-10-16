<?php

Namespace App\Model\WasteTreatment;

use App\Model\WasteTreatment\AbstractWasteTreatment;
use App\Model\WasteTreatment\Services\WasteTreatmentInterface;
use App\Model\Waste\AbstractWaste;
use App\Model\Waste\WasteType\CompostableInterface;



class Composter extends AbstractWasteTreatment implements WasteTreatmentInterface
{
  public function treatWaste(AbstractWaste $waste){
    if ($waste instanceof CompostableInterface){
      if ($this->currentCapacity >= $waste->getQuantity()) {
        $this->currentCapacity -= $waste->getQuantity();
      } else {
        echo ('Composter too full to treat all this waste');
      }
    } else {
      throw new \Exception('A composter can only treat compostable waste');
    }
  }
}