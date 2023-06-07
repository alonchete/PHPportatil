
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
  
  <label>Nombre</label><br>
  <input type='text' name='nombre'><br>
  <label></label><br>
  

  <label>DNI</label><br>
  <input type='text' name='dni'><br>
  <label></label><br>
  
  <label>Sexo</label><br>
  <label>Hombre</label>
  <input type='radio' name='sexo' value='hombre' checked>
  <label>Mujer</label>
  <input type='radio' name='sexo' value='mujer'<br>
  <label></label><br>

  <label>Peso</label><br>
  <input type='text' name='peso'><br>
  <label></label><br>

  <label>Altura</label><br>
  <input type='text' name='altura'><br>
  <label></label><br>

  <label>Edad</label><br>
  <input type='text' name='edad'><br>
  <label></label><br>

  
  
  <input type='submit'> 
  </form>";

?>

</html>