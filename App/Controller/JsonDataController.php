<?php

namespace App\Controller;

class JsonDataController {

  protected array $services;
  protected array $wasteData;


  function getContent(){
    $jsonDataFile = json_decode(file_get_contents("Data/data.json"), true);
    $this->services = $jsonDataFile['services'];
    $this->wasteData = $jsonDataFile['quartiers'];
  }

  function getServices(){
    return $this->services;
  }

  function getWasteData(){
    return $this->wasteData;
  }

}
