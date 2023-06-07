<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="fichero.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
<?php
$cine = simplexml_load_file("cine.xml");
$totalCine = count($cine->evento);


for($x = 0; $x<$totalCine; $x++){
    $sinopsis = $cine->evento[$x]->sinopsis;
    $titulo = $cine->evento[$x]->titulo->attributes();
    $caratula = $cine->evento[$x]->caratula;
    $compra = $cine->evento[$x]->compra;
    $genero = $cine->evento[$x]->genero;
    $duracion = $cine->evento[$x]->duracion;

    echo "<tr>";
    echo "<td>"; echo $titulo["value"]; echo "</td>";
    echo "<td>"; echo $sinopsis; echo "</td>";
    echo "<td>"; echo $duracion; echo "</td>";
    echo "<td>"; echo "<a href6='$compra'>Tickets</a>"; echo "</td>";
    echo "<td>"; echo $genero; echo "</td>";
    echo "<td>"; echo "<img src='$caratula'/>" ; echo "</td>";
    echo "</tr>";
}
?> 

</table>
</body>
</html>

