<?php

Namespace App\Model\WasteTreatment;

use App\Model\WasteTreatment\AbstractWasteTreatment;
use App\Model\WasteTreatment\WasteRecyclerInterface;
use App\Model\Waste\AbstractRecyclableWaste;
use App\Model\Waste\Paper;


class PaperRecycler extends AbstractWasteTreatment implements WasteRecyclerInterface
{
  public function recycleWaste(AbstractRecyclableWaste $waste){
    if ($waste instanceof Paper){
      if ($this->currentCapacity >= $waste->getQuantity()) {
        $this->currentCapacity -= $waste->getQuantity();
      } else {
        echo ('Paper recycler too full to treat all this waste');
      }
    } else {
      throw new \Exception('A paper recycler can only treat paper');
    }
  }

}
