<?php

namespace Examen;

class DBconnection{
   public $conn;
   
   public function connection($servername, $user, $pass, $database){

    $conn = mysqli_connect($servername, $user, $pass, $database);

     mysqli_set_charset($conn , "uft8");


   return $conn;
}

}
?>

