<?php

namespace Clases;

use  BD\DBConnection;

require_once '../vendor/autoload.php';


class viviendas{

    public function insertarViviendas(){
   
        
    $viviendas = simplexml_load_file("../viviendas.xml");
    $totalViviendas = count($viviendas->vivienda);
    $datos = new DBConnection();
    $conn =  $datos -> connection();

    for($x = 0; $x<$totalViviendas; $x++){
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

    $insert = "INSERT INTO viviendas(tipo, zona, dormitorios, precio, garage, jardin, padel, piscina, zonascomunes, imagen) 
    VALUES('$tipo','$zona','$dormitorios','$precio','$garage','$jardin','$padel','$piscina','$zonascomunes','$imagen')";
    $ins = mysqli_query($conn, $insert);
    }
    
    }

}

?>