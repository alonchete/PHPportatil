<?php 

namespace Examen;

require_once '../vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../fichero.css" type="text/css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table class = "viviendas">
<?php

$viviendas = simplexml_load_file("viviendas.xml");
$totalViviendas = count($viviendas->vivienda);

for($x=0; $x<$totalViviendas; $x++){
    
    echo "<tr>";
    echo "<td>"; echo $viviendas->vivienda[$x]->precio; echo "</td>";
    echo "<td>"; echo $viviendas->vivienda[$x]->tipo; echo "</td>";
    echo "<td>"; echo $viviendas->vivienda[$x]->zona; echo "</td>";
    echo "</tr>";  

}

?>
</table>

<table class="inmpbiliaria">

<?php
 $servername = 'localhost';
 $user = 'examen';
 $pass = '123456';
 $database = 'Inmobiliaria';

$connect = new DBconnection();
$conn = $connect -> connection($servername, $user, $pass, $database);


$zonas = 'SELECT * FROM zonas';
$resultado = mysqli_query($connect -> connection($servername, $user, $pass, $database) , $zonas);


for($x=0; $x<$totalViviendas; $x++){
    
$tipo = $viviendas->vivienda[$x]->tipo;
$zona =  $viviendas->vivienda[$x]->zona;
$dormitorios = $viviendas->vivienda[$x]->dormitorios;
$precio = $viviendas->vivienda[$x]->precio;

$garage = $viviendas->vivienda[$x]->extras->garage;
$jardin = $viviendas->vivienda[$x]->extras->jardin;
$padel = $viviendas->vivienda[$x]->extras->padel;
$piscina = $viviendas->vivienda[$x]->extras->piscina;
$zonascomunes = $viviendas->vivienda[$x]->extras->zonascomunes;

$imagen = $viviendas->vivienda[$x]->image; 

  echo "<tr>";
    echo "<td>"; echo $tipo; echo "</td>";
    echo "<td>"; echo $zona; echo "</td>";
    echo "<td>"; echo $dormitorios; echo "</td>";
    echo "<td>"; echo $dormitorios; echo "</td>";
    echo "<td>"; echo $precio; echo "</td>";
    echo "<td>"; echo $garage; echo "</td>";
    echo "<td>"; echo $jardin; echo "</td>";
    echo "<td>"; echo $padel; echo "</td>";
    echo "<td>"; echo $piscina; echo "</td>";
    echo "<td>"; echo $zonascomunes ; echo "</td>";

    echo "</tr>";  



    /**$insert = "INSERT INTO viviendas(tipo, zona, dormitorios, precio, garage, jardin, padel, piscina, zonascomunes, imagen) 
    VALUES('$tipo','$zona','$dormitorios','$precio','$garage','$jardin','$padel','$piscina','$zonascomunes','$imagen')";
      
    $ins = mysqli_query($conn, $insert);**/


}

/**while($row=mysqli_fetch_assoc($resultado)){

    $rowid = $row["id"];
    $rowzone = $row["zona"];

    echo "<tr>";
   echo "<td>"; echo $rowzone; echo "</td>";
   echo "<td>"; echo $rowid; echo "</td>";
   echo "<td><a href='delete.php?id=$rowid'>Eliminar</a></td>";
   echo "<td><a href='modify.php?id=$rowid&zona=$rowzone'>Modificar</a></td>";

    echo "</tr>";
}**/
?>
</table>

<form  name='formulario' method='post' action='insert.php'>
    <label>Introduzca nueva localidad</label>
    <input type="text" name="zona"></input>    
    <input type="submit">
</form>
    
</body>
</html>

