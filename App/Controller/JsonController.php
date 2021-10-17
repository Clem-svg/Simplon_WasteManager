<?php


namespace App\Controller;

class JsonController {

  function getCo2File(){

  $jsonCo2File = json_decode(file_get_contents("Data/co2.json"), true);
  $co2Array = [];

  foreach($jsonCo2File as $key=>$array){
      switch ($key){
        case "plastiques":
          foreach ($array as $key=>$plastic){
            switch ($key){
              default:
                $co2Array += [
                  "{$key}Incineration" => $plastic['incineration'],
                  "{$key}Recycled" => $plastic['recyclage']
                  ];
            }
          }
          break;
        default:
          if(!is_null($array['incineration'])){
            $co2Array += ["{$key}Incineration" => $array['incineration']];
          };
          if($array['recyclage']){
            $co2Array += ["{$key}Recycled" => $array['recyclage']];
          };
          if(!is_null($array['compostage'])){
            $co2Array += ["{$key}Composted" => $array['compostage']];
          };
          break;
      }
    }

    return $co2Array;

  }

}
