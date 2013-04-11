<html>
  <head>
    <title> Ejemplo 05 PHP Basico </title>
  </head>

  <body>
    <?php
      $a=8;
      $b=3;
      $c=3;
      echo ($a==$b)&&($c>$b),"<br>";
      echo ($a==$b)||($b==$c),"<br>";
      echo !($b<=$c),"<br>";
    ?>
  </body>
</html>