<?php

Namespace App\Model\WasteTreatment;


class PlasticRecycler extends AbstractWasteTreatment implements WasteTreatmentInterface
{

  protected array $plasticRecycled;


  /**
   * Get the value of plasticRecycled
   *
   * @return  array
   */
  public function getPlasticRecycled()
  {
    return $this->plasticRecycled;
  }

  /**
   * Set the value of plasticRecycled
   *
   * @param  array  $plasticRecycled
   *
   * @return  self
   */
  public function setPlasticRecycled(array $plasticRecycled)
  {
    $this->plasticRecycled = $plasticRecycled;

    return $this;
  }
}

