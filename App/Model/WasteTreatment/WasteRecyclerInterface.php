<?php

namespace App\Model\WasteTreatment;

use App\Model\Waste\AbstractRecyclableWaste;

interface WasteRecyclerInterface
{
  public function recycleWaste(AbstractRecyclableWaste $waste);
}