<?php

Namespace App\Model\WasteTreatment;

use App\Model\WasteTreatment\AbstractWasteTreatment;
use App\Model\WasteTreatment\WasteRecyclerInterface;
use App\Model\Waste\AbstractRecyclableWaste;
use App\Model\Waste\Glass;


class GlassRecycler extends AbstractWasteTreatment implements WasteRecyclerInterface
{
  public function recycleWaste(AbstractRecyclableWaste $waste){
    if ($waste instanceof Glass){
      if ($this->currentCapacity >= $waste->getQuantity()) {
        $this->currentCapacity -= $waste->getQuantity();
      } else {
        echo ('Glass recycler too full to treat all this waste');
      }
    } else {
      throw new \Exception('A glass recycler can only treat glass');
    }
  }

}
