<html>
  <head>
    <title> Ejemplo 08 PHP Basico </title>
  </head>
  <body>
    <br>
    <?php
      $i=1;
      $pares="";
      $impares="";
      while ($i<10)
      {

        if($i%2==0)
        {  
          $pares=$pares.$i.",";
        }
        else
        {
          $impares=$impares.$i.",";
        }
        $i++;
      }
        echo "numeros pares <input type=text value=",$pares,">";
        echo "<br>";
        echo "numeros impares <input type=text value=",$impares,">";
    ?>
  </body>
</html>