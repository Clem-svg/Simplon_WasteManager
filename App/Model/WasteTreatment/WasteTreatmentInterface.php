<?php

namespace App\Model\WasteTreatment;

use App\Model\Waste\AbstractWaste;

interface WasteTreatmentInterface
{
  public function treatWaste(AbstractWaste $waste);
}