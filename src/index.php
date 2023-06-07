
<?php

include 'clientes.php';


    $dni = $_REQUEST["dni"];
    $nombre = $_REQUEST["nombre"];
    $edad = $_REQUEST["edad"];
    $sexo = $_REQUEST["sexo"];
    $peso =$_REQUEST["peso"]; 
    $altura = $_REQUEST["altura"];
    
    $obj1 = new clientes();
    $obj2 = new clientes($nombre,$edad,$sexo);
    $obj3 = new clientes($nombre,$edad,$sexo, $dni, $peso, $altura);

    echo "A " . $obj1-> __toString();
    echo "<br>";
    echo "B " . $obj2-> __toString();
    echo "<br>";
    echo "C " . $obj3-> __toString();


?>