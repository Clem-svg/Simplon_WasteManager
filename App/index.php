<?php

require_once 'autoload.php';

use App\Model\Waste\Paper;
use App\Model\WasteTreatment\GlassRecycler;
use App\Controller\JsonDataController;


echo 'Bonjour et bienvenue !';

// $testWaste = new Paper(12,12,12);
// var_dump($testWaste);
// $testIncinerator = new GlassRecycler(23);
// var_dump($testIncinerator);
// $testIncinerator->recycleWaste($testWaste);
// var_dump($testIncinerator);

// $hello = new JsonController();
// var_dump($hello->getCo2File());

$hello = new JsonDataController();
var_dump($hello->getContent());