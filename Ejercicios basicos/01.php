<html>
  <head>
    <title> Ejemplo 01 PHP Basico </title>
  </head>
  <body>
    Parte de HTML normal.
    <br><br>
    <?php
      echo "Parte de PHP <br>";
      for ($i=0;$i<10;$i++)
      {
        echo "Linea ".$i." ";
        if($i%2==0)
        {
          echo "es par <br>";
        }
        else
        {
          echo "es impar <br>";
        }
      }
    ?>
  </body>
</html>