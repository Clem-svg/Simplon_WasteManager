<?php

require_once 'autoload.php';


use App\Model\Waste\Glass;

$test = new Glass(12, 23, "hello");
var_dump($test);