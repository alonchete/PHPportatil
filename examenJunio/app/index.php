<?php

use Clases\viviendas;
use BD\DBConnection;

require_once '../vendor/autoload.php';

    $datos = new DBConnection();
    $datos -> connection();
    $viviendas = new viviendas();
    $conn = $datos -> connection();

    $total="SELECT COUNT(*) as total FROM viviendas";
    $resultTotal = $conn -> query($total)->fetch_row()[0];
    
    if ($resultTotal == 0){
        $viviendas -> insertarViviendas();
    }

    
$zonas = 'SELECT * FROM zonas';
$resultado = $conn -> query($zonas);

if (! $datos) {

    if (($err = mysql_errno()) == 1049)
    
    die ( "Base de datos no existe!");
    
    }
    
    else {
    
    echo "Database exists!";
    
    }




while($row=$resultado->fetch_row()){

    $rowid = $row[0];
    $rowzone = $row[1];

    echo "<table><tr>";
   echo "<td>"; echo $rowzone; echo "</td>";
   echo "<td>"; echo $rowid; echo "</td>";

    echo "</tr></table>";
}

?>