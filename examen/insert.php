<?php

include('index.php');

$zona = $_POST["zona"];
$dup = "SELECT zona FROM zonas WHERE zona = '$zona'";
$duplicidad = mysqli_query($conn, $dup);



if(mysqli_num_rows($duplicidad) ==  0 && !empty($zona)){

    $insert = "INSERT INTO zonas(zona) VALUES('$zona')";
    $ins = mysqli_query($conn, $insert);

}else{
    echo "zona ya existente";                   
}

header('Location: index.php');
?>