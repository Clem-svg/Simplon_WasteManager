<?php

namespace App\Model\WasteTreatment;

use App\Model\Waste\AbstractRecyclableWaste;

interface WasteRecyclertInterface
{
  public function recycleWaste(AbstractWaste $waste);
}