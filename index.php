<?php
  include "./lib/cuadrado.php";
  include "./lib/triangulo.php";
  include "./lib/circulo.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Primera Clase</title>
  </head>
  <body>
    <?php
      $cuadrado= new Cuadrado(0);
      $cuadrado->setLado(5);
      $devolver=$cuadrado->getLado();
      $area=$cuadrado->CalcularArea();
      $perimetro=$cuadrado->CalcularPerimetro();

      echo "Cuadrado";
      echo "<br>";
      echo "Su lado es ".$devolver;
      echo "<br>";
      echo "Su area es ".$area;
      echo "<br>";
      echo "Su perimetro es ".$perimetro;
      echo "<br>";


      $triangulo= new Triangulo(0,0);
      $triangulo->setBase(5.2);
      $triangulo->setAltura(3);

      $devolver=$triangulo->getBase();
      $devolver=$triangulo->getAltura();

      $area=$triangulo->CalcularArea();
      $perimetro=$triangulo->CalcularPerimetro();

      echo "<br>";
      echo "Triangulo";
      echo "<br>";
      echo "Su lado es ".$devolver;
      echo "<br>";
      echo "Su area es ".$area;
      echo "<br>";
      echo "Su perimetro es ".$perimetro;
      echo "<br>";


      $circulo= new Circulo(0);
      $circulo->setRadio(3);


      $devolver=$circulo->getRadio();


      $area=$circulo->CalcularArea();
      $perimetro=$circulo->CalcularPerimetro();

      echo "<br>";
      echo "Circulo";
      echo "<br>";
      echo "Su radio es ".$devolver;
      echo "<br>";
      echo "Su area es ".$area;
      echo "<br>";
      echo "Su perimetro es ".$perimetro;






    ?>
  </body>
</html>
