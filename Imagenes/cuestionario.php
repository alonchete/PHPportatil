<html lang=”en”>

<head>

    <link rel="stylesheet" href="fichero.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>dni</title>
</head>


<?php


 echo
 "<form name='formulario' method='post' action='index.php'
  enctype='multipart/form-data'>
  
  <label>Por favor,Escoja la figura que desee</label><br>

  <label>Escoja una figura</label><br>
  <label>Triangulo</label>
  <input type='radio' name='figura' value='Triangulo' checked>
  <label>Circulo</label>
  <input type='radio' name='figura' value='Circulo'<br>
  <label>Rectangulo</label>
  <input type='radio' name='figura' value='Rectangulo'<br>
  <label></label><br>
  <input type='submit'> 
  </form>";

?>

</html>