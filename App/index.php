<?php

require_once 'autoload.php';

use App\Model\Waste\GreenWaste;
use App\Model\WasteTreatment\Incinerator;


$testWaste = new GreenWaste(12,12,12);
var_dump($testWaste);
$testIncinerator = new Incinerator(23);
var_dump($testIncinerator);
$testIncinerator->treatWaste($testWaste);
var_dump($testIncinerator);
