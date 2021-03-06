<?php

Namespace App\Model\WasteTreatment;

use App\Model\WasteTreatment\AbstractWasteTreatment;
use App\Model\WasteTreatment\WasteRecyclerInterface;
use App\Model\Waste\AbstractRecyclableWaste;
use App\Model\Waste\Metal;


class MetalRecycler extends AbstractWasteTreatment implements WasteRecyclerInterface
{
  public function recycleWaste(AbstractRecyclableWaste $waste){
    if ($waste instanceof Metal){
      if ($this->currentCapacity >= $waste->getQuantity()) {
        $this->currentCapacity -= $waste->getQuantity();
      } else {
        echo ('Metal recycler too full to treat all this waste');
      }
    } else {
      throw new \Exception('A metal recycler can only treat metal');
    }
  }

}