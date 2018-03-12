<?php
/**
 *
 */
class Triangulo
{
  private $base=5.2;
  private $altura=3;



  // private $tamanolado=5;

  function __construct($base,$altura)
  {
    $this->base=$base;
    $this->altura=$altura;


  }


    public function getBase()
    {
        return $this->base;
    }

    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }





public function CalcularArea(){
  $area=0;
  $area=$this->base*$this->altura/2;
  return $area;
}

public function CalcularPerimetro(){
  $perimetro=0;
  $perimetro=$this->base*3;
  return $perimetro;
}















}








 ?>
