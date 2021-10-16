<?php

require_once 'autoload.php';

use App\Model\Waste\Paper;
use App\Model\WasteTreatment\GlassRecycler;

echo 'Bonjour et bienvenue !';

$testWaste = new Paper(12,12,12);
var_dump($testWaste);
$testIncinerator = new GlassRecycler(23);
var_dump($testIncinerator);
$testIncinerator->recycleWaste($testWaste);
var_dump($testIncinerator);
