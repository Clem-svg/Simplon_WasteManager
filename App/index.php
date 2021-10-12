<?php

require_once 'autoload.php';

$jsonCo2File = json_decode(file_get_contents("Data/co2.json"), true);
// $jsonCo2File = Array d'array
foreach($jsonCo2File as $key=>$array){
    switch ($key){
      case "plastiques":
        foreach ($array as $key=>$plastic){
          echo $key;
        }
        break;
      case "papier":
        echo $key;
        break;
      case "organique":
        echo $key;
        break;
      case "verre":
        echo $key;
        break;
      case "metaux":
        echo $key;
        break;
      case "autre":
        echo $key;
        break;
      default:
      echo "default";
    }
  }

  $jsonDataFile = json_decode(file_get_contents("Data/data.json"), true);


