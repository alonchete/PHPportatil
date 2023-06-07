<!DOCTYPE html>
<html lang=”en”>

<head>
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>Document</title>
</head>

<body>
    
    <?php

echo "<form name='formulario' method='post' action='http://localhost/ejercicio/sesiones.php'>
    <h4>Rellene todos los campos, no está registrado</h4>
    <label>Color</label><br>
     <input type='text' name='color'><br>";

      echo" <input type='submit' value='Subir'/>";      
      echo "</form>";

    ?>

</body>

</html>