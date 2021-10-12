<?php

namespace App\Models\WasteTreatment;

use App\Models\Waste\AbstractWaste;

interface WasteTreatmentInterface
{
  public function treatWaste(AbstractWaste $waste);
}