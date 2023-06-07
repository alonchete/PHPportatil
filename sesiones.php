<!DOCTYPE html>
<html lang=”en”>

<head>

    <link rel="stylesheet" href="estilo.css" type="text/css">
    <meta charset=”UTF-8″ />
    <title>dni</title>
</head>

<body>
    <?php
;   
    
    if(isset($_REQUEST["poblacion"]) and isset($_REQUEST["nombre"]) and isset($_REQUEST["apellidos"]) ){ 
        session_start();
        
$_SESSION["nombre"] = $_POST["nombre"];

echo $_SESSION["nombre"];

      
    }else  { echo   "<form name='formulario' method='post' action='http://localhost/ejercicio/sesiones.php'>
            <h4>Rellene todos los campos, no está registrado</h4>
            <label>Nombre</label><br>
             <input type='text' name='nombre'><br>
             <label>Apellidos</label><br>
             <input type='text' name='apellidos'><br>
             <label>Poblacion</label><br>
             <input type='text' name='poblacion'><br>
             <label>DNI</label><br>
             <input type='text' name='DNI'><br>
             ";
              echo" <input type='submit' value='Subir'/>";      
              echo "</form>";
            }

    ?>
</body>

</html>