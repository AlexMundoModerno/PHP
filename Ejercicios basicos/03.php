<html>
  <head>
    <title> Ejemplo 03 PHP Basico </title>
  </head>

  <body>
    <?php
      $a=8;
      $b=3;


      $contraseña = "alex";
      $contraseña=sha1($contraseña);
      echo $contraseña;

      echo"<br> <br> <br>";
      
      echo "<input type=text value=",$a+$b,"> resultado de sumar a + b"."<br>";
      echo "<input type=text value=",$a-$b,"> resultado de restar a - b"."<br>";
      echo "<input type=text value=",$a*$b,"> resultado de multiplicar a * b"."<br>";
      echo "<input type=text value=",$a/$b,"> resultado de dividir a / b"."<br>";

      $a++;
      echo "<input type=text value=$a> incremento de a (a++)"."<br>";
  
      $b++;
      echo "<input type=text value=$b> incremento de b (b++)";

    ?>
  </body>
</html>