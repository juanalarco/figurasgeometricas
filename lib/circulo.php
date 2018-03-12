<?php
/**
 *
 */
class Circulo
{
  private $radio=0;
  private $numPi=3.14;





  function __construct($radio)
  {
    $this->radio=$radio;



  }


    public function getRadio()
    {
        return $this->radio;
    }

    public function setRadio($radio)
    {
        $this->radio = $radio;

        return $this;
    }






public function CalcularArea(){
  $area=0;
  $area=$this->radio*$this->numPi;
  return $area;
}

public function CalcularPerimetro(){
  $perimetro=0;
  $perimetro=$this->radio*$this->numPi*$this->radio;
  return $perimetro;
}















}








 ?>
