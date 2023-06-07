<?php
include('index.php');

$zona = $_POST['zona'];
$dup = "SELECT zona FROM zonas WHERE zona = '$zona'";
$duplicidad = mysqli_query($conn, $dup);


$id = $_POST['id'];


if(mysqli_num_rows($duplicidad) ==  0 && !empty($zona)){

    $modify = "UPDATE zonas SET zona='$zona' WHERE id='$id'" ;
    $mod = mysqli_query($conn, $modify);
    header('Location: index.php');


}else{
    header('Location: error.php');
}


?>