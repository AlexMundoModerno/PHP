<html>
  <head>
    <title> Ejemplo 09 PHP Basico </title>
  </head>
  <body>
    Inicio <br>
    <?php
    $url=array("http://www.github.com","http://www.pccomponentes.com","http://www.google.es"); //array
    $i=0;
      for ($i=0;$i<3;$i++)
      {
        echo "ir a: "."<a href='$url[$i]'>"."$url[$i]"."</a>"."<br>";
      }
    ?>
    Final <br>
  </body>
</html>