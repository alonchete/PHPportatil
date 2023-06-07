<?php
$servername = "localhost";
$database = "datoslibros";
$username = "root";
$password = "";
$dsn = "mysql:host=$servername;dbname=$database";

// Create connection
$conn =new PDO($dsn, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully </br>";

$resultado = $conn->query("SELECT title FROM book");
$resultado->bindParam(1, $producto);

 while ($registro = $resultado->fetch(PDO::FETCH_OBJ)) {
     echo " Producto ".$producto.": <br />";
}    
   

    ?>