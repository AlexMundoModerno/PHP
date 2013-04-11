<html>
  <head>
    <title> Ejemplo 04 PHP Basico </title>
  </head>

  <body>
    <?php
      $a=8;
      $b=3;
      $c=3;
      $d=2;

      echo $a==$b,"<br>";
      echo $a!=$b,"<br>";
      echo $a<$b,"<br>";
      echo $a>$b,"<br>";
      echo $a>=$c,"<br>";
      echo $b<=$c,"<br>";

      $d=$a==$b;
      echo $d,"<br>";
      echo "hola";
    ?>
  </body>
</html>