<?php
/**
 *
 */
class Cuadrado
{
  private $lado=4;


  // private $tamanolado=5;

  function __construct($lado)
  {
    $this->lado=$lado;
  }


    public function getLado()
    {
        return $this->lado;
    }

    public function setLado($lado)
    {
        $this->lado = $lado;

        return $this;
    }

public function CalcularArea(){
  $area=0;
  $area=$this->lado*$this->lado;
  return $area;
}

public function CalcularPerimetro(){
  $perimetro=0;
  $perimetro=$this->lado*4;
  return $perimetro;
}















}








 ?>
