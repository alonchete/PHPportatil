<?php
include ('index.php');

$id = $_GET["id"];
$delete = "DELETE FROM zonas WHERE id = $id " ;
$del = mysqli_query($conn, $delete);

header('Location: index.php')
?>