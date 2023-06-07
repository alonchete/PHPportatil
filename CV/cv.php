
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
  
  <label>Nombre y apellidos</label><br>
  <input type='text' name='nombre' value='cHACHO'><br>
  <label></label><br>

  <label>Sexo</label><br>
  <label>Hombre</label>
  <input type='radio' name='sexo' value='hombre'>
  <label>Mujer</label>
  <input type='radio' name='sexo' value='mujer'><br>
  <label></label><br>


  <label>Idiomas:</label><br>
  <label>Castellano</label>
  <input type='checkbox' name='idioma[]' value='español'>
  <label>Inglés</label>
  <input type='checkbox' name='idioma[]' value='ingles'>
  <label>Frances</label>
  <input type='checkbox' name='idioma[]' value='frances'>
  <label>Aleman</label>
  <input type='checkbox' name='idioma[]' value='aleman'><br>
  <label></label><br>

  <label>Aficiones</label><br>
  <select name='aficiones[]' multiple>
    <option value='Musica'>Musica</option>
    <option value='Deportes'>Deportes</option>
    <option value='Videojuegos'>Videojuegos</option>
  </select><br>
  <label></label><br>


  <label>Maximos estudios alcanzados</label><br>
  <select name='estudios' >
     <option value='ESO'>ESO</option>
     <option value='Bachillerato'>Bachillerato</option>
     <option value='Grado Medio'>Grado Medio</option>
     <option value='Grado Superior'>Grado Superior</option>
  </select><br>
  <label></label><br>

  <input type='file' name='imagen'><br>

  <input type='submit' value='Subir'/> 
  </form>";

?>

</html>