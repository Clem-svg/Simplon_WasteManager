<?php

namespace App\Model\Waste;

use App\Model\WasteType\RecyclableInterface;
use App\Model\WasteType\IncineratableInterface;

class Glass extends AbstractWaste implements RecyclableInterface, IncineratableInterface {

}