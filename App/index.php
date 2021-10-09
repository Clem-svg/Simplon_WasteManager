<?php

require_once 'autoload.php';


use App\Model\Waste\Glass;

$test = new Glass(12,56,45);
var_dump($test->getRecycledCo2());
